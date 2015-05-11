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
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$correctanswer = $_POST['correctanswer'];
		$explanation = $_POST['explanation'];
		if(addQuizPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $option1, $option2, $option3, $option4, $correctanswer, $explanation)){
			header('Location: quizposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: quizposts.php?sid='.$sid.'&eid=2');
		}
		break;
	case 2:
		break;
	case 3:
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveQuizPosts($postid, $status, $_SESSION['uid'])){
			header('Location: quizposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: quizposts.php?sid='.$sid.'&eid=2');
		}
		break;
}
?>