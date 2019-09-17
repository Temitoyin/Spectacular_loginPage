// sendind data to the database
    //posting to backend
    $(document).ready(function(){
        var $name = $("#name");
        var $email = $("#email");
        var $password = $("#password");
        var $confirmPassword = $("#confirmPassword");
        
      $('.add').on('click', function(e){
        e.preventDefault();
            $.ajax({
          type: 'POST',
          url: 'http://localhost:3000/users/',
          data: requests = {
            "name": $name.val(),
            "email": $email.val(),
            "password": $password.val(),
            "confirmPassword": $confirmPassword.val(),
        },
          success: function(){
            alert( name + ' form has been submitted');
            window.location.href = "login.html";
          },
          error: function () {
            alert('error');
        }
        });
      });
    });
