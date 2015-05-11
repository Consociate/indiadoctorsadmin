<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/masterdatacontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}

switch($action){
	case 1:
		$collegelabel = $_POST['postlabel'];
		if(addCollege($collegelabel)){
			header('Location: college.php?eid=1');
		}else{
			header('Location: college.php?eid=2');
		}
		break;
	case 2:
		//update speciality status
		$collegeid = $_GET['tid'];
		$status = $_GET['st'];
		if(updateCollegeStatus($collegeid, $status)){
			header('Location: college.php?eid=1');
		}else{
			header('Location: college.php?eid=2');
		}
		break;
	case 3:
		$collegeid = $_GET['tid'];
		header('Location: updatecollege.php?tid='.$collegeid);
		break;
	case 4:
		$collegeid = $_POST['sid'];
		$collegelabel = $_POST['postlabel'];
		if(updateCollegeLabel($collegeid, $collegelabel)){
			header('Location: college.php?eid=1');
		}else{
			header('Location: college.php?eid=2');
		}
		break;
}

?>