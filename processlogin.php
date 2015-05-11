<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	include_once 'src/controllers/logincontroller.php';
	$userdata = loginUser($username, $password);
	if(count($userdata)){
		$user = $userdata[0];
		include_once 'src/globalvars.php';
		session_start();
		$_SESSION['at'] = $user->getAccounttype();
		$_SESSION['uid'] = $user->getUserid();
		$_SESSION['un'] = $user->getUsername();
		header('Location: dashboard.php');
	}else{
		header('Location: index.php?er=1');
	}
?>