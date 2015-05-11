<?php
session_start();
require_once 'src/globalvars.php'; 
	if(!isset($_SESSION['uid'])){
    	header('Location: index.php');
	}
?>
