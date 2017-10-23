(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mybehavior = {
    attach: function (context, settings) {
      $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {

           if(index==1) {

            var hasError = false;
            var radios = document.getElementsByName("question1");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios.length) {
                if (radios[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question1--wrapper span').addClass('has-error');
              hasError = true;
              formValid =true
              return false;
            }

            else {
              $('#edit-question1--wrapper span').removeClass('has-error');
              hasError = false
            }
           
            var hasError = false;
            var radios = document.getElementsByName("question2");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios.length) {
                if (radios[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question2--wrapper span').addClass('has-error');
              hasError = true;
              formValid =true;
              return false;
            }

            else {
              hasError = false
              $('#edit-question2--wrapper span').removeClass('has-error');
            }
             
          

            var hasError = false;
            var hasError = false;
            var radios2 = document.getElementsByName("question3");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios2.length) {
                if (radios2[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question3--wrapper span').addClass('has-error');
              // $("#edit-question14-0").after('<br><div  class="alert alert-danger">Please enter your Last Name.</div>');
              hasError = true;
              formValid = true;
              return false;
            }

            else {
              $('#edit-question3--wrapper span').removeClass('has-error');
              hasError = false
            }
             
            var hasError = false;
            var radios11 = document.getElementsByName("question4");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios11.length) {
                if (radios11[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question4--wrapper span').addClass('has-error');
              hasError = false;
              return false;
            }

            else {
              hasError = false
              $('#edit-question4--wrapper span').removeClass('has-error');
            }

           

            var radios1 = document.getElementsByName("question5");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios1.length) {
                if (radios1[i].checked) formValid = true;
                i++;        
            }

              if (!formValid) {
              $('#edit-question5--wrapper span').addClass('has-error');
              hasError = true;
              formValid = true;
              return false;
            }

            else {
              hasError = false
              $('#edit-question5--wrapper span').removeClass('has-error');
            }

            var radios1 = document.getElementsByName("question6");
            var formValid = false;
            var i = 0;
            while (!formValid && i < radios1.length) {
                if (radios1[i].checked) formValid = true;
                i++;        
            }

              if (!formValid) {
              $('#edit-question6--wrapper span').addClass('has-error');
              hasError = true;
              formValid = true;
              return false;
            }

            else {
              hasError = false
              $('#edit-question6--wrapper span').removeClass('has-error');
            }



            return formValid;

          }




      
      if(index==2) {
        var hasError = false;            
        var radios = document.getElementsByName("question7");
        var formValid = false;
        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question7--wrapper span').addClass('has-error');
          hasError = true;
          formValid =true
          return false;
        }

        else {
          $('#edit-question7--wrapper span').removeClass('has-error');
          hasError = false
        }
       
        var hasError = false;
        var radios = document.getElementsByName("question8");
        var formValid = false;
        var i = 0;

        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question8--wrapper span').addClass('has-error');
          hasError = true;
          formValid =true;
          return false;
        }

        else {
          hasError = false
          $('#edit-question8--wrapper span').removeClass('has-error');
        }
         
      

        var hasError = false;
        var hasError = false;
        var radios2 = document.getElementsByName("question9");
        var formValid = false;
        var i = 0;

        while (!formValid && i < radios2.length) {
            if (radios2[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question9--wrapper span').addClass('has-error');
          // $("#edit-question14-0").after('<br><div  class="alert alert-danger">Please enter your Last Name.</div>');
          hasError = true;
          formValid = true;
          return false;
        }

        else {
          $('#edit-question9--wrapper span').removeClass('has-error');
          hasError = false
        }
         
        var hasError = false;
        var radios11 = document.getElementsByName("question10");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios11.length) {
            if (radios11[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question10--wrapper span').addClass('has-error');
          hasError = false;
          return false;
        }

        else {
          hasError = false
          $('#edit-question10--wrapper span').removeClass('has-error');
        }


        return formValid;

      }

      if(index==3) {
        var hasError = false;            
        var radios = document.getElementsByName("question11");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question11--wrapper span').addClass('has-error');
          hasError = true;
          formValid =true
          return false;
        }

        else {
          $('#edit-question11--wrapper span').removeClass('has-error');
          hasError = false
        }
       
        var hasError = false;
        var radios = document.getElementsByName("question12");
        var formValid = false;
        var i = 0;

        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question12--wrapper span').addClass('has-error');
          hasError = true;
          formValid =true;
          return false;
        }

        else {
          hasError = false
          $('#edit-question12--wrapper span').removeClass('has-error');
        }
         
      

        var hasError = false;
        var hasError = false;
        var radios2 = document.getElementsByName("question13");
        var formValid = false;
        var i = 0;

        while (!formValid && i < radios2.length) {
            if (radios2[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question13--wrapper span').addClass('has-error');
          // $("#edit-question14-0").after('<br><div  class="alert alert-danger">Please enter your Last Name.</div>');
          hasError = true;
          formValid = true;
          return false;
        }

        else {
          $('#edit-question13--wrapper span').removeClass('has-error');
          hasError = false
        }
         
        var hasError = false;
        var radios11 = document.getElementsByName("question14");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios11.length) {
            if (radios11[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question14--wrapper span').addClass('has-error');
          hasError = false;
          return false;
        }

        else {
          hasError = false
          $('#edit-question14--wrapper span').removeClass('has-error');
        }

       

        var radios1 = document.getElementsByName("question15");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios1.length) {
            if (radios1[i].checked) formValid = true;
            i++;        
        }

          if (!formValid) {
          $('#edit-question15--wrapper span').addClass('has-error');
          hasError = true;
          formValid = true;
          return false;
        }

        else {
          hasError = false
          $('#edit-question15--wrapper span').removeClass('has-error');
        }

        return formValid;

      }

      if(index==4) {
        var hasError = false;
        var radios = document.getElementsByName("question101");
        var formValid = false;
        var i = 0;
        
        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question101--wrapper span').addClass('has-error');
          hasError = true;
          formValid =true
          return false;
        }

        else {
          $('#edit-question101--wrapper span').removeClass('has-error');
          hasError = false
        }
       
        var hasError = false;
        var radios = document.getElementsByName("question102");
        var formValid = false;
        var i = 0;

        while (!formValid && i < radios.length) {
            if (radios[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question102--wrapper span').addClass('has-error');
          hasError = true;
          formValid =true;
          return false;
        }

        else {
          hasError = false
          $('#edit-question102--wrapper span').removeClass('has-error');
        }
         
      

        var hasError = false;
        var hasError = false;
        var radios2 = document.getElementsByName("question103");
        var formValid = false;
        var i = 0;

        while (!formValid && i < radios2.length) {
            if (radios2[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question103--wrapper span').addClass('has-error');
          // $("#edit-question14-0").after('<br><div  class="alert alert-danger">Please enter your Last Name.</div>');
          hasError = true;
          formValid = true;
          return false;
        }

        else {
          $('#edit-question103--wrapper span').removeClass('has-error');
          hasError = false
        }
         
        var hasError = false;
        var radios11 = document.getElementsByName("question104");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios11.length) {
            if (radios11[i].checked) formValid = true;
            i++;        
        }

        if (!formValid) {
          $('#edit-question104--wrapper span').addClass('has-error');
          hasError = false;
          return false;
        }

        else {
          hasError = false
          $('#edit-question104--wrapper span').removeClass('has-error');
        }

       

        var radios1 = document.getElementsByName("question105");
        var formValid = false;

        var i = 0;
        while (!formValid && i < radios1.length) {
            if (radios1[i].checked) formValid = true;
            i++;        
        }

          if (!formValid) {
          $('#edit-question105--wrapper span').addClass('has-error');
          hasError = true;
          formValid = true;
          return false;
        }

        else {
          hasError = false
          $('#edit-question105--wrapper span').removeClass('has-error');
        }

        var radios1 = document.getElementsByName("question106");
        var formValid = false;
        var i = 0;
        while (!formValid && i < radios1.length) {
            if (radios1[i].checked) formValid = true;
            i++;        
        }

          if (!formValid) {
          $('#edit-question106--wrapper span').addClass('has-error');
          hasError = true;
          formValid = true;
          return false;          
        }

        else {
          hasError = false
          $('#edit-question106--wrapper span').removeClass('has-error');
        }

        var radios1 = document.getElementsByName("question107");
        var formValid = false;
        var i = 0;
        while (!formValid && i < radios1.length) {
            if (radios1[i].checked) formValid = true;
            i++;        
        }

          if (!formValid) {
          $('#edit-question107--wrapper span').addClass('has-error');
          hasError = true;
          formValid = true;
          return false;
        }

        else {
          hasError = false
          $('#edit-question107--wrapper span').removeClass('has-error');
        }



        return formValid;

      }

      
 
    }, onTabShow: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $percent = ($current/$total) * 100;
      $('#rootwizard .progress-bar').css({width:$percent+'%'});
    }});
      });
          $('.footer-wizard #edit-submit').click(function(){
            var hasError = false;
            var radios = document.getElementsByName("question108");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios.length) {
                if (radios[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question108--wrapper span').addClass('has-error');
              hasError = true;
              formValid =true
              return false;
            }

            else {
              $('#edit-question108--wrapper span').removeClass('has-error');
              hasError = false
            }
           
            var hasError = false;
            var radios = document.getElementsByName("question109");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios.length) {
                if (radios[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question109--wrapper span').addClass('has-error');
              hasError = true;
              formValid =true;
              return false;
            }

            else {
              hasError = false
              $('#edit-question109--wrapper span').removeClass('has-error');
            }
             
          

            var hasError = false;
            var hasError = false;
            var radios2 = document.getElementsByName("question110");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios2.length) {
                if (radios2[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question110--wrapper span').addClass('has-error');
              // $("#edit-question14-0").after('<br><div  class="alert alert-danger">Please enter your Last Name.</div>');
              hasError = true;
              formValid = true;
              return false;
            }

            else {
              $('#edit-question110--wrapper span').removeClass('has-error');
              hasError = false
            }
             
            var hasError = false;
            var radios11 = document.getElementsByName("question111");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios11.length) {
                if (radios11[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question111--wrapper span').addClass('has-error');
              hasError = false;
              return false;
            }

            else {
              hasError = false
              $('#edit-question111--wrapper span').removeClass('has-error');
            }

           

            var radios1 = document.getElementsByName("question112");
            var formValid = false;
            var i = 0;
            
            while (!formValid && i < radios1.length) {
                if (radios1[i].checked) formValid = true;
                i++;        
            }

              if (!formValid) {
              $('#edit-question112--wrapper span').addClass('has-error');
              hasError = true;
              formValid = true;
              return false;
            }

            else {
              hasError = false
              $('#edit-question112--wrapper span').removeClass('has-error');
            }

            var radios1 = document.getElementsByName("question113");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios1.length) {
                if (radios1[i].checked) formValid = true;
                i++;        
            }

            if (!formValid) {
              $('#edit-question113--wrapper span').addClass('has-error');
              hasError = true;
              formValid = true;
              return false;
              
            }

            else {
              hasError = false
              $('#edit-question113--wrapper span').removeClass('has-error');
            }

            var radios1 = document.getElementsByName("question114");
            var formValid = false;
            var i = 0;

            while (!formValid && i < radios1.length) {
                if (radios1[i].checked) formValid = true;
                i++;        
            }

              if (!formValid) {
              $('#edit-question114--wrapper span').addClass('has-error');
              hasError = true;
              formValid = true;
              return false;
            }

            else {
              hasError = false
              $('#edit-question114--wrapper span').removeClass('has-error');
            }



            return formValid;

          });  

      
        $('.link-feedback').click(function() {
          $('.feedback').addClass('open');
          $('.again-button').addClass('open');
          $('.add-feedback').addClass('remove');
        });

        $('#feedback-form #edit-submit').click(function() {
          $('.info-submit-feedback').addClass('active');
          $('.feedback').addClass('remove');
          $('.again-button').removeClass('open');
          $('.again-button').addClass('sending');
        });


        // $('.js-form-item-question1-3 .iCheck-helper').click(function() {
        //   $('#edit-question1-text').toggleClass('qwasasas');
        // });
        //  $('#question-form .icheckbox_square input').click(function() {
        //   $('#question-form #edit-question1-text').addClass('helllo1');
        //  });
         
    
   

      // $("#block-about-2").addClass('container');
      // $("#block-examplesblock").addClass('container');
      // $("#contact-message-feedback-form").addClass('container');
      // $("#edit-pass-pass1").attr("placeholder", "please fill...");
      // $("#edit-pass-pass2").attr("placeholder", "please fill...");

      
      // $('#tab1 #back').click(function() {
      //   document.location.href = '/first-step';
      // });

      // $('#edit-question9-0').click(function(){
      //   $('#edit-question10--wrapper').addClass('active');
      // });
      //  $('#edit-question9-1').click(function(){
      //   $('#edit-question10--wrapper').removeClass('active');
      //   $('#edit-question10-0').removeClass('has-error');
      //   formValid = false;
      // });

      //  $('#edit-question12-0').click(function(){
      //   $('#edit-question13--wrapper').addClass('open');
      // });
      //  $('#edit-question12-1').click(function(){
      //   $('#edit-question13--wrapper').removeClass('open');
      //   $('#edit-question13-0').removeClass('has-error');
      //   formValid = false;
      // });

       $('#rootwizard > div.navbar > div > div > ul > li:nth-child(1) > a').click(function(){
        return false;
       });

       $('#rootwizard > div.navbar > div > div > ul > li:nth-child(2) > a').click(function(){
        return false;
       });

       $('#rootwizard > div.navbar > div > div > ul > li:nth-child(3) > a').click(function(){
        return false;
       });

       $('#rootwizard > div.navbar > div > div > ul > li:nth-child(4) > a').click(function(){
        return false;
       });

       $('#rootwizard > div.navbar > div > div > ul > li:nth-child(5) > a').click(function(){
        return false;
       });
      // $('#tab1')document.getElementById("#edit-submit").style.display = "none";
      
    // }
    //    $('.hero').click(function() {
    //     document.location.href = '/node';
    //   });

        // $('.hero').click(function() {
        // document.location.href = '/node';
        // });
      // return false;
      
    }
  };
})(jQuery, Drupal, drupalSettings);
 