<?php

/**
 * @file
 * Contains Drupal\kogan_book\Form\QuestionForm.
 */

namespace Drupal\kogan_book\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy\Entity\Term;
use Drupal\node\Entity\Node;
use Drupal\Core\Routing;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;
use Drupal\image\Plugin\Field\FieldWidget\ImageWidget;
use Drupal\image\Plugin\Field\FieldWidget\FileWidget;
use Drupal\image\Plugin\Field\FieldType\ImageItem;
use Drupal\file\Plugin\Field\FieldType\FileItem;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Controller\ControllerBase;

class QuestionForm extends FormBase {
	/**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'question_form';
  }

/**
   * {@inheritdoc}
   */
public function buildForm(array $form, FormStateInterface $form_state) {
     
    $form['question1'] = array(
      '#type' => 'radios',
      '#title' => t('1. Our offering bundles multiple components'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,    
    );


    $form['question2'] = array(
      '#type' => 'radios',
      '#title' => t('2. Our customers are bound into a series of frequent transactions with us.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question3'] = array(
    '#type' => 'radios',
      '#title' => t('3. We measure customer retention systematically'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question4'] = array(
    '#type' => 'radios',
      '#title' => t('4. Customers have broad and flexible choices regarding our offering.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question5'] = array(
    '#type' => 'radios',
      '#title' => t('5. Our unique selling proposition is our ability to adapt our products or services.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question6'] = array(
    '#type' => 'radios',
      '#title' => t('6. During sales, we engage in close dialogue with customers'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );
    
    $form['question7'] = array(
    '#type' => 'radios',
      '#title' => t('7. Our core competence is our shared architecture, which integrates the end-to-end offering.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question8'] = array(
    '#type' => 'radios',
      '#title' => t('8. Our success heavily relies on a network of contributing and complementing partners.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question9'] = array(
    '#type' => 'radios',
      '#title' => t('9. Our operations are geared towards flexibility, not scalability.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question10'] = array(
    '#type' => 'radios',
      '#title' => t('10. Our research and development is driven by specific requirements of single customers'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question11'] = array(
    '#type' => 'radios',
      '#title' => t('11. We get long-term revenue streams from our customers.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question12'] = array(
    '#type' => 'radios',
      '#title' => t('12. Our transaction costs are only covered over time.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question13'] = array(
    '#type' => 'radios',
      '#title' => t('13. Our prices are based on a mixed calculation that integrates all offering components.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question14'] = array(
    '#type' => 'radios',
      '#title' => t('14.  Our prices are driven by customers willingness to pay more than by our competitors pricing.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question15'] = array(
    '#type' => 'radios',
      '#title' => t('15. We have more variable costs than fixed costs.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question101'] = array(
    '#type' => 'radios',
      '#title' => t('1. Costs of transferring and sharing our products and services become exponentially cheaper via digitization.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question102'] = array(
    '#type' => 'radios',
      '#title' => t('2. New technological solutions enable the company to lock customer in more easily than before.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question103'] = array(
    '#type' => 'radios',
      '#title' => t('3. Customers are more willing to engage in long-term collaborations with the vendors.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question104'] = array(
    '#type' => 'radios',
      '#title' => t('4. There are new possibilities beyond the products to differentiate an offering in the market.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question105'] = array(
    '#type' => 'radios',
      '#title' => t('5. Technological progress provides deeper customer insights for better-customized offers.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question106'] = array(
    '#type' => 'radios',
      '#title' => t('6. Power shifts to customers because they actively discuss and comment on our offerings in online communities'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question107'] = array(
    '#type' => 'radios',
      '#title' => t('7. There are few technical opportunities to standardize our offerings.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question108'] = array(
    '#type' => 'radios',
      '#title' => t('8. There are opportunities to complement our products through value-adding services.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question109'] = array(
    '#type' => 'radios',
      '#title' => t('9. Customers are looking for enduring service contracts and relationships'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question110'] = array(
    '#type' => 'radios',
      '#title' => t('10. Customers ask for co-creation of the offering and on-site implementation of services.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question111'] = array(
    '#type' => 'radios',
      '#title' => t('11. Our customers’ main interest is to have a reliable output at a certain service level, not to own a product.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question112'] = array(
    '#type' => 'radios',
      '#title' => t('12.  In our market segment, scale effects are less relevant, because customers prefer tailored, total solutions.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question113'] = array(
    '#type' => 'radios',
      '#title' => t('13. As a vendor, we are becoming more dependent on our customers.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['question114'] = array(
    '#type' => 'radios',
      '#title' => t('14. The scalability of our services via reusable templates does not really work in our business segment.'),
      '#options' => array(
        t(''),
        t(''),
        t(''),
        t(''),
        t(''),
        ),
      '#required' => true,
    );

    $form['actions'] = array('#type' => 'actions');
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Save changes'),
      '#tableselect' => TRUE,
    );

    return $form;
  }

  /**
   * Валидация отправленых данных в форме.
   *
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  /**
   * Отправка формы.
   *
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $inc1 = 8;
    $cust1 = 7;
    $incfront = 0;
    $incback = 0;
    $incmonet = 0;
    $incdigit = 0;
    $incprob = 0;
    $custdigit = 0;
    $custprob = 0;
    $custfront = 0;
    $custback = 0;
    $custmonet = 0;
    $inc2 = 6;
    $cust2 = 8;
    $question1 = 0;
    $question2 = 0;
    $question3 = 0;
    $question4 = 0;
    $question5 = 0;
    $question6 = 0;
    $question7 = 0;
    $question8 = 0;
    $question9 = 0;
    $question10 = 0;
    $question11 = 0;
    $question12 = 0;
    $question13 = 0;
    $question14 = 0;
    $question15 = 0;
    $question101 = 0;
    $question102 = 0;
    $question103 = 0;
    $question104 = 0;
    $question105 = 0;
    $question106 = 0;
    $question107 = 0;
    $question108 = 0;
    $question109 = 0;
    $question110 = 0;
    $question111 = 0;
    $question112 = 0;
    $question113 = 0;
    $question114 = 0;


    switch($form_state->getValue('question1')) {
      case 0:
        $incfront =  $incfront + 1;
        $question1 = 1;
        break;
      case 1:
        $incfront =  $incfront + 2;
        $question1 = 2;
        break;
      case 2:
        $incfront =  $incfront + 3;
        $question1 = 3;
        break;
      case 3:
        $incfront =  $incfront + 4;
        $question1 = 4;
        break;
      case 4:
        $incfront =  $incfront + 5;
        $question1 = 5;
        break;   
    }

    switch($form_state->getValue('question2')) {
      case 0:
        $incfront =  $incfront + 1;
        $question2 = 1;
        break;
      case 1:
        $incfront =  $incfront + 2;
        $question2 = 2;
        break;
      case 2:
        $incfront =  $incfront + 3;
        $question2 = 3;
        break;
      case 3:
        $incfront =  $incfront + 4;
        $question2 = 4;
        break;
      case 4:
        $incfront =  $incfront + 5;
        $question2 = 5;
        break;    
    }

    switch($form_state->getValue('question3')) {
      case 0:
        $incfront =  $incfront + 1;
        $question3 = 1;
        break;
      case 1:
        $incfront =  $incfront + 2;
        $question3 = 2;
        break;
      case 2:
        $incfront =  $incfront + 3;
        $question3 = 3;
        break;
      case 3:
        $incfront =  $incfront + 4;
        $question3 = 4;
        break;
      case 4:
        $incfront =  $incfront + 5;
        $question3 = 5;
        break;    
    }

    switch($form_state->getValue('question4')) {
      case 0:
        $custfront =  $custfront + 1;
        $question4 = 1;
        break;
      case 1:
        $custfront =  $custfront + 2;
        $question4 = 2;
        break;
      case 2:
        $custfront =  $custfront + 3;
        $question4 = 3;
        break;
      case 3:
        $custfront =  $custfront + 4;
        $question4 = 4;
        break;
      case 4:
        $custfront =  $custfront + 5;
        $question4 = 5;
        break;   
    }

    switch($form_state->getValue('question5')) {
      case 0:
        $custfront =  $custfront + 1;
        $question5 = 1;
        break;
      case 1:
        $custfront =  $custfront + 2;
        $question5 = 2;
        break;
      case 2:
        $custfront =  $custfront + 3;
        $question5 = 3;
        break;
      case 3:
        $custfront =  $custfront + 4;
        $question5 = 4;
        break;
      case 4:
        $custfront =  $custfront + 5;
        $question5 = 5;
        break;   
    }

    switch($form_state->getValue('question6')) {
      case 0:
        $custfront =  $custfront + 1;
        $question6 = 1;
        break;
      case 1:
        $custfront =  $custfront + 2;
        $question6 = 2;
        break;
      case 2:
        $custfront =  $custfront + 3;
        $question6 = 3;
        break;
      case 3:
        $custfront =  $custfront + 4;
        $question6 = 4;
        break;
      case 4:
        $custfront =  $custfront + 5;
        $question6 = 5;
        break;   
    }

    switch($form_state->getValue('question7')) {
      case 0:
        $incback =  $incback + 1;
        $question7 = 1;
        break;
      case 1:
        $incback =  $incback + 2;
        $question7 = 2;
        break;
      case 2:
        $incback =  $incback + 3;
        $question7 = 3;
        break;
      case 3:
        $incback =  $incback + 4;
        $question7 = 4;
        break;
      case 4:
        $incback =  $incback + 5;
        $question7 = 5;
        break;    
    }

    switch($form_state->getValue('question8')) {
      case 0:
        $incback =  $incback + 1;
        $question8 = 1;
        break;
      case 1:
        $incback =  $incback + 2;
        $question8 = 2;
        break;
      case 2:
        $incback =  $incback + 3;
        $question8 = 3;
        break;
      case 3:
        $incback =  $incback + 4;
        $question8 = 4;
        break;
      case 4:
        $incback =  $incback + 5;
        $question8 = 5;
        break;    
    }

    switch($form_state->getValue('question9')) {
      case 0:
        $custback =  $custback + 1;
        $question9 = 1;
        break;
      case 1:
        $custback =  $custback + 2;
        $question9 = 2;
        break;
      case 2:
        $custback =  $custback + 3;
        $question9 = 3;
        break;
      case 3:
        $custback =  $custback + 4;
        $question9 = 4;
        break;
      case 4:
        $custback =  $custback + 5;
        $question9 = 5;
        break;    
    }

    switch($form_state->getValue('question10')) {
      case 0:
        $custback =  $custback + 1;
        $question10 = 1;
        break;
      case 1:
        $custback =  $custback + 2;
        $question10 = 2;
        break;
      case 2:
        $custback =  $custback + 3;
        $question10 = 3;
        break;
      case 3:
        $custback =  $custback + 4;
        $question10 = 4;
        break;
      case 4:
        $custback =  $custback + 5;
        $question10 = 5;
        break;    
    }

    switch($form_state->getValue('question11')) {
      case 0:
        $incmonet =  $incmonet + 1;
        $question11 = 1;
        break;
      case 1:
        $incmonet =  $incmonet + 2;
        $question11 = 2;
        break;
      case 2:
        $incmonet =  $incmonet + 3;
        $question11 = 3;
        break;
      case 3:
        $incmonet =  $incmonet + 4;
        $question11 = 4;
        break;
      case 4:
        $incmonet =  $incmonet + 5;
        $question11 = 5;
        break;    
    }

    switch($form_state->getValue('question12')) {
      case 0:
        $incmonet =  $incmonet + 1;
        $question12 = 1;
        break;
      case 1:
        $incmonet =  $incmonet + 2;
        $question12 = 2;
        break;
      case 2:
        $incmonet =  $incmonet + 3;
        $question12 = 3;
        break;
      case 3:
        $incmonet =  $incmonet + 4;
        $question12 = 4;
        break;
      case 4:
        $incmonet =  $incmonet + 5;
        $question12 = 5;
        break;    
    }

    switch($form_state->getValue('question13')) {
      case 0:
        $incmonet =  $incmonet + 1;
        $question13 = 1;
        break;
      case 1:
        $incmonet =  $incmonet + 2;
        $question13 = 2;
        break;
      case 2:
        $incmonet =  $incmonet + 3;
        $question13 = 3;
        break;
      case 3:
        $incmonet =  $incmonet + 4;
        $question13 = 4;
        break;
      case 4:
        $incmonet =  $incmonet + 5;
        $question13 = 5;
        break;    
    }

    switch($form_state->getValue('question14')) {
      case 0:
        $custmonet =  $custmonet + 1;
        $question14 = 1;
        break;
      case 1:
        $custmonet =  $custmonet + 2;
        $question14 = 2;
        break;
      case 2:
        $custmonet =  $custmonet + 3;
        $question14 = 3;
        break;
      case 3:
        $custmonet =  $custmonet + 4;
        $question14 = 4;
        break;
      case 4:
        $custmonet =  $custmonet + 5;
        $question14 = 5;
        break;    
    }

    switch($form_state->getValue('question15')) {
      case 0:
        $custmonet =  $custmonet + 1;
        $question15 = 1;
        break;
      case 1:
        $custmonet =  $custmonet + 2;
        $question15 = 2;
        break;
      case 2:
        $custmonet =  $custmonet + 3;
        $question15 = 3;
        break;
      case 3:
        $custmonet =  $custmonet + 4;
        $question15 = 4;
        break;
      case 4:
        $custmonet =  $custmonet + 5;
        $question15 = 5;
        break;    
    }

    switch($form_state->getValue('question101')) {
      case 0:
        $incdigit =  $incdigit + 1;
        $question101 = 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        $question101 = 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        $question101 = 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        $question101 = 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        $question101 = 5;
        break;    
    }

    switch($form_state->getValue('question102')) {
      case 0:
        $incdigit =  $incdigit + 1;
        $question102 = 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        $question102 = 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        $question102 = 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        $question102 = 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        $question102 = 5;
        break;    
    }

    switch($form_state->getValue('question103')) {
      case 0:
        $incdigit =  $incdigit + 1;
        $question103 = 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        $question103 = 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        $question103 = 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        $question103 = 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        $question103 = 5;
        break;    
    }

    switch($form_state->getValue('question104')) {
      case 0:
        $incdigit =  $incdigit + 1;
        $question104 = 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        $question104 = 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        $question104 = 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        $question104 = 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        $question104 = 5;
        break;    
    }

    switch($form_state->getValue('question105')) {
      case 0:
        $custdigit =  $custdigit + 1;
        $question105 = 1;
        break;
      case 1:
        $custdigit =  $custdigit + 2;
        $question105 = 2;
        break;
      case 2:
        $custdigit =  $custdigit + 3;
        $question105 = 3;
        break;
      case 3:
        $custdigit =  $custdigit + 4;
        $question105 = 4;
        break;
      case 4:
        $custdigit =  $custdigit + 5;
        $question105 = 5;
        break;    
    }

    switch($form_state->getValue('question106')) {
      case 0:
        $custdigit =  $custdigit + 1;
        $question106 = 1;
        break;
      case 1:
        $custdigit =  $custdigit + 2;
        $question106 = 2;
        break;
      case 2:
        $custdigit =  $custdigit + 3;
        $question106 = 3;
        break;
      case 3:
        $custdigit =  $custdigit + 4;
        $question106 = 4;
        break;
      case 4:
        $custdigit =  $custdigit + 5;
        $question106 = 5;
        break;    
    }

    switch($form_state->getValue('question107')) {
      case 0:
        $custdigit =  $custdigit + 1;
        $question107 = 1;
        break;
      case 1:
        $custdigit =  $custdigit + 2;
        $question107 = 2;
        break;
      case 2:
        $custdigit =  $custdigit + 3;
        $question107 = 3;
        break;
      case 3:
        $custdigit =  $custdigit + 4;
        $question107 = 4;
        break;
      case 4:
        $custdigit =  $custdigit + 5;
        $question107 = 5;
        break;    
    }

    switch($form_state->getValue('question108')) {
      case 0:
        $incprob =  $incprob + 1;
        $question108 = 1;
        break;
      case 1:
        $incprob =  $incprob + 2;
        $question108 = 2;
        break;
      case 2:
        $incprob =  $incprob + 3;
        $question108 = 3;
        break;
      case 3:
        $incprob =  $incprob + 4;
        $question108 = 4;
        break;
      case 4:
        $incprob =  $incprob + 5;
        $question108 = 5;
        break;    
    }

    switch($form_state->getValue('question109')) {
      case 0:
        $incprob =  $incprob + 1;
        $question109 = 1;
        break;
      case 1:
        $incprob =  $incprob + 2;
        $question109 = 2;
        break;
      case 2:
        $incprob =  $incprob + 3;
        $question109 = 3;
        break;
      case 3:
        $incprob =  $incprob + 4;
        $question109 = 4;
        break;
      case 4:
        $incprob =  $incprob + 5;
        $question109 = 5;
        break;    
    }

    switch($form_state->getValue('question110')) {
      case 0:
        $custprob =  $custprob + 1;
        $question110 = 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        $question110 = 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        $question110 = 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        $question110 = 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        $question110 = 5;
        break;    
    }

    switch($form_state->getValue('question111')) {
      case 0:
        $custprob =  $custprob + 1;
        $question111 = 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        $question111 = 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        $question111 = 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        $question111 = 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        $question111 = 5;
        break;    
    }

    switch($form_state->getValue('question112')) {
      case 0:
        $custprob =  $custprob + 1;
        $question112 = 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        $question112 = 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        $question112 = 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        $question112 = 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        $question112 = 5;
        break;    
    }

    switch($form_state->getValue('question113')) {
      case 0:
        $custprob =  $custprob + 1;
        $question113 = 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        $question113 = 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        $question113 = 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        $question113 = 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        $question113 = 5;
        break;    
    }

    switch($form_state->getValue('question114')) {
      case 0:
        $custprob =  $custprob + 1;
        $question114 = 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        $question114 = 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        $question114 = 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        $question114 = 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        $question114 = 5;
        break;    
    }


    $frontx = $custfront/$cust1;
    $fronty = $incfront/$inc1;

    $backx = $custback/$cust1;
    $backy = $incback/$inc1;

    $monetx = $custmonet/$cust1;
    $monety = $incmonet/$inc1;

    $targetx = ($custdigit + $custprob)/$cust2; 
    $targety = ($incdigit + $incprob)/$inc2;

    

    // kint($form_state->getValues());
    // kint($frontx);
    // kint($fronty);
    // kint($backx);
    // kint($backy);
    // kint($monetx);
    // kint($monety);
    // kint($targetx);
    // kint($targety);

    $form_state->setRedirect('kogan_book.resultpage', [
      'frontx' => $frontx,
      'fronty' => $fronty,
      'backx' => $backx,
      'backy' => $backy,
      'monetx' => $monetx,
      'monety' => $monety,
      'targetx' => $targetx,
      'targety' => $targety,
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
    ]);

  }

}
