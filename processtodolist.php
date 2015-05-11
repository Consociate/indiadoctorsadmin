<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/profilecontroller.php';
if(isset($_POST['action'])){
$tasklabel = $_POST['tasklabel'];
$userid = $_SESSION['uid'];
$fromdate = $_POST['fromdate'];
$tilldate = $_POST['tilldate'];
$fromtime = $_POST['fromtime'];
$tilltime = $_POST['tilltime'];
	if(addUserToDoList($userid, $fromdate, $tilldate, $fromtime, $tilltime, $tasklabel)){
		header('Location: todolist.php?eid=1');
	}else{
		header('Location: todolist.php?eid=2');
	}
}else if(isset($_GET['ac'])){
	$tid = $_GET['tid'];
	if(removeUserToDoList($_SESSION['uid'], $tid)){
		header('Location: todolist.php?eid=1');
	}else{
		header('Location: todolist.php?eid=2');
	}
}

?>