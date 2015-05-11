<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/profilecontroller.php';
include_once 'src/globalvars.php';
		$action = $_GET['ac'];
		switch($action){
			case 1:
				//specialization update
				$tid= $_GET['tid'];
				$result = removeDoctorSpecialization($tid, $_SESSION['uid']);
				if($result){
					header('Location: specializations.php?eid=1');
				}else{
					header('Location: specializations.php?eid=2');
				}
				break;
			case 2:
				//qualification update
				$tid = $_GET['tid'];
				$result = removeDoctorQualification($tid, $_SESSION['uid']);
				if($result){
					header('Location: qualifications.php?eid=1');
				}else{
					header('Location: qualifications.php?eid=2');
				}
				break;
			case 3:
				//workplace update
				$tid = $_GET['tid'];
				$result = removeDoctorWorkplaces($tid, $_SESSION['uid']);
				if($result){
					header('Location: workplaces.php?eid=1');
				}else{
					header('Location: workplaces.php?eid=2');
				}
				break;
		}
		break;
?>