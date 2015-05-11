<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/previousquestioncontroller.php';
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
				if ((($_FILES["file"]["type"] == "application/msword")
					|| ($_FILES["file"]["type"] == "text/pdf")
					|| ($_FILES["file"]["type"] == "application/vnd.ms-powerpoint")
					|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.presentationml.presentation")
					|| ($_FILES["file"]["type"] == "application/pdf")
					|| ($_FILES["file"]["type"] == "application/octet-stream")))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
							header('Location: examquesposts.php?sid='.$sid.'&eid=2');
					    }
					  else
					    {
						$pathname = LIBRARY_EXAMQUESTIONPAPER_UPLOAD_FOLDER_PATH;
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
						      if(addPreviousQuestionPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
									header('Location: examquesposts.php?sid='.$sid.'&eid=1');
								}else{
									header('Location: examquesposts.php?sid='.$sid.'&eid=2');
								}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
								header('Location: examquesposts.php?sid='.$sid.'&eid=2');
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      		if(addPreviousQuestionPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
									header('Location: examquesposts.php?sid='.$sid.'&eid=1');
								}else{
									header('Location: examquesposts.php?sid='.$sid.'&eid=2');
								}
					      	}else{
					      		header('Location: examquesposts.php?sid='.$sid.'&eid=2');
					      	}
					      }
					    }
					  }else{
					  	header('Location: examquesposts.php?sid='.$sid.'&eid=2');
					  }
				}else{
					if(addPreviousQuestionPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, null)){
						header('Location: examquesposts.php?sid='.$sid.'&eid=1');
					}else{
						header('Location: examquesposts.php?sid='.$sid.'&eid=2');
					}
				}
		
		break;
	case 3:
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approvePreviousQuestionPost($postid, $status, $_SESSION['uid'])){
			header('Location: examquesposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: examquesposts.php?sid='.$sid.'&eid=2');
		}
		break;
}
?>