<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/classifiedcontroller.php';
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
$imageurlpath = $_FILES["file"]["name"];
			if(strlen($imageurlpath)>2){
				if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/pjpeg")
					|| ($_FILES["file"]["type"]) == "image/png"))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
							header('Location: classified.php?eid=2');
					    }
					  else
					    {
						$pathname = CLASSIFIED_UPLOAD_FOLDER_PATH;
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
						      	if(addClassifiedPost($userid, $post, $status, $views, $dateofaddition, $postlabel, $finalfilename)){
									header('Location: classified.php?eid=1');
								}else{
									header('Location: classified.php?eid=2');
								}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
								header('Location: classified.php?eid=2');
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      	if(addClassifiedPost($userid, $post, $status, $views, $dateofaddition, $postlabel, $finalfilename)){
									header('Location: classified.php?eid=1');
								}else{
									header('Location: classified.php?eid=2');
								}
					      	}else{
					      		header('Location: classified.php?eid=2');
					      	}
					      }
					    }
					  }else{
					  	header('Location: classified.php?eid=2');
					  }
				}else{
						if(addClassifiedPost($userid, $post, $status, $views, $dateofaddition, $postlabel, null)){
									header('Location: classified.php?eid=1');
								}else{
									header('Location: classified.php?eid=2');
								}
				}
		break;
	case 2://add classified comments
$comment = $_POST['comment'];
		$userid = $_SESSION['uid'];
		$status = 1;
		$dateofcomment = date('Y-m-d');
		$views = 0;
		$postid = $_POST['postid'];
		
		if(addClassifiedPostComment($userid, $postid, $comment, $dateofcomment, $status)){
			header('Location: classifiedpost.php?tid='.$postid.'&eid=1');
		}else{
			header('Location: classifiedpost.php?tid='.$postid.'&eid=2');
		}
		break;
	case 3:
$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveClassifiedPosts($postid, $status, $_SESSION['uid'])){
			header('Location: classified.php?eid=1');
		}else{
			header('Location: classified.php?eid=2');
		}
		break;
		
}


?>