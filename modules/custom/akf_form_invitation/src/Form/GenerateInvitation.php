<?php

namespace Drupal\akf_form_invitation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class GenerateInvitation extends FormBase{

  public function getFormId() {
    return 'akf_form_invitation';
  }

  /**
   * Loading taxonomy terms.
   *
   * @return array
   */
  public function loadTerms() {
    $tag_terms = \Drupal::entityManager()->getStorage('taxonomy_term')->loadTree('discussion_role');
    $tags = [];
    foreach ($tag_terms as $tag_term) {
      $tags[$tag_term->tid] = $tag_term->name;
    }
    return $tags;
  }

  /**
   * List invitations users.
   *
   * @param $nid
   *
   * @return array
   */
  public function getInvitations($nid) {
    $query = \Drupal::database()->select('invites_discussion', 'inv');
    $query->fields('inv', ['uid', 'status', 'mail', 'role', 'created']);
    $query->condition('inv.discussion', $nid);
    $query->orderBy('inv.id', 'DESC');
    $pager = $query->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit(20);
    $results = $pager->execute()->fetchAll();
    $output = [];
    foreach ($results as $result) {
      $output[] = [
        'username' =>  user_load($result->uid)->getUsername(),
        'email' => $result->mail,
        'role' => taxonomy_term_load($result->role)->get('name')->value,
        'status' => ($result->status > 0) ? (($result->status == 1) ? t('Accepted') : t('Rejected')) : t('Sent'),
        'created' => date('j.n.Y H:i', $result->created),
     ];
   }
    return $output;
  }

  /**
   * Form for invitation.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return array
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $nid = \Drupal::request()->attributes->get('node');
    $header = [
      'username' => t('User name'),
      'email' => t('Email'),
      'role' => t('Role'),
      'status' => t('Status'),
      'created' => t('Created'),
    ];
    $form['participant']  = [
      '#type' => 'label',
      '#title' => t('List existing users and invitations'),
    ];
    $form ['table'] = [
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $this->getInvitations($nid),
      '#empty' => t('No participants found'),
    ];
    $form['pager'] = [
      '#type' => 'pager'
    ];
    $form['add']  = [
      '#type' => 'label',
      '#title' => t('Add new participant'),
    ];
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => t('Email'),
      '#autocomplete_route_name' => 'akf_form_invitation.autocomplete',
      '#required' => TRUE,
    ];
    $form['role'] = [
      '#type' => 'select',
      '#title' => t('Discussion role'),
      '#required' => TRUE,
      '#options' => $this->loadTerms(),
    ];
    $form['body'] = [
      '#type' => 'textarea',
      '#title' => t('Body'),
      '#required' => TRUE,
      '#default_value' => t('Hello! You are invited to the discussion, for confirmation go to the link '),
    ];
    $form['discussion'] = [
      '#type' => 'value',
      '#value' => $nid,
    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Send invitation'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (!valid_email_address($form_state->getValue('email'))) {
      $form_state->setErrorByName('email', $this->t('Incorrect email'));
    }
    elseif (strlen($form_state->getValue('body')) < 10) {
      $form_state->setErrorByName('body', $this->t('The text is too short.'));
    }
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $hash = user_password(30);
    if ($user = user_load_by_mail($form_state->getValue('email'))) {
      $uid = $user->id();
    }
    else {
      $uid = 0;
    }
    // Insert to database.
    $query = \Drupal::database()->insert('invites_discussion');
    $query->fields([
      'uid',
      'status',
      'mail',
      'discussion',
      'role',
      'created',
      'expires',
      'hash',
    ]);
    $query->values([
      $uid,
      '0',
      $form_state->getValue('email'),
      $form_state->getValue('discussion'),
      $form_state->getValue('role'),
      time(),
      time() + (7 * 24 * 60 * 60),
      $hash,
    ]);
    $query->execute();
    // Generate link.
    $options = ['absolute' => TRUE];
    $url = Url::fromRoute('akf_form_invitation.invites', ['hash' => $hash], $options)->toString();
    // Send mail.
    $mailManager = \Drupal::service('plugin.manager.mail');
    $module = 'akf_form_invitation';
    $key = 'generate_invite';
    $to = $form_state->getValue('email');
    $params['body'] = $form_state->getValue('body');
    $params['link'] = $url;
    $params['title'] = node_load($form_state->getValue('discussion'))->getTitle();
    $langcode = \Drupal::currentUser()->getPreferredLangcode();
    $send = true;
    $result = $mailManager->mail($module, $key, $to, $langcode, $params, NULL, $send);
    if ($result['result'] !== true) {
      drupal_set_message(t('There was a problem sending your invitation and it was not sent.'), 'error');
    }
    else {
      drupal_set_message(t('Your invitation has been sent.'));
    }
  }
}
