<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/newscontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1://add international news
		$postlabel = $_POST['postlabel'];
		$post = $_POST['post'];
		$status =1;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
		if(addInterNationalNews($userid, $post, $status, $views, $dateofaddition, $postlabel)){
			header('Location: internationalnews.php?eid=1');
		}else{
			header('Location: internationalnews.php?eid=2');
		}
		break;
	case 2: //add international news comment
		$comment = $_POST['comment'];
		$userid = $_SESSION['uid'];
		$status = 1;
		$dateofcomment = date('Y-m-d');
		$views = 0;
		$postid = $_POST['postid'];
		
		if(addInternationalNewsPostComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: internationalnewspost.php?tid='.$postid.'&eid=1');
		}else{
			header('Location: internationalnewspost.php?tid='.$postid.'&eid=2');
		}
		break;	
	case 3:
		$postid = $_GET['tid'];
		$status = $_GET['st'];
		if(removeInterNationalNews($postid)){
			header('Location: internationalnews.php?eid=1');
		}else{
			header('Location: internationalnews.php?eid=2');
		}
		break;
}


?>