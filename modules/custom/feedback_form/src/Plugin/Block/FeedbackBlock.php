<?php

/**
 * @file
 * Contains \Drupal\feedback_form\Plugin\Block\FeedbackBlock.
 */


namespace Drupal\feedback_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 *
 * @Block(
 *   id = "feedback_block",
 *   admin_label = @Translation("Get the full report and a discount code for the book"),
 * )
 */
class FeedbackBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\feedback_form\Form\FeedbackForm');
    return $form;
  }

}