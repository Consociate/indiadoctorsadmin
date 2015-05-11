<?php 
	session_start();
	require_once 'src/globalvars.php';
	if(isset($_SESSION['un'])){
		$_SESSION = array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-3600);
		}
		session_destroy();
	}
	//$homeUrl = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php';
    header('Location: index.php');
?>
