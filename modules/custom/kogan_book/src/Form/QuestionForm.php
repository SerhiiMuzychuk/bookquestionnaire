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
      '#title' => t('10. Our research and development is "driven by specific requirements of single customers"'),
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

    switch($form_state->getValue('question1')) {
      case 0:
        $incfront =  $incfront + 1;
        break;
      case 1:
        $incfront =  $incfront + 2;
        break;
      case 2:
        $incfront =  $incfront + 3;
        break;
      case 3:
        $incfront =  $incfront + 4;
        break;
      case 4:
        $incfront =  $incfront + 5;
        break;   
    }

    switch($form_state->getValue('question2')) {
      case 0:
        $incfront =  $incfront + 1;
        break;
      case 1:
        $incfront =  $incfront + 2;
        break;
      case 2:
        $incfront =  $incfront + 3;
        break;
      case 3:
        $incfront =  $incfront + 4;
        break;
      case 4:
        $incfront =  $incfront + 5;
        break;    
    }

    switch($form_state->getValue('question3')) {
      case 0:
        $incfront =  $incfront + 1;
        break;
      case 1:
        $incfront =  $incfront + 2;
        break;
      case 2:
        $incfront =  $incfront + 3;
        break;
      case 3:
        $incfront =  $incfront + 4;
        break;
      case 4:
        $incfront =  $incfront + 5;
        break;    
    }

    switch($form_state->getValue('question4')) {
      case 0:
        $custfront =  $custfront + 1;
        break;
      case 1:
        $custfront =  $custfront + 2;
        break;
      case 2:
        $custfront =  $custfront + 3;
        break;
      case 3:
        $custfront =  $custfront + 4;
        break;
      case 4:
        $custfront =  $custfront + 5;
        break;   
    }

    switch($form_state->getValue('question5')) {
      case 0:
        $custfront =  $custfront + 1;
        break;
      case 1:
        $custfront =  $custfront + 2;
        break;
      case 2:
        $custfront =  $custfront + 3;
        break;
      case 3:
        $custfront =  $custfront + 4;
        break;
      case 4:
        $custfront =  $custfront + 5;
        break;   
    }

    switch($form_state->getValue('question6')) {
      case 0:
        $custfront =  $custfront + 1;
        break;
      case 1:
        $custfront =  $custfront + 2;
        break;
      case 2:
        $custfront =  $custfront + 3;
        break;
      case 3:
        $custfront =  $custfront + 4;
        break;
      case 4:
        $custfront =  $custfront + 5;
        break;   
    }

    switch($form_state->getValue('question7')) {
      case 0:
        $incback =  $incback + 1;
        break;
      case 1:
        $incback =  $incback + 2;
        break;
      case 2:
        $incback =  $incback + 3;
        break;
      case 3:
        $incback =  $incback + 4;
        break;
      case 4:
        $incback =  $incback + 5;
        break;    
    }

    switch($form_state->getValue('question8')) {
      case 0:
        $incback =  $incback + 1;
        break;
      case 1:
        $incback =  $incback + 2;
        break;
      case 2:
        $incback =  $incback + 3;
        break;
      case 3:
        $incback =  $incback + 4;
        break;
      case 4:
        $incback =  $incback + 5;
        break;    
    }

    switch($form_state->getValue('question9')) {
      case 0:
        $custback =  $custback + 1;
        break;
      case 1:
        $custback =  $custback + 2;
        break;
      case 2:
        $custback =  $custback + 3;
        break;
      case 3:
        $custback =  $custback + 4;
        break;
      case 4:
        $custback =  $custback + 5;
        break;    
    }

    switch($form_state->getValue('question10')) {
      case 0:
        $custback =  $custback + 1;
        break;
      case 1:
        $custback =  $custback + 2;
        break;
      case 2:
        $custback =  $custback + 3;
        break;
      case 3:
        $custback =  $custback + 4;
        break;
      case 4:
        $custback =  $custback + 5;
        break;    
    }

    switch($form_state->getValue('question11')) {
      case 0:
        $incmonet =  $incmonet + 1;
        break;
      case 1:
        $incmonet =  $incmonet + 2;
        break;
      case 2:
        $incmonet =  $incmonet + 3;
        break;
      case 3:
        $incmonet =  $incmonet + 4;
        break;
      case 4:
        $incmonet =  $incmonet + 5;
        break;    
    }

    switch($form_state->getValue('question12')) {
      case 0:
        $incmonet =  $incmonet + 1;
        break;
      case 1:
        $incmonet =  $incmonet + 2;
        break;
      case 2:
        $incmonet =  $incmonet + 3;
        break;
      case 3:
        $incmonet =  $incmonet + 4;
        break;
      case 4:
        $incmonet =  $incmonet + 5;
        break;    
    }

    switch($form_state->getValue('question13')) {
      case 0:
        $incmonet =  $incmonet + 1;
        break;
      case 1:
        $incmonet =  $incmonet + 2;
        break;
      case 2:
        $incmonet =  $incmonet + 3;
        break;
      case 3:
        $incmonet =  $incmonet + 4;
        break;
      case 4:
        $incmonet =  $incmonet + 5;
        break;    
    }

    switch($form_state->getValue('question14')) {
      case 0:
        $custmonet =  $custmonet + 1;
        break;
      case 1:
        $custmonet =  $custmonet + 2;
        break;
      case 2:
        $custmonet =  $custmonet + 3;
        break;
      case 3:
        $custmonet =  $custmonet + 4;
        break;
      case 4:
        $custmonet =  $custmonet + 5;
        break;    
    }

    switch($form_state->getValue('question15')) {
      case 0:
        $custmonet =  $custmonet + 1;
        break;
      case 1:
        $custmonet =  $custmonet + 2;
        break;
      case 2:
        $custmonet =  $custmonet + 3;
        break;
      case 3:
        $custmonet =  $custmonet + 4;
        break;
      case 4:
        $custmonet =  $custmonet + 5;
        break;    
    }

    switch($form_state->getValue('question101')) {
      case 0:
        $incdigit =  $incdigit + 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        break;    
    }

    switch($form_state->getValue('question102')) {
      case 0:
        $incdigit =  $incdigit + 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        break;    
    }

    switch($form_state->getValue('question103')) {
      case 0:
        $incdigit =  $incdigit + 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        break;    
    }

    switch($form_state->getValue('question104')) {
      case 0:
        $incdigit =  $incdigit + 1;
        break;
      case 1:
        $incdigit =  $incdigit + 2;
        break;
      case 2:
        $incdigit =  $incdigit + 3;
        break;
      case 3:
        $incdigit =  $incdigit + 4;
        break;
      case 4:
        $incdigit =  $incdigit + 5;
        break;    
    }

    switch($form_state->getValue('question105')) {
      case 0:
        $custdigit =  $custdigit + 1;
        break;
      case 1:
        $custdigit =  $custdigit + 2;
        break;
      case 2:
        $custdigit =  $custdigit + 3;
        break;
      case 3:
        $custdigit =  $custdigit + 4;
        break;
      case 4:
        $custdigit =  $custdigit + 5;
        break;    
    }

    switch($form_state->getValue('question106')) {
      case 0:
        $custdigit =  $custdigit + 1;
        break;
      case 1:
        $custdigit =  $custdigit + 2;
        break;
      case 2:
        $custdigit =  $custdigit + 3;
        break;
      case 3:
        $custdigit =  $custdigit + 4;
        break;
      case 4:
        $custdigit =  $custdigit + 5;
        break;    
    }

    switch($form_state->getValue('question107')) {
      case 0:
        $custdigit =  $custdigit + 1;
        break;
      case 1:
        $custdigit =  $custdigit + 2;
        break;
      case 2:
        $custdigit =  $custdigit + 3;
        break;
      case 3:
        $custdigit =  $custdigit + 4;
        break;
      case 4:
        $custdigit =  $custdigit + 5;
        break;    
    }

    switch($form_state->getValue('question108')) {
      case 0:
        $incprob =  $incprob + 1;
        break;
      case 1:
        $incprob =  $incprob + 2;
        break;
      case 2:
        $incprob =  $incprob + 3;
        break;
      case 3:
        $incprob =  $incprob + 4;
        break;
      case 4:
        $incprob =  $incprob + 5;
        break;    
    }

    switch($form_state->getValue('question109')) {
      case 0:
        $incprob =  $incprob + 1;
        break;
      case 1:
        $incprob =  $incprob + 2;
        break;
      case 2:
        $incprob =  $incprob + 3;
        break;
      case 3:
        $incprob =  $incprob + 4;
        break;
      case 4:
        $incprob =  $incprob + 5;
        break;    
    }

    switch($form_state->getValue('question110')) {
      case 0:
        $custprob =  $custprob + 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        break;    
    }

    switch($form_state->getValue('question111')) {
      case 0:
        $custprob =  $custprob + 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        break;    
    }

    switch($form_state->getValue('question112')) {
      case 0:
        $custprob =  $custprob + 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        break;    
    }

    switch($form_state->getValue('question113')) {
      case 0:
        $custprob =  $custprob + 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
        break;    
    }

    switch($form_state->getValue('question114')) {
      case 0:
        $custprob =  $custprob + 1;
        break;
      case 1:
        $custprob =  $custprob + 2;
        break;
      case 2:
        $custprob =  $custprob + 3;
        break;
      case 3:
        $custprob =  $custprob + 4;
        break;
      case 4:
        $custprob =  $custprob + 5;
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

    kint($form_state->getValues());
    kint($frontx);
    kint($fronty);
    kint($backx);
    kint($backy);
    kint($monetx);
    kint($monety);
    kint($targetx);
    kint($targety);

    $form_state->setRedirect('kogan_book.resultpage', [
      'frontx' => $frontx,
      'fronty' => $fronty,
      'backx' => $backx,
      'backy' => $backy,
      'monetx' => $monetx,
      'monety' => $monety,
      'targetx' => $targetx,
      'targety' => $targety,
    ]);

  }

}
