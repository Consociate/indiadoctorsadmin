<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/editorpostcontroller.php';
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
		if(addEditorsPost($userid, $post, $status, $views, $dateofaddition, $postlabel)){
			header('Location: editorspost.php?eid=1');
		}else{
			header('Location: editorspost.php?eid=2');
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
		
		if(addEditorsPostComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: editorsposts.php?tid='.$postid.'&eid=1');
		}else{
			header('Location: editorsposts.php?tid='.$postid.'&eid=2');
		}
		break;
	case 3:
		//update the status
		$tid = $_GET['tid'];
		$user = $_SESSION['uid'];
		$status = $_GET['st'];
		approveEditorsPosts($tid, $status, $user);
		header('Location: editorspost.php');
		break;
}


?>