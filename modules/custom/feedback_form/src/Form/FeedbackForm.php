<?php
 
namespace Drupal\feedback_form\Form;
 
use Drupal\Core\Form\FormBase;                  
use Drupal\Core\Form\FormStateInterface;             
use Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use Drupal\Core\Mail\MailManagerInterface;
use Drupal\Component\Utility\SafeMarkup;
use Drupal\Component\Utility\Html;
 
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
      '#placeholder' => t('please fill...'),
    ];

    $form['company'] = [
      '#type' => 'textfield',
      '#title' => 'Company',
      '#placeholder' => t('please fill...'),
    ];

    $form['company_size'] = [
      '#type' => 'textfield',
      '#title' => 'Company size',
      '#placeholder' => t('please fill...'),
    ];

    


    $values = [
      'Any' => t('Any'),
      'Energie-/Entsorgungswirtschaft' => t('Energie-/Entsorgungswirtschaft'),
      'Chemie/Pharma' => t('Chemie/Pharma'),
      'Anlagenbau/Stahl' => t('Anlagenbau/Stahl'),
      'Maschinenbau/Feinmechanik' => t('Maschinenbau/Feinmechanik'),
      'Automobilbau' => t('Automobilbau'),
      'Elektrotechnik/Medizintechnik' => t('Elektrotechnik/Medizintechnik'),
      'ETextil/Bekleidung' => t('ETextil/Bekleidung'),
      'Nahrungs- und Genußmittel' => t('Nahrungs- und Genußmittel'),
      'Handel' => t('Handel'),
      'Finanzdienstleistungen' => t('Finanzdienstleistungen'),
      'Versicherungen' => t('Versicherungen'),
      'Dienstleistungen allgemein' => t('Dienstleistungen allgemein'),
      'Medien/Verlage' => t('Medien/Verlage'),
      'Bau-/Baustoffindustrie' => t('Bau-/Baustoffindustrie'),
      'Papier/Möbel/Holz/Verpackung' => t('Papier/Möbel/Holz/Verpackung'),
      'Luft- u. Raumfahrt/Marinautik/Bahntechnik' => t('Luft- u. Raumfahrt/Marinautik/Bahntechnik'),
      'Computerindustrie/Telekommunikation' => t('Computerindustrie/Telekommunikation'),
      'Sonstige' => t('Sonstige')
    ];

    $form['industry'] = [
      '#title' => t('Industry'),
      '#type' => 'select',
      '#options' => $values,
    ];

    $form['title'] = [
      '#type' => 'textfield',
      '#title' => 'Email',
      '#placeholder' => t('please fill...')
    ];

    $form['agree'] = array(
      '#type' => 'checkbox',
      '#title' => 'I agree to receive occasional informational e-mails regarding the topic of the book',
    );

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
        'progress' => [
          'type' => 'throbber',
        ],
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
    $industry = $form_state->getValue('industry');
    $agree = $form_state->getValue('agree');
    

     $keys = [
      'frontx',
      'backx',
      'monetx',
      'fronty',
      'backy',
      'monety',
      'targetx',
      'targety',
      'arrowx1',
      'arrowy1',
      'arrowx2',
      'arrowy2',
      'question1',
      'question2',
      'question3',
      'question4',
      'question5',
      'question6',
      'question7',
      'question8',
      'question9',
      'question10',
      'question11',
      'question12',
      'question13',
      'question14',
      'question15',
      'question101',
      'question102',
      'question103',
      'question104',
      'question105',
      'question106',
      'question107',
      'question108',
      'question109',
      'question110',
      'question111',
      'question112',
      'question113',
      'question114',
    ];


    $val = \Drupal::state()->getMultiple($keys);
    $frontx = $val["frontx"];
    $backx = $val['backx'];
    $monetx = $val['monetx'];
    $fronty = $val['fronty'];
    $backy = $val['backy'];
    $variables['monety'] = $val['monety'];
    $variables['targetx'] = $val['targetx'];
    $variables['targety'] = $val['targety'];
    $variables['arrowx1'] = $val['arrowx1'];
    $variables['arrowy1'] = $val['arrowy1'];
    $variables['arrowx2'] = $val['arrowx2'];
    $variables['arrowy2'] = $val['arrowy2'];
    $question1 = $val['question1'];
    $question2 = $val['question2'];
    $question3 = $val['question3'];
    $question4 = $val['question4'];
    $question5 = $val['question5'];
    $question6 = $val['question6'];
    $question7 = $val['question7'];
    $question8 = $val['question8'];
    $question9 = $val['question9'];
    $question10 = $val['question10'];
    $question11 = $val['question11'];
    $question12 = $val['question12'];
    $question13 = $val['question13'];
    $question14 = $val['question14'];
    $question15 = $val['question15'];
    $question101 = $val['question101'];
    $question102 = $val['question102'];
    $question103 = $val['question103'];
    $question104 = $val['question104'];
    $question105 = $val['question105'];
    $question106 = $val['question106'];
    $question107 = $val['question107'];
    $question108 = $val['question108'];
    $question109 = $val['question109'];
    $question110 = $val['question110'];
    $question111 = $val['question111'];
    $question112 = $val['question112'];
    $question113 = $val['question113'];
    $question114 = $val['question114'];
    $frontx = $val["frontx"];
    $fronty = $val['fronty'];
    $backx = $val['backx'];
    $monetx = $val['monetx'];
    $backy = $val['backy'];
    $monety = $val['monety'];
    $frontx2 = $val["frontx"];
    $fronty2 = $val['fronty'];
    $backx2 = $val['backx'];
    $monetx2 = $val['monetx'];
    $backy2 = $val['backy'] + 3;
    $monety2 = $val['monety'] - 3;
    $targetx2 = $val['targetx'];
    $targety2 = $val['targety'] - 3;
    $targetx = $val['targetx'];
    $targety = $val['targety'];
    $arrowx1 = $val['arrowx1'];
    $arrowy1 = $val['arrowy1'];
    $arrowx2 = $val['arrowx2'];
    $arrowy2 = $val['arrowy2'];
 


    $node = Node::create([
      'type' => 'questionnaire',
      'title' => $tit,
      'field_name' => $bod,
      'field_company' => $company,
      'field_company_size' => $size,
      'field_industry' => $industry,
      'field_iagree'=> $agree,
      'field_frontx' => $frontx,
      'field_fronty' => $fronty,
      'field_backx' =>  $backx,
      'field_backy' => $backy,
      'field_monetx' => $monetx,
      'field_monety' => $monety,
      'field_targetx' => $targetx,
      'field_targety' => $targety,
      'field_arrowx1' => $arrowx1,
      'field_arrowx2' => $arrowx2,
      'field_arrowx3' => $arrowx3,
      'field_arrowx4' => $arrowx4,
      'field_arrowy1' => $arrowy1,
      'field_arrowy2' => $arrowy2,
      'field_arrowy3' => $arrowy3,
      'field_arrowy4' => $arrowy4,
      'field_arrowy4' => $arrowy4,
      'field_frontx2' => $frontx2,
      'field_fronty2' => $fronty2,
      'field_backx2' =>  $backx2,
      'field_backy2' => $backy2,
      'field_monetx2' => $monetx2,
      'field_monety2' => $monety2,
      'field_targetx2' => $targetx2,
      'field_targety2' => $targety2,
      'field_question1' => $question1,
      'field_question2' => $question2,
      'field_question3' => $question3,
      'field_question4' => $question4,
      'field_question5' => $question5,
      'field_question6' => $question6,
      'field_question7' => $question7,
      'field_question8' => $question8,
      'field_question9' => $question9,
      'field_question10' => $question10,
      'field_question11' => $question11,
      'field_question12' => $question12,
      'field_question13' => $question13,
      'field_question14' => $question14,
      'field_question15' => $question15,
      'field_question101' => $question101,
      'field_question102' => $question102,
      'field_question103' => $question103,
      'field_question104' => $question104,
      'field_question105' => $question105,
      'field_question106' => $question106,
      'field_question107' => $question107,
      'field_question108' => $question108,
      'field_question109' => $question109,
      'field_question110' => $question110,
      'field_question111' => $question111,
      'field_question112' => $question112,
      'field_question113' => $question113,
      'field_question114' => $question114,
    ]);
    $node->save();
 
  }

  public function viewNode(array &$form, FormStateInterface $form_state) {
    $ajax_response = new AjaxResponse();
    $tit = $form_state->getValue('title');
    $bod = $form_state->getValue('name');
    $company = $form_state->getValue('company');
    $size = $form_state->getValue('company_size');
    $agree = $form_state->getValue('agree');
    
    $node = Node::create([
      'type' => 'questionnaire',
      'title' => $tit,
      'field_name' => $bod,
      'field_company' => $company,
      'field_company_size' => $size,
      'field_industry' => $industry,
      'field_iagree'=> $agree,
      'field_frontx' => $frontx,
      'field_fronty' => $fronty,
      'field_backx' =>  $backx,
      'field_backy' => $backy,
      'field_monetx' => $monetx,
      'field_monety' => $monety,
      'field_targetx' => $targetx,
      'field_targety' => $targety,
      'field_arrowx1' => $arrowx1,
      'field_arrowx2' => $arrowx2,
      'field_arrowy1' => $arrowy1,
      'field_arrowy2' => $arrowy2,
      'field_frontx2' => $frontx2,
      'field_fronty2' => $fronty2,
      'field_backx2' =>  $backx2,
      'field_backy2' => $backy2,
      'field_monetx2' => $monetx2,
      'field_monety2' => $monety2,
      'field_targetx2' => $targetx2,
      'field_targety2' => $targety2,
      'field_question1' => $question1,
      'field_question2' => $question2,
      'field_question3' => $question3,
      'field_question4' => $question4,
      'field_question5' => $question5,
      'field_question6' => $question6,
      'field_question7' => $question7,
      'field_question8' => $question8,
      'field_question9' => $question9,
      'field_question10' => $question10,
      'field_question11' => $question11,
      'field_question12' => $question12,
      'field_question13' => $question13,
      'field_question14' => $question14,
      'field_question15' => $question15,
      'field_question101' => $question101,
      'field_question102' => $question102,
      'field_question103' => $question103,
      'field_question104' => $question104,
      'field_question105' => $question105,
      'field_question106' => $question106,
      'field_question107' => $question107,
      'field_question108' => $question108,
      'field_question109' => $question109,
      'field_question110' => $question110,
      'field_question111' => $question111,
      'field_question112' => $question112,
      'field_question113' => $question113,
      'field_question114' => $question114,    
    ]);
    $node->save();

  return $ajax_response; 
  }

  

}
