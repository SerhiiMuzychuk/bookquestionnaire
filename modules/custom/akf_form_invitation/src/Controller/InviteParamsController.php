<?php

namespace Drupal\akf_form_invitation\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\Core\Access\AccessResult;
use Symfony\Component\HttpFoundation\RedirectResponse;

class InviteParamsController extends ControllerBase {

  /**
   * Provides access to form invitation.
   * @param $node
   *
   * @return \Drupal\Core\Access\AccessResultAllowed|\Drupal\Core\Access\AccessResultForbidden
   */
  public function admin_tab_access($node) {
    $node_data = node_load($node);
    if ($node_data) {
      if ($node_data->getType() == 'discussion'){
        return AccessResult::allowed();
      }
      else {
        return AccessResult::forbidden();
      }
    }
    return AccessResult::forbidden();
  }

  /**
   * Provides invitation processing functionality.
   * @param $hash
   *
   * @return array
   */
  public function inviteComplete($hash) {
    $query = \Drupal::database()->select('invites_discussion', 'inv');
    $query->fields('inv', ['uid', 'status', 'discussion']);
    $query->condition('inv.hash', $hash);
    $output = $query->execute()->fetchAssoc();
    if (!empty($output) && $output['status'] == 0) {
      $option = [
        'query' => [
          'id' => $hash,
        ],
        'attributes' => [
          'class' => [
            'btn',
            'btn-primary'
          ],
        ],
      ];
      if ($output['uid'] == 0) {
        $link_accept = Link::fromTextAndUrl(t('To acсept'), Url::fromRoute('user.register', [], $option))->toString();
      }
      else {
        $link_accept = Link::fromTextAndUrl(t('To acсept'), Url::fromRoute('akf_form_invitation.accepted', ['hash' => $hash], $option))->toString();
      }
      $link_reject = Link::fromTextAndUrl(t('To reject'), Url::fromRoute('akf_form_invitation.reject', ['hash' => $hash], [ 'attributes' => [ 'class' => [ 'btn', 'btn-success' ],],]))->toString();
      $body = substr(node_load($output['discussion'])->get('body')->getValue()[0]['value'],0, 600);
      $response = [
        '#theme' => 'invitation',
        '#invite' => node_load($output['discussion'])->getTitle(),
        '#body' => $body,
        '#acсept' => $link_accept,
        '#reject' => $link_reject,
      ];
    }
    else {
      $response = [
        '#theme' => 'invitation',
        '#error' => $this->t('This invitation is incorrect'),
      ];
    }
    return $response;
  }

  /**
   * Functionality to reject discussion.
   * @param $hash
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   */
  public function invitesReject($hash) {
    $query = \Drupal::database()->update('invites_discussion');
    $query->fields([
      'status' => 2,
    ]);
    $query->condition('hash', $hash);
    $query->execute();
    $response = new RedirectResponse(Url::fromRoute('<front>')->toString());
    return $response;
  }

  /**
   * Provide functionality to acсept discussion.
   * @param $hash
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   */
  public function invitesAccepted($hash) {
    $query = \Drupal::database()->select('invites_discussion', 'inv');
    $query->fields('inv', ['uid', 'discussion', 'role']);
    $query->condition('inv.hash', $hash);
    $output = $query->execute()->fetchAssoc();
    if ($output) {
      // Create paragraph.
      $paragraph = Paragraph::create(['type' => 'discussion',]);
      $paragraph->set('field_discussion', $output['discussion']);
      $paragraph->set('field_discussion_role', $output['role']);
      $paragraph->isNew();
      $paragraph->save();
      // Add paragraph to user.
      $user =  user_load($output['uid']);
      $current = $user->get('field_discussion_role')->getValue();
      $current[] = [
        'target_id' => $paragraph->id(),
        'target_revision_id' => $paragraph->getRevisionId(),
      ];
      $user->set('field_discussion_role', $current);
      $user->save();
      // Change status in db inv.
      $query = \Drupal::database()->update('invites_discussion');
      $query->fields([
        'status' => 1,
      ]);
      $query->condition('hash', $hash);
      $query->execute();
      $response = new RedirectResponse(Url::fromRoute('user.login')->toString());
    }
    else {
      $response = [
        '#theme' => 'invitation',
        '#error' => $this->t('This invitation is incorrect'),
      ];
    }
    return $response;
  }
}
