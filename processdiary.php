<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/diarycontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1:
		//add classified posts
$post = $_POST['post'];
$postlabel = $_POST['postlabel'];
$dateofaddition = date('Y-m-d');
$views = 0;
$status = 1;
$userid = $_SESSION['uid'];
if(addDiaryPost($userid, $post, $status, $views, $dateofaddition, $postlabel, null)){
	header('Location: diary.php?eid=1');
}else{
	header('Location: diary.php?eid=2');
}
		break;
	case 3:
$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveDiaryPosts($postid, $status, $_SESSION['uid'])){
			header('Location: diary.php?eid=1');
		}else{
			header('Location: diary.php?eid=2');
		}
		break;
		
}


?>