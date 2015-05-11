<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/masterdatacontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}

switch($action){
	case 1:
		$specialitylabel = $_POST['postlabel'];
		if(addSpeciality($specialitylabel)){
			header('Location: speciality.php?eid=1');
		}else{
			header('Location: speciality.php?eid=2');
		}
		break;
	case 2:
		//update speciality status
		$specialityid = $_GET['tid'];
		$status = $_GET['st'];
		if(updateSpecialityStatus($specialityid, $status)){
			header('Location: speciality.php?eid=1');
		}else{
			header('Location: speciality.php?eid=2');
		}
		break;
	case 3:
		$specialityid = $_GET['tid'];
		header('Location: updatespeciality.php?tid='.$specialityid);
		break;
	case 4:
		$specialityid = $_POST['sid'];
		$specialitylabel = $_POST['postlabel'];
		if(updateSpecialityLabel($specialityid, $specialitylabel)){
			header('Location: speciality.php?eid=1');
		}else{
			header('Location: speciality.php?eid=2');
		}
		break;
}

?>