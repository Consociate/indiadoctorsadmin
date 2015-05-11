<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/jobcontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1://add medicolegal post
		$sid = $_POST['sid'];
		$postlabel = $_POST['postlabel'];
		$post = $_POST['post'];
		$status =1;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
		if(addJobPost($userid, $post, $status, $views, $dateofaddition, $postlabel)){
			header('Location: jobposts.php?eid=1');
		}else{
			header('Location: jobposts.php?eid=2');
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
		
		if(addJobComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: jobpost.php?tid='.$postid.'&eid=1');
		}else{
			header('Location: jobpost.php?tid='.$postid.'&eid=2');
		}
		break;
	case 3:
		$postid = $_GET['tid'];
		$status = $_GET['st'];
		if(approveJobPosts($postid, $status, $_SESSION['uid'])){
			header('Location: jobposts.php?eid=1');
		}else{
			header('Location: jobposts.php?eid=2');
		}
		break;
}


?>