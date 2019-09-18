<?php
//<!--Start session-->
    session_start();


//    <!--Define error messages-->
$missingUsername = '<p><strong>Please fill in a userame</strong></p>';
$invalidUsername = '<p><strong>Username must be at least 4 characters</strong></p>';
$missingEmail = '<p><strong>Please fill in your email address</strong></p>';
$invalidEmail = '<p><strong>Invalid email address! Please enter a valid email</strong></p>';
$missingPassword = '<p><strong>Please fill in your password</strong></p>';
$invalidPassword = '<p><strong>password must be at least 4 characters!</strong></p>';
$differentPassword = '<p><strong>Passwords don\'t match</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';

$errors = "";
$username = "";
$email = "";
$password = "";

$myFile = "db.json";
$arr_data = array(); // create empty array

//    <!--Get username, email, password, password2-->

//Get username
if(empty($_POST["username"])){
    $errors .= $missingUsername;
    
}else{
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
}

//Get email
if(empty($_POST["email"])){
    $errors .= $missingEmail;
}else{
    //filter the email
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    // Then check if its valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= $invalidEmail;
    }
}

//Get passwords
if(empty($_POST["password"])){
    $errors .= $missingPassword;
}elseif(!(strlen($_POST["password"])>= 4)
        )
    {
    //This means that the password must contain one capital letter and one number. it must also be longer than six digits
    
    $errors .= $invalidPassword;
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        //If the second password is missing
        
        if(empty($_POST["password2"])){
            $errors .= $missingPassword2;
        }else{
            $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
            //if the password is different from the confirmation add diff password massage
                if($password !== $password2){
                    $errors .= $differentPassword;
                }
        }
}
    // if username is less than 4 add error
    if(strlen($username) < 4){
        $errors .= $invalidUsername;
    }


//    <!--Store errors in the errors variable-->
//    <!--If there are any errors, diaplay all ther error messages-->


if($errors){
    $resultMessage = '' . $errors . '</div>';
    echo $resultMessage;
    exit;
    
}

//No errors
$password  = hash('sha256', $password);
//128 bits long -> 32 characters
// 256 bits -> 64 charactrs
//Get form data
		$formdata = array(
			'username' => $username,
			'password' => $password,
			'email' =>	$email
		);
		//Get data from existing json file
		$jsondata = file_get_contents($myFile);
		// converts json data into array
		$arr_data = json_decode($jsondata, true);

        //Check if user already exists
        foreach($arr_data["users"] as $item ){
            if($item["email"] === $email or $item["username"] === $username){
                echo"This user is already registered";
                exit;
            }
        }
        
		// Push user data to array
		array_push($arr_data['users'], $formdata);
		//Convert updated array to JSON
		$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
		//write json data into data.json file
		if (file_put_contents($myFile, $jsondata)) {
			echo "You have successfully signed up";
            
		}




    
            
?>