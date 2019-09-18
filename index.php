<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>Form</title>
</head>
<body>
 <nav>
    <div class="logo">
          <span><img src="images/Frame.svg" alt="logo" height="100" width="100"></span>
    </div>
    
    <ul class="menu">
        <li>home</li>
        <li>interiors</li>
        <li>about</li>
        <li>blog</li>
        <button class="headbtn">sign in</button>
    </ul>
 </nav>
  <main>
      <div id="messagebox" class="messagebox">
      <button class="ok">Ok</button>
      </div>
      <div class="container">
  
          <div class="form-container">
            <form class="form-signin" id="loginform" method="post">
              <h3>Welcome back,</h3>
              <div class="line"></div>
                  <span id="loginmessage"></span>
         
              <input type="email" placeholder="Enter email or username" class="username"  name="loginemail">
              <input type="password" placeholder="Enter password" class="password" name="loginpassword">
              <button type="submit" name="submit">Sign in</button>
              
              <div class="flex">
                  <div class="left"></div>
                  <span class="Text">Or</span>
                  <div class="right"></div>
              </div>
              
              
              <div class="icons">
                  <div><i class="fab fa-facebook-f"></i></div>
                  <div><i class="fab fa-google"></i></div>
                  <div><i class="fab fa-twitter"></i></div>
              </div>
            </form>
            
            <form class="form-signout" id="signupform" method="post">
              <h3>Time to feel like home,</h3>
              <div class="line"></div>
              <p>Sign up today earn rewards and special member promotion</p>
                <span id="signupmessage"></span>
             <input type="text" placeholder="Enter username" class="name" id="name" name="username">
              <input type="email" placeholder="Enter Email" class="email" id="email" name="email">
              <input type="password" placeholder="Enter Password" class="newpassword" id="password" name="password"> 
              <input type="password" placeholder="Confirm Password" class="comfirm-pass" id="confirmPassword" name="password2">
              <button class="add" type="submit" name="signup">Sign up</button>
            </form>
        </div>
      
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-sign-in">
              <h4>One of us?</h4>
              <div class="line2"></div>
              <p>If you already have an account just sign in, we've missed you!</p>
              <button class="sign-in shadow">sign in</button>
            </div>
      
            <div class="overlay-sign-up">
              <h4>New here?</h4>
              <div class="line2"></div>
              <p>Sign up and discover a great amount of new opportunities</p>
              <button class="sign-up shadow">sign up</button>
            </div>
          </div>
        </div>
        </div>
  </main>


   <script src="jquery-3.3.1.js"></script>
  <script src="./app.js"></script>
</body>
</html>
