$(document).ready(function() 
{

  // handle form submission
  $("#registerform").submit(function(event) {
    event.preventDefault(); // prevent default form submission

    // get form data
    var formData = {
      username: $('#username').val(),
      email: $('#email').val(),
      password: $('#password').val(),
      password_1: $('#password_1').val()
    };

    // send form data to server
    $.post('./php/register.php',formData).done(function(){
      window.location.href = 'profile.html';
    })
    });
    
});