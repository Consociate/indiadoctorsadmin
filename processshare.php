<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/profilecontroller.php';
include_once 'src/globalvars.php';
switch($_SESSION['at']){
	case USER_ADMIN:
	case USER_DOCTOR:
		$profile = $_POST['profile'];
		updateShareSettings($_SESSION['uid'], SHARE_PROFILE, $profile);
		$cv = $_POST['cv'];
		updateShareSettings($_SESSION['uid'], SHARE_CV, $cv);
		$edu = $_POST['edu'];
		updateShareSettings($_SESSION['uid'], SHARE_EDU, $edu);
		$work = $_POST['work'];
		updateShareSettings($_SESSION['uid'], SHARE_WORK, $work);
		$spec = $_POST['spec'];
		updateShareSettings($_SESSION['uid'], SHARE_SPEC, $spec);
		header('Location: share.php?eid=1');
		break;
	case USER_HR:
		break;
	case USER_STUDENT:
		break;
}
?>