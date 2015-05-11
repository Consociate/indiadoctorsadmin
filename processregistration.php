<?php
include_once 'src/controllers/registrationcontroller.php';
include_once 'check-email.php';
include_once 'check-username.php';
	$username=$_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirm_password'];
	$name=$_POST['name'];
	$mci = $_POST['mci'];
	$accounttype = $_POST['at'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$newsletter = 1;
	$address = $_POST['address'];
	if(checkUniqueUsername($username)){
		header('Location: registerfinal.php?eid=2');
	}
	if(checkUniqueEmail($accounttype, $email)){
		header('Location: registerfinal.php?eid=2');
	}
	switch($accounttype){
		case USER_DOCTOR:
			if(registerDoctor($username, $password, $mci, $address, $email, $name, $mobileno, $gender, $newsletter, $accounttype)){
				//send email for confirmation
				//forward it to next page
                include_once 'send-mail.php';
				header('Location: registerfinal.php?eid=1&un='.$username.'&el='.$email);
			}else{
				header('Location: registerfinal.php?eid=2');
			}
			break;
		case USER_HR:
			if(registerHR($username, $password, $mci, $address, $email, $name, $mobileno, $gender, $newsletter, $accounttype)){
				//send email for confirmation
				//forward it to next page
                include_once 'send-mail.php';
				header('Location: registerfinal.php?eid=1&un='.$username.'&el='.$email);
			}else{
				header('Location: registerfinal.php?eid=2');
			}
			break;
		case USER_STUDENT:
			if(registerStudent($username, $password, $mci, $address, $email, $name, $mobileno, $gender, $newsletter, $accounttype)){
				//send email for confirmation
				//forward it to next page
                include_once 'send-mail.php';
				header('Location: registerfinal.php?eid=1&un='.$username.'&el='.$email);
			}else{
				header('Location: registerfinal.php?eid=2');
			}
			break;
	}
?>