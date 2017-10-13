<?php

namespace Drupal\akf_form_invitation\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Defines a route controller for entity autocomplete form elements.
 */
class AutocompleteController extends ControllerBase {

  /**
   * Handler for autocomplete request.
   */
  public function handleAutocomplete(Request $request) {
    $string = $request->query->get('q');
    $matches = array();
    $query = db_select('users_field_data', 'u')
      ->fields('u', ['name', 'mail', 'uid'])
      ->condition('mail', $string . '%', 'LIKE')
      ->execute()
      ->fetchAll();
    foreach ($query as $row) {
      $matches[] = ['value' => $row->mail, 'label' => $row->name . '(' . $row->uid . ')'];
    }
    return new JsonResponse($matches);
  }
}
