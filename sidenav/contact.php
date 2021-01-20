<?php


/*$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}*/



/*$name = $_POST['fullname'];
$email = $_POST['e-mail'];
$message = $_POST['message'];


$email_message ="
Name: ".$name."
Email: ".$email."
Message: ".$message."
";

//$mail_To="someone@gmail.com";
$headers = "";
$headers .= "From: livetv@muscle-tube.com\n";
$headers .= "Reply-To: livetv@muscle-tube.com\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "X-Mailer: php";
//$mail_Subject = " Live TV key";
//$mail_Body = "<p>Muscle-tube</p>";
//mail($mail_To, $mail_Subject, $mail_Body,$headers);*/

//define variables
$name = $email = $message = $success ="";
$name_error = $email_error ="";

if($_SERVER["REQUEST_METHOD"] =="POST") {
	if(empty($_POST["fullname"])){
		$name_error = "please fill in your name";
	} else{
		$name = test_input($_POST["fullname"]);

		if(!preg_match("/^[a-zA-Z]*$/", $name)){
			$name_error ="only letters and white space allowed";
		}
	}

	if(empty($_POST["e-mail"])){
		$email_error = "please fill in your email";
	} else{
		$email = test_input($_POST["e-mail"]);
		//check if e-mail is well-formated

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_error ="invalid email formart";
		}
	}

	if (empty($_POST["message"])) {
		$message = "";
	}else{
		$message = test_input($_POST["message"]);
	}

	if($name_error =='' and $email_error ==''){
		$message_body = '';
		unset($_POST['submit']);
		foreach ($_POST as $key => $value) {
			$message_body .= "$key: $value\n";
		}

		$to = "josephkamanga2030@gmail.com";
		$subject= 'contact form';
		if (mail($to, $subject, $message)){
			$success ="message sent successfully, thankyou";
			$name = $email = $message = '';
		}
	}

}

 function test_input($data){
 	$data = trim($data);
 	$data = stripcslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }





/*if (mail("yourmail@host.com", "new mail", $email_message, $headers)){
	 
	 $success = "message sent successfully";
	 $name = $email = $message = '';
	}*/


?>