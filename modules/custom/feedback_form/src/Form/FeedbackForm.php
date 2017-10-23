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


  $values = array(
    'All' => t('Any'),
    '4048' => t('Energie-/Entsorgungswirtschaft'),
    '4057' => t('Chemie/Pharma'),
    '4055' => t('Anlagenbau/Stahl'),
    '4050' => t('Maschinenbau/Feinmechanik'),
    '4069' => t('Automobilbau'),
    '17' => t('Elektrotechnik/Medizintechnik'),
    '20' => t('ETextil/Bekleidung'),
    '18' => t('Nahrungs- und Genußmittel'),
    '4046' => t('Handel'),
    '14' => t('Finanzdienstleistungen'),
    '4067' => t('Versicherungen'),
    '12' => t('Dienstleistungen allgemein'),
    '21' => t('Medien/Verlage'),
    '4053' => t('Bau-/Baustoffindustrie'),
    '4075' => t('Papier/Möbel/Holz/Verpackung'),
    '4062' => t('Luft- u. Raumfahrt/Marinautik/Bahntechnik'),
    '4045' => t('Computerindustrie/Telekommunikation'),
    '4219' => t('Sonstige'));

  $form['type'] = array(
    '#title' => t('Industry'),
    '#type' => 'select',
    '#options' => $values,
  );

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


  $file = File::create([
    'uid' => 1,
    'filename' => 'test.svg',
    'uri' => '/themes/custom/kogan/images/test.svg',
    'status' => 1,
  ]);
  $file->save();

  $image = new Imagick();
    $image->readImageBlob(file_get_contents('test.svg'));
    $image->setImageFormat("png24");
    $image->resizeImage(1024, 768, imagick::FILTER_LANCZOS, 1); 
    $image->writeImage('test.png');
 
  }

  public function viewNode(array &$form, FormStateInterface $form_state) {
    $ajax_response = new AjaxResponse();
    $tit = $form_state->getValue('title');
    $bod = $form_state->getValue('name');
    $company = $form_state->getValue('company');
    $size = $form_state->getValue('company_size');
    
    $node = Node::create([
    'type' => 'questionnaire',
    'title' => $tit,
    'field_name' => $bod,
    'field_company' => $company,
    'field_company_size' => $size,
  ]);
  $node->save();

    return $ajax_response; 
  }

  

}
