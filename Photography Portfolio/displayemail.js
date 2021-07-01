$(document).ready(function(){  
    $('#submit').click(function(){  
         var email = $('#email').val();  
         if(email == '')  
         {  
              $('#error_message').html("All Fields are required");  
         }  
         else  
         {  
              $('#error_message').html('');  
              $.ajax({  
                   url:"database.php",  
                   method:"POST",  
                   data:{email:email},  
                   success:function(data){  
                        $("form").trigger("reset");  
                        $('#success_message').fadeIn().html(data);  
                        setTimeout(function(){  
                             $('#success_message').fadeOut("Slow");  
                        }, 2000);  
                   }  
              });  
         }  
    });  
}); 