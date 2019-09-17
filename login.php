<?php

//Start session
session_start();

//    Define error messages
$missingEmail = '<p><strong>Please enter your email</strong></p>';
$missingPassword = '<p><strong>Please enter your password</strong></p>';
$errors = "";

//    Get email and password
if(empty($_POST["loginemail"])){
    $errors .= $missingEmail;
}else{
    //filter the email
    $email = filter_var($_POST["loginemail"], FILTER_SANITIZE_EMAIL);
  
}

if(empty($_POST["loginpassword"])){
    $errors .= $missingPassword;
}else{
    //filter the email
    $password = filter_var($_POST["loginpassword"], FILTER_SANITIZE_STRING);
  
}


//    If there are any errors
if($errors){
    //        Print error message
    $resultMessage = '' . $errors . '';
    echo $resultMessage;
    exit;
}else
    
    
    //    else: No errors
//        Prepare variables for the query
    $password = hash('sha256', $password);
    
//        Run query: Check combination of email & password exists
  
//        If email & password don't match print error
   
        
        
        
                       

        
//                
        
        
    


//            else

//                Store them in a cookie


    
    



?>