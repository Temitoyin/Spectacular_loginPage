$(document).ready(() => {
    var submit = $("#submit");
  
    submit.click(function (e) {
      e.preventDefault();
      var email = $("#loginEmail").val();
      var pass = $("#loginPassword").val();
  
      $.ajax({
        url: "http://localhost:3000/users",
        type: 'GET',
        error: function () {
          alert('error');
        },
        success: function (data) {
          console.log('done');
          data.map(user => {
            // console.log(user.username)
            if (user.email === email && user.password == pass) {
                alert('you have successfully login');
                window.location.href = "login.html";
            }else {
                var warn = $(".bg-warning");
                warn.append("Opps..! incorrect credentials, try again or signup");
                warn.remove();
            }
        });
       }
    });
    });
  });