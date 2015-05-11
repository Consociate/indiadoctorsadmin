<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/examcontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1:
		// add course post
		$sid = $_POST['sid'];
		$postlabel = $_POST['postlabel'];
		$post = $_POST['post'];
		$status =1;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
		if(addMDPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel)){
			header('Location: mdposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: mdposts.php?sid='.$sid.'&eid=2');
		}
		break;
	case 2:
		break;
	case 3:
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveMDPosts($postid, $status, $_SESSION['uid'])){
			header('Location: mdposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: mdposts.php?sid='.$sid.'&eid=2');
		}
		break;
}
?>