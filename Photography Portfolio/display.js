
            $(document).ready(function(){  
                $('#submit').click(function(){  
                     var name = $('#name').val();  
                     var email= $('#email').val();
                     var subject= $('#subject').val();
                     var message = $('#message').val();  
                     if(name == '' || email == '' || subject == '' || message == '')  
                     {  
                           $('#error_message').html("All Fields are required"); 
                     }  
                     else  
                     {  
                          $('#error_message').html('');  
                          $.ajax({  
                               url:"contact.php",  
                               method:"POST",  
                               data:{name:name, email:email, subject:subject, message:message},  
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