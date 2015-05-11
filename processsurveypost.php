<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/surveycontroller.php';

$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1:
		//add survey
		$postlabel = $_POST['postlabel'];
		$status =1;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
		$noofoptions = $_POST['noofoptions'];
		$surveyid = addSurveyPost($userid, $status, $views, $dateofaddition, $postlabel);
		if($surveyid){
			for($i=0; $i<$noofoptions; $i++){
				$optionlabel = $_POST['option'.($i+1)];
				addSurveyOptions($surveyid, $optionlabel);
			}
			header('Location: surveys.php?eid=1');
		}else{
			header('Location: surveys.php?eid=2');
		}
		break;
	case 2:
		//add survey response
		$optionid = $_GET['oid'];
		$userid = $_SESSION['uid'];
		$surveyid = $_GET['tid'];
		if(voteForSurvey($surveyid, $userid, $optionid)){
			header('Location: surveypost.php?eid=1&tid='.$surveyid);
		}else{
			header('Location: surveypost.php?eid=2&tid='.$surveyid);
		}
		break;
	case 3:
		//remove forum post
		$postid = $_GET['tid'];
		$status = $_GET['st'];
		if(approveSurveyPosts($postid, $status, $_SESSION['uid'])){
			header('Location: surveys.php?eid=1');
		}else{
			header('Location: surveys.php?eid=2');
		}
		break;
}
?>