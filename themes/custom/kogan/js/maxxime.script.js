! function($) {
  $(document).ready(function() {
    // $("edit-mail").click(function(){
    //     alert("The paragraph is now hidden");
    //   });
    $("#edit-submit").click(function() {
      if ($('#edit-field-loan-term').val() == '_none') {
      $('#edit-field-loan-term option:lt(2)').remove();
      $('#edit-field-loan-term').after('<div class="help-block with-errors">');
      
    }
    return false;
//     $('#edit-field-loan-term').on('change', function(event) {
//     event.preventDefault();
//     $(this).find("option[value=_none]").remove();
});


// });
      //-- Search icon
       // $("#edit-mail").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');


     /*REview this field*/   $("#edit-field-title").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-first-name-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-middle-name-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-surname-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-date-of-birth-0-value-month").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-home-phone-0-value").attr({required:"", 'data-error': "Please, fill this field with telephone number", type:"text", pattern:"[0-9 -()+]+$"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-mobile-phone-0-value").attr({required:"", 'data-error': "Please, fill this field with telephone number", type:"text", pattern:"[0-9 -()+]+$"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-work-phone-0-value").attr({required:"", 'data-error': "Please, fill this field with telephone number", type:"text", pattern:"[0-9 -()+]+$"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-fax-0-value").attr({required:"", 'data-error': "Please, fill this field with telephone number", type:"text", pattern:"[0-9 -()+]+$"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');

        $("#edit-field-drivers-license-number-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-drivers-license-exp-date-0-value-date").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-residential-address-0-address-address-line1").attr({required:"", 'data-error': "Please, fill the date of license"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-residential-address-0-address-locality").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-residential-address-0-address-administrative-area").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-residential-address-0-address-postal-code").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-postal-address-0-address-address-line1").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-postal-address-0-address-locality").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-postal-address-0-address-administrative-area").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-postal-address-0-address-postal-code").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
     /*REview this field*/   $("#edit-field-referee-title").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-referee-surname-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-referee-phone-number-0-value").attr({required:"", 'data-error':"Please, fill this field with telephone number", type:"number"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-referee-address-0-address-country-code--2").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');

        $("#edit-field-referee-address-0-address-address-line1").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-referee-address-0-address-administrative-area").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-referee-address-0-address-postal-code").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-car-make-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-car-model-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-car-purchase-price-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-car-deposit-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-car-odometer-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-car-colour-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-car-rego-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-occupation-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-current-employer-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-job-title-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-contact-name-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-contact-number-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employment-years-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employment-months-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employers-address-0-address-country-code--2").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employers-address-0-address-address-line1").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employers-address-0-address-locality").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employers-address-0-address-administrative-area").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-employers-address-0-address-postal-code").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-number-of-dependents-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-how-many-cars-do-you-own-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-residential-years-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-residential-month-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-your-monthly-net-income-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-spouses-monthly-net-income-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-family-allowance-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-other-income-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-total-monthly-income-nett-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format", readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-mortgage-rent-board-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-food-beverage-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-communication-mobile-inter-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-gas-electricity-water-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-recreation-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-transport-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-medical-health-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-insurance-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-total-monthly-expenses-0-value").attr({required:"", 'data-error': "Please, fill this field in numerical format", readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-other-loans-car-loans-pers-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-credit-card-repayments-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-other-liability-repayments-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-proposed-instalment-for-th-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-total-monthly-commitments-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null, read", readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-bank-balance-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-home-value-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-other-property-value-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-value-of-cars-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-home-contents-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-other-investments-etc-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-total-assets-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null", readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-mortgage-on-home-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-other-mortgages-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-personal-loans-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-personal-loan-providers-0-value").attr({required:"", 'data-error': "Please, fill this field, set none if none"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-credit-cards-limit-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-credit-card-providers-0-value").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-liabilities-other-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-total-liabilities-0-value").attr({required:"", 'data-error': "Please, fill this field, set 0 if null", readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-final-total-monthly-income-0-value").attr({readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-final-monthly-expenses-0-value").attr({readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-surplus-deficit-0-value").attr({readonly:""}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        

        $("#edit-field-payslips-0-upload").attr({required:"", 'data-error': "Please, upload file"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-field-tax-returns-0-upload").attr({required:"", 'data-error': "Please, upload file"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-mail").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-pass-pass1").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("#edit-pass-pass2").attr({required:"", 'data-match-error': "Passwords doesn't match", 'data-match': "#edit-pass-pass1"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        
        $("#edit-field-loan-term").attr({required:"", 'data-error': "Please, fill this field"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');
        $("label[for='edit-terms-conditions-terms']").attr({required:"", 'data-error': "Please, check Terms and Conditions"}).addClass('custom');
        $("#edit-terms-conditions-terms").attr({required:"", 'data-error': "Please, check Terms and Conditions"}).addClass('custom');
        $('.custom').wrapAll('<div class="custom-new">');
        $('.custom-new').attr({required:"", 'data-error': "Please, upload file"}).wrap('<div class="form-group">').after('<div class="help-block with-errors">');


        // $("a[href='/admin/help']").addClass("use-ajax").attr({"data-dialog-type":"modal"});

      $( "#node-submission-form" ).attr({'data-toggle':"validator", role:"form"}).validator();
      $( "#user-register-form" ).attr({'data-toggle':"validator", role:"form"}).validator();

        $("input").keyup(function(){
          var living1 = parseInt($('#edit-field-your-monthly-net-income-0-value').val());
          var living2 = parseInt($('#edit-field-spouses-monthly-net-income-0-value').val());
          var living3 = parseInt($('#edit-field-family-allowance-0-value').val());
          var living4 = parseInt($('#edit-field-other-income-0-value').val());
          var total1 = parseInt($("#edit-field-total-monthly-income-nett-0-value").val());
          total1 = living1+living2+living3+living4;
          $("#edit-field-total-monthly-income-nett-0-value").val(total1);
          $("#edit-field-final-total-monthly-income-0-value").val(total1);

          var expenses1 = parseInt($('#edit-field-mortgage-rent-board-0-value').val());
          var expenses2 = parseInt($('#edit-field-food-beverage-0-value').val());
          var expenses3 = parseInt($('#edit-field-communication-mobile-inter-0-value').val());
          var expenses4 = parseInt($('#edit-field-gas-electricity-water-0-value').val());
          var expenses5 = parseInt($('#edit-field-recreation-0-value').val());
          var expenses6 = parseInt($('#edit-field-transport-0-value').val());
          var expenses7 = parseInt($('#edit-field-medical-health-0-value').val());
          var expenses8 = parseInt($('#edit-field-insurance-0-value').val());
          var total2 = parseInt($('#edit-field-total-monthly-expenses-0-value').val());
          total2 = expenses1+expenses2+expenses3+expenses4+expenses5+expenses6+expenses7+expenses8;
          $("#edit-field-total-monthly-expenses-0-value").val(total2);
          $("#edit-field-final-monthly-expenses-0-value").val(total2);

          var commitments1 = parseInt($('#edit-field-other-loans-car-loans-pers-0-value').val());
          var commitments2 = parseInt($('#edit-field-credit-card-repayments-0-value').val());
          var commitments3 = parseInt($('#edit-field-other-liability-repayments-0-value').val());
          var commitments4 = parseInt($('#edit-field-proposed-instalment-for-th-0-value').val());
          var total3 = parseInt($("#edit-field-total-monthly-commitments-0-value").val());
          total3 = commitments1+commitments2+commitments3+commitments4;
          $("#edit-field-total-monthly-commitments-0-value").val(total3);

          var assets1 = parseInt($('#edit-field-bank-balance-0-value').val());
          var assets2 = parseInt($('#edit-field-home-value-0-value').val());
          var assets3 = parseInt($('#edit-field-other-property-value-0-value').val());
          var assets4 = parseInt($('#edit-field-value-of-cars-0-value').val());
          var assets5 = parseInt($('#edit-field-home-contents-0-value').val());
          var assets6 = parseInt($('#edit-field-other-investments-etc-0-value').val());
          var total4 = parseInt($('#edit-field-total-assets-0-value').val());
          total4 = assets1+assets2+assets3+assets4+assets5+assets6;
          $("#edit-field-total-assets-0-value").val(total4);

          var liabilities1 = parseInt($('#edit-field-mortgage-on-home-0-value').val());
          var liabilities2 = parseInt($('#edit-field-other-mortgages-0-value').val());
          var liabilities3 = parseInt($('#edit-field-personal-loans-0-value').val());
          var liabilities4 = parseInt($('#edit-field-credit-cards-limit-0-value').val());
          var liabilities5 = parseInt($('#edit-field-liabilities-other-0-value').val());
          var total5 = parseInt($('#edit-field-total-liabilities-0-value').val());
          total5 = liabilities1+liabilities2+liabilities3+liabilities4+liabilities5;
          $("#edit-field-total-liabilities-0-value").val(total5);

          var total6 = parseInt($('#edit-field-surplus-deficit-0-value').val());
          total6 = total1-total2;
          $("#edit-field-surplus-deficit-0-value").val(total6);
        


});
  });
}(jQuery);