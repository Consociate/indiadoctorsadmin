<?php
include_once 'src/controllers/logincontroller.php';
$username = $_POST['username'];
$data = validateUserForPasswordGeneration($username);
if(count($data)){
	include_once 'send-forgot-mail.php';
	header('Location: forgotfinal.php?eid=1');
}else{
	header('Location: forgotfinal.php?eid=2');
}
?>