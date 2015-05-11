<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/forumcontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1:
		// add forum post
		$sid = $_POST['sid'];
		$postlabel = $_POST['postlabel'];
		$post = $_POST['post'];
		$status =1;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
$imageurlpath = $_FILES["file"]["name"];
			if(strlen($imageurlpath)>2){
				if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/pjpeg")
					|| ($_FILES["file"]["type"]) == "image/png"))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
							header('Location: forumposts.php?sid='.$sid.'&eid=2');
					    }
					  else
					    {
						$pathname = FORUM_UPLOAD_FOLDER_PATH;
					    $extn = substr($_FILES["file"]["name"], strpos($_FILES["file"]["name"], "."));
					    $finalfilename = time().$extn;
					    if (file_exists($pathname . $finalfilename))
					      {
//					      echo $finalfilename . " already exists. ";
					      	unlink($pathname . $finalfilename);
						      $fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
						      if($fileUploadStatus){
//						      	 echo "Stored in: " . $pathname . $finalfilename."</h1>";
						      	// $filename = $_FILES["file"]["name"];
						      if(addForumPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
									header('Location: forumposts.php?sid='.$sid.'&eid=1');
								}else{
									header('Location: forumposts.php?sid='.$sid.'&eid=2');
								}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
								header('Location: forumposts.php?sid='.$sid.'&eid=2');
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      		if(addForumPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
									header('Location: forumposts.php?sid='.$sid.'&eid=1');
								}else{
									header('Location: forumposts.php?sid='.$sid.'&eid=2');
								}
					      	}else{
					      		header('Location: forumposts.php?sid='.$sid.'&eid=2');
					      	}
					      }
					    }
					  }else{
					  	header('Location: forumposts.php?sid='.$sid.'&eid=2');
					  }
				}else{
					if(addForumPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, null)){
						header('Location: forumposts.php?sid='.$sid.'&eid=1');
					}else{
						header('Location: forumposts.php?sid='.$sid.'&eid=2');
					}
				}
		
		break;
	case 2:
		//add post comment
		$comment = $_POST['comment'];
		$userid = $_SESSION['uid'];
		$status = 1;
		$dateofcomment = date('Y-m-d');
		$views = 0;
		$postid = $_POST['postid'];
		$specialityid = $_POST['sid'];
		
		if(addForumPostComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: forumpost.php?sid='.$specialityid.'&tid='.$postid.'&eid=1');
		}else{
			header('Location: forumpost.php?sid='.$specialityid.'&tid='.$postid.'&eid=2');
		}
		break;
	case 3:
		//remove forum post
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveForumPost($postid, $status, $_SESSION['uid'])){
			header('Location: forumposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: forumposts.php?sid='.$sid.'&eid=2');
		}
		break;
}
?>