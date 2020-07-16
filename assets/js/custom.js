$(document).ready(function() { 
  
      $('#myTable').DataTable();
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      }); 
      $('#backLogin').click(function(){
        window.location = 'login.php';
      });
      
      // ######### Registration validation

      $('#registrationForm').validate({  
        rules: {
            emailId: {
                required: true,
                email: true
            },
            name: {
                required: true 
            },
            admission_no: {
                required: true 
            }, 
            phone_no: {
                required: true 
            },
            user_password: {
                required: true, 
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo : "#user_password" 
            },
        },
        messages:{
            emailId:{
              email:'Please enter valid  email Id',
              required: 'Please enter email ID' 
            },
            name: {
              required: "Please enter Name"
            },
            admission_no: {
              required: "Please enter Admission No"
            } ,
            phone_no: {
              required: "Please enter Phone No"
            } ,
            user_password: {
              required: "Please enter Password",
              minlength: "Minimum lenght must be greater than 5"
            },
            confirm_password:{
              required: "Please enter Confirm Password", 
              equalTo: "Please enter same password"
            }    
          },
          submitHandler: function(form) {
            $('#registrationForm').submit();
          }  
    
      });
      /// END ######

      // ######### Registration validation

           $('#loginForm').validate({  
            rules: {
                emailId: {
                    required: true,
                    email: true
                },
                password: {
                    required: true 
                } 
            },
            messages:{
                emailId:{
                  email:'Please enter valid  email Id',
                  required: 'Please enter email ID' 
                },
                password: {
                  required: "Please enter Password"
                },   
              },
              submitHandler: function(form) {
                $('#loginForm').submit();
              }  
        
          });
          /// END ######


    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }