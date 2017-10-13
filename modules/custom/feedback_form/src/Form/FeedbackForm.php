<?php
 
namespace Drupal\feedback_form\Form;
 
use Drupal\Core\Form\FormBase;                  
use Drupal\Core\Form\FormStateInterface;             
use Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;

 
/**
 * @see \Drupal\Core\Form\FormBase
 */
class FeedbackForm extends FormBase {
  public function getFormId() {
    return 'feedback_form';
 }
 
  public function buildForm(array $form, FormStateInterface $form_state) {
  $config = $this->config('simple.settings');
  $form['#prefix'] = '<div id="my-form-wrapper-id">';
  $form['#suffix'] = '</div>';
  

  $form['name'] = [
    '#type' => 'textfield',
    '#title' => 'Name',
    '#placeholder' => t('please fill...')
  ];

  $form['company'] = [
    '#type' => 'textfield',
    '#title' => 'Company',
    '#placeholder' => t('please fill...')
  ];

  $form['company_size'] = [
    '#type' => 'textfield',
    '#title' => 'Company size',
    '#placeholder' => t('please fill...')
  ];

  $form['title'] = [
    '#type' => 'textfield',
    '#title' => 'Email',
    '#placeholder' => t('please fill...')
  ];

  $form['actions']['submit'] = [
    '#type' => 'submit',
    '#value' => $this->t('Send to mail'),
    '#attributes' => [
        'class' => [
            'btn',
            'btn-md',
            'btn-primary',
            'use-ajax-submit'
        ]
    ],
    '#ajax' => [
        'wrapper' => 'my-form-wrapper-id',
        'callback' => 'Drupal\ajax_example\Form\AjaxExampleForm::viewNode',
        'event' => 'click',
        'progress' => array(
          'type' => 'throbber',
        ),
    ]
  ];
  return $form;
 }



  public function validateForm(array &$form, FormStateInterface $form_state) {
    $title = $form_state->getValue('title');
    $body = $form_state->getValue('name');

    $title = htmlspecialchars($title);
    $body = htmlspecialchars($body);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $tit = $form_state->getValue('title');
    $bod = $form_state->getValue('name');
    $company = $form_state->getValue('company');
    $size = $form_state->getValue('company_size');
    
   $node = Node::create([
    'type'        => 'questionnaire',
    'title'       => $tit,
    'field_name' => $bod,
    'field_company' => $company,
    'field_company_size' => $size,
  ]);
  $node->save();
 
  }

  // public function viewNode(array &$form, FormStateInterface $form_state) {
  //   $ajax_response = new AjaxResponse();
  //   $tit = $form_state->getValue('title');
  //   $bod = $form_state->getValue('name');
  //   $company = $form_state->getValue('company');
  //   $size = $form_state->getValue('company_size');
    
  //   $node = Node::create([
  //   'type' => 'questionnaire',
  //   'title' => $tit,
  //   'field_name' => $bod,
  //   'field_company' => $company,
  //   'field_company_size' => $size,
  // ]);
  // $node->save();
  //   return $ajax_response; 
  // }

  

}
