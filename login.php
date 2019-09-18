<?php

//Start session
session_start();

//    Define error messages
$missingEmail = '<span>Please enter your email</span><br/>';
$missingPassword = '<span>Please enter your password</span><br/>';
$errors = "";
$myFile ="db.json";
$email = "";
$password ="";
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
    
    
//        hash code the password
    $password = hash('sha256', $password);
    
//         Check combination of email & password exists
    
		//Get data from existing json file
		$jsondata = file_get_contents($myFile);
		// converts json data into array
		$arr_data = json_decode($jsondata, true);
        $db = $arr_data["users"];

        if(!userIsPresent($arr_data, $email)){
            echo "<span>The email is not registered<br/> please click signup to register<span>";
            exit;
        }

        //Check if combination of email and password is correct
        foreach($arr_data["users"] as $item ){
            if($item["email"] === $email and $item["password"] === $password){
                echo"<span>success... welcome ".$item["username"] ."</span>";
                exit;
            }
        }

        echo "<span>Wrong password... try again</span>";
        

        //Function to check if username is present in the database
        function userIsPresent($db, $email){    //loop through data in the json file for users details
                    foreach($db["users"] as $result){
                        $registered = false;
            if($result["email"] === $email){
                $registered = true;
                break;
            }
          
        }
              return $registered;
        }
  
//        If email & password don't match print error
   
        
        
        
                       

        
//                
        
        
    


//            else

//                Store them in a cookie


    
    



?>