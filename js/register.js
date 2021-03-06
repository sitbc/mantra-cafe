 $(document).ready(function(){
        $('#send_message').click(function(e){
            
            //Stop form submission & check the validation
            e.preventDefault();
            
            // Variable declaration
            var error = false;
            var name = $('#name').val();
            var address = $('#address').val();
            var phone = $('#phone').val();
            var email = $('#emailaddress').val();
			var date = $('#date').val();
            var check = document.getElementById('check');
			
            
         	// Form field validation
            if(name.length == 0){
                var error = true;
                $('#name_error').fadeIn(500);
            }else{
                $('#name_error').fadeOut(500);
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(500);
            }else{
                $('#email_error').fadeOut(500);
            }
			if(phone.length == 0 ){
                var error = true;
                $('#phone_error').fadeIn(500);
            }else{
                $('#phone_error').fadeOut(500);
            }
			if(address.length == 0 ){
                var error = true;
                $('#address_error').fadeIn(500);
            }else{
                $('#address_error').fadeOut(500);
            }
            if(date == "Dátum" ){
                var error = true;
                $('#date_error').fadeIn(500);
            }else{
                $('#date_error').fadeOut(500);
            }
            if(!check.checked){
                var error = true;
                $('#check_error').fadeIn(500);
            }else{
                $('#check_error').fadeOut(500);
            }
            /* if(subject.length == 0){
                var error = true;
                $('#subject_error').fadeIn(500);
            }else{
                $('#subject_error').fadeOut(500);
            } */
            
            
            // If there is no validation error, next to process the mail function
            if(error == false){
               // Disable submit button just after the form processed 1st time successfully.
                //$('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
                
				/* Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php*/
                $.post("/wp-content/themes/Mantra/js/register.php", $("#register_form").serialize(),function(result){
                    //Check the result set from email.php file.
                    if(result == 'sent'){
                        //If the email is sent successfully, remove the submit button
                        //$('#submit').remove();
                        //Display the success message
                        $('#reg_success').fadeIn(500);
                    }else{
                        //Display the error message
                        $('#reg_fail').fadeIn(500);
                        // Enable the submit button again
                        //$('#send_message').removeAttr('disabled').attr('value', 'Send The Message');
                    }
                });
            }
        });    
    });