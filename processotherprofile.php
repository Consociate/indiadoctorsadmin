<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/profilecontroller.php';
include_once 'src/globalvars.php';
$action = $_POST['action'];
switch($action){
	case 4:
		//change password
		
		if(strlen($_POST['newpassword'])<=6){
			header('Location: changepassword.php?eid=2');
		}else{
			if(changePassword($_POST['oldpassword'], $_POST['newpassword'], $_SESSION['uid'])){
				header('Location: changepassword.php?eid=1');
			}else{
				header('Location: changepassword.php?eid=2');
			}
		}
		
		break;
}
switch($_SESSION['at']){
	case USER_ADMIN:
	case USER_DOCTOR:
		$action = $_POST['action'];
		switch($action){
			case 1:
				//specialization update
				$specialization = $_POST['specialityselect'];
					$result = addDoctorSpecialization($_SESSION['uid'], $specialization);
				if($result){
					header('Location: specializations.php?eid=1');
				}else{
					header('Location: specializations.php?eid=2');
				}
				break;
			case 2:
				//qualification update
				$qualification = $_POST['qualification'];
				$qyear = $_POST['qyear'];
				if(addDoctorQualifications($_SESSION['uid'], $qualification, $qyear)){
					header('Location: qualifications.php?eid=1');
				}else{
					header('Location: qualifications.php?eid=2');
				} 
				break;
			case 3:
				//workplace update
				$organization = $_POST['org'];
				$fromdate = $_POST['fromdate'];
				$tilldate = $_POST['tilldate'];
				if(addDoctorWorkplaces($_SESSION['uid'], $organization, $fromdate, $tilldate)){
					header('Location: workplaces.php?eid=1');
				}else{
					header('Location: workplaces.php?eid=2');
				}
				break;
		}
		break;
	case USER_HR:
		break;
	case USER_STUDENT:
		break;
}
?>