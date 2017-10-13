<?php
 /**
  * @file
  * Contains \Drupal\kogan_book\Controller\ResultController.
  */

namespace Drupal\kogan_book\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\oil_survey\Form\QuestionForm; 
use Drupal\Core\Block\BlockBase;
use Drupal\Core\core\modules\user\src\Form;
use \Drupal\Core\Form\FormBase;
use Drupal\block\Entity\Block;


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
    $arrowx1 = \Drupal::request()->query->get('arrowx1');
    $arrowy1 = \Drupal::request()->query->get('arrowy1');
    $arrowx2 = \Drupal::request()->query->get('arrowx2');
    $arrowy2 = \Drupal::request()->query->get('arrowy2');
    $question1 = \Drupal::request()->query->get('question1');
    $question2 = \Drupal::request()->query->get('question2');
    $question3 = \Drupal::request()->query->get('question3');
    $question4 = \Drupal::request()->query->get('question4');
    $question5 = \Drupal::request()->query->get('question5');
    $question6 = \Drupal::request()->query->get('question6');
    $question7 = \Drupal::request()->query->get('question7');
    $question8 = \Drupal::request()->query->get('question8');
    $question9 = \Drupal::request()->query->get('question9');
    $question10 = \Drupal::request()->query->get('question10');
    $question11 = \Drupal::request()->query->get('question11');
    $question12 = \Drupal::request()->query->get('question12');
    $question13 = \Drupal::request()->query->get('question13');
    $question14 = \Drupal::request()->query->get('question14');
    $question15 = \Drupal::request()->query->get('question15');
    $question101 = \Drupal::request()->query->get('question110');
    $question102 = \Drupal::request()->query->get('question102');
    $question103 = \Drupal::request()->query->get('question103');
    $question104 = \Drupal::request()->query->get('question104');
    $question105 = \Drupal::request()->query->get('question105');
    $question106 = \Drupal::request()->query->get('question106');
    $question107 = \Drupal::request()->query->get('question107');
    $question108 = \Drupal::request()->query->get('question108');
    $question109 = \Drupal::request()->query->get('question109');
    $question110 = \Drupal::request()->query->get('question110');
    $question111 = \Drupal::request()->query->get('question111');
    $question112 = \Drupal::request()->query->get('question112');
    $question113 = \Drupal::request()->query->get('question113');
    $question114 = \Drupal::request()->query->get('question114');

    $x = $frontx*100 + 100;
    $x1 = $backx*100 + 100;
    $x2 = $monetx*100 + 100;
    $y = 600 - $fronty*100;
    $y1 = 600 - $backy*100;
    $y2 = 600 - $monety*100;
    $z1 = $targetx*100 + 100;
    $z2 = 600 - $targety*100;

    $arrowx1 = $x + 15;
    $arrowy1 = $y - 30;
    $arrowx2 = $z1 - 25;
    $arrowy2 = $z2 + 50;

    $feedback = Block::load('simpleblockexample');
   	$block = \Drupal::entityTypeManager()->getViewBuilder('block')->view($feedback);
   	$xelll = t('hello');

   	$koord = [
   	  'frontx' => $x,
      'backx' => $x1,
      'monetx' => $x2,
      'fronty' => $y,
      'backy' => $y1,
      'monety' => $y2,
      'targetx' => $z1,
      'targety' => $z2,
      'arrowx1' => $arrowx1,
      'arrowy1' => $arrowy1,
      'arrowx2' => $arrowx2,
      'arrowy2' => $arrowy2,
      'question1' => $question1,
      'question2' => $question2,
      'question3' => $question3,
      'question4' => $question4,
      'question5' => $question5,
      'question6' => $question6,
      'question7' => $question7,
      'question8' => $question8,
      'question9' => $question9,
      'question10' => $question10,
      'question11' => $question11,
      'question12' => $question12,
      'question13' => $question13,
      'question14' => $question14,
      'question15' => $question15,
      'question101' => $question101,
      'question102' => $question102,
      'question103' => $question103,
      'question104' => $question104,
      'question105' => $question105,
      'question106' => $question106,
      'question107' => $question107,
      'question108' => $question108,
      'question109' => $question109,
      'question110' => $question110,
      'question111' => $question111,
      'question112' => $question112,
      'question113' => $question113,
      'question114' => $question114,
   	];

	\Drupal::state()->setMultiple($koord);	

    return array(
      '#theme' => 'page_result',
      '#feedback' => $block,
      '#frontx' => $x,
      '#backx' => $x1,
      '#monetx' => $x2,
      '#fronty' => $y,
      '#backy' => $y1,
      '#monety' => $y2,
      '#targetx' => $z1,
      '#targety' => $z2,
      '#arrowx1' => $arrowx1,
      '#arrowy1' => $arrowy1,
      '#arrowx2' => $arrowx2,
      '#arrowy2' => $arrowy2,
      '#question1' => $question1,
      '#question2' => $question2,
      '#question3' => $question3,
      '#question4' => $question4,
      '#question5' => $question5,
      '#question6' => $question6,
      '#question7' => $question7,
      '#question8' => $question8,
      '#question9' => $question9,
      '#question10' => $question10,
      '#question11' => $question11,
      '#question12' => $question12,
      '#question13' => $question13,
      '#question14' => $question14,
      '#question15' => $question15,
      '#question101' => $question101,
      '#question102' => $question102,
      '#question103' => $question103,
      '#question104' => $question104,
      '#question105' => $question105,
      '#question106' => $question106,
      '#question107' => $question107,
      '#question108' => $question108,
      '#question109' => $question109,
      '#question110' => $question110,
      '#question111' => $question111,
      '#question112' => $question112,
      '#question113' => $question113,
      '#question114' => $question114,
    );
  }  

}