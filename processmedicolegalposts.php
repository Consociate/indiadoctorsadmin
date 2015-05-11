<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/medicolegalcontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1://add medicolegal post
		$sid = $_POST['sid'];
		$postlabel = $_POST['postlabel'];
		$post = $_POST['post'];
		$status =0;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
		if(addMedicoLegalPost($userid, $post, $status, $views, $dateofaddition, $postlabel)){
			header('Location: medicolegal.php?eid=1');
		}else{
			header('Location: medicolegal.php?eid=2');
		}
		break;
	case 2://add medicolegal comment
//add post comment
		$comment = $_POST['comment'];
		$userid = $_SESSION['uid'];
		$status = 1;
		$dateofcomment = date('Y-m-d');
		$views = 0;
		$postid = $_POST['postid'];
		
		if(addMedicoLegalPostComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: medicolegalpost.php?tid='.$postid.'&eid=1');
		}else{
			header('Location: medicolegalpost.php?tid='.$postid.'&eid=2');
		}
		break;
	case 3:
		//remove forum post
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveMedicoLegalPosts($postid, $status, $_SESSION['uid'])){
			header('Location: medicolegal.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: medicolegal.php?sid='.$sid.'&eid=2');
		}
		break;
}


?>