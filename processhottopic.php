<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/hottopiccontroller.php';
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
		$imageurlpath = $_FILES["file"]["name"];
if(strlen($imageurlpath)>2){
				if ((($_FILES["file"]["type"] == "application/msword")
					|| ($_FILES["file"]["type"] == "text/pdf")
					|| ($_FILES["file"]["type"] == "application/vnd.ms-powerpoint")
					|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.presentationml.presentation")
					|| ($_FILES["file"]["type"] == "application/pdf")
					|| ($_FILES["file"]["type"] == "application/octet-stream")))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
//					    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
							header('Location: hottopics.php?eid=2');
					    }
					  else
					    {
//					    echo "<h1>Upload: " . $_FILES["file"]["name"] . "<br />";
//					    echo "Type: " . $_FILES["file"]["type"] . "<br />";
//					    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//					    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
						$pathname = HOTTOPIC_UPLOAD_FOLDER_PATH;
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
						      	if(addHottopicPost($userid, $post, $status, $views, $dateofaddition, $postlabel, $finalfilename)){
									header('Location: hottopics.php?eid=1');
								}else{
									header('Location: hottopics.php?eid=2');
								}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
								header('Location: hottopics.php?eid=2');
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      		if(addHottopicPost($userid, $post, $status, $views, $dateofaddition, $postlabel, $finalfilename)){
									header('Location: hottopics.php?eid=1');
								}else{
									header('Location: hottopics.php?eid=2');
								}
					      	}else{
					      		header('Location: hottopics.php?eid=2');
					      	}
					      }
					    }
					  }else{
					  	header('Location: hottopics.php?eid=2');
					  }
				}else{
					header('Location: hottopics.php?eid=2');
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
		
		if(addHottopicPostComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: hottopic.php?tid='.$postid.'&eid=1');
		}else{
			header('Location: hottopic.php?tid='.$postid.'&eid=2');
		}
		break;
	case 3:
		//update the status
		$tid = $_GET['tid'];
		$user = $_SESSION['uid'];
		$status = $_GET['st'];
		approveHottopicPosts($tid, $status, $user);
		header('Location: hottopics.php');
		break;
}


?>