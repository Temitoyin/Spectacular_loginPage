// sendind data to the database
    //posting to backend
    $(document).ready(function(){
        var $firstName = $("#firstName");
        var $lastName = $("#lastName");
        var $email = $("#staticEmail");
        var $userName = $("#userName");
        var $password = $("#inputPassword");
        
      $('.add').on('click', function(e){
        e.preventDefault();
            $.ajax({
          type: 'POST',
          url: 'http://localhost:3000/users/',
          data: requests = {
            "firstName": $firstName.val(),
            "lastName": $lastName.val(),
            "email": $email.val(),
            "userName": $userName.val(),
            "password": $password.val(),
        },
          success: function(){
            alert( firstName + ' form has been submitted');
            window.location.href = "login.html";
          },
          error: function () {
            alert('error');
        }
        });
      });
    });





