<?php
 /**
  * @file
  * Contains \Drupal\kogan_book\Controller\ResultController.
  */

namespace Drupal\kogan_book\Controller;

use Drupal\Core\Controller\ControllerBase;
// use Drupal\Core\Block\BlockBase;
// use Drupal\Core\core\modules\user\src\Form;
// use \Drupal\Core\Form\FormBase;
// use Drupal\block\Entity\Block;

class ResultController extends ControllerBase {

	public function bookResult() {
    $output = array();
    $frontx = \Drupal::request()->query->get('frontx');
    $fronty = \Drupal::request()->query->get('fronty');
    $backx = \Drupal::request()->query->get('backx');
    $backy = \Drupal::request()->query->get('backy');
    $monetx = \Drupal::request()->query->get('monetx');
    $monety = \Drupal::request()->query->get('monety');
    $targetx = \Drupal::request()->query->get('targetx');
    $targety = \Drupal::request()->query->get('targety');
    $x = $frontx*146 - 46;
    $x1 = $backx*146 - 46;
    $x2 = $monetx*146 - 46;
    $y = 751 - $fronty*146;
    $y1 = 751 - $backy*146;
    $y2 = 751 - $monety*146;
    $z1 = $targetx*146 - 46;
    $z2 = 751 - $targety*146;

    return array(
      '#theme' => 'page_result',
      '#frontx' => $x,
      '#backx' => $x1,
      '#monetx' => $x2,
      '#fronty' => $y,
      '#backy' => $y1,
      '#monety' => $y2,
      '#targetx' => $z1,
      '#targety' => $z2,
    );
  }  

}