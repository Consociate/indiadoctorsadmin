<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/librarycontroller.php';
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
		$imageurlpath = $_FILES["file"]["name"];
			if(strlen($imageurlpath)>2){
				if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/pjpeg"))
					|| ($_FILES["file"]["type"] == "image/png"))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
//					    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
							header('Location: imagesposts.php?sid='.$sid.'&eid=2');
					    }
					  else
					    {
//					    echo "<h1>Upload: " . $_FILES["file"]["name"] . "<br />";
//					    echo "Type: " . $_FILES["file"]["type"] . "<br />";
//					    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//					    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
						$pathname = LIBRARY_IMG_UPLOAD_FOLDER_PATH;
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
						      	if(addImagesPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
					      			header('Location: imagesposts.php?sid='.$sid.'&eid=1');
					      		}else{
					      			header('Location: imagesposts.php?sid='.$sid.'&eid=2');
					      		}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
								header('Location: imagesposts.php?sid='.$sid.'&eid=2');
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      		if(addImagesPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
					      			header('Location: imagesposts.php?sid='.$sid.'&eid=1');
					      		}else{
					      			header('Location: imagesposts.php?sid='.$sid.'&eid=2');
					      		}
					      	}else{
					      		header('Location: imagesposts.php?sid='.$sid.'&eid=2');
					      	}
					      }
					    }
					  }else{
					  	header('Location: imagesposts.php?sid='.$sid.'&eid=2');
					  }
				}else{
					header('Location: imagesposts.php?sid='.$sid.'&eid=2');
				}
				//forward it to next page
				
		break;
	case 2:
		break;
	case 3:
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveImagesPosts($postid, $status, $_SESSION['uid'])){
			header('Location: imagesposts.php?sid='.$sid.'&eid=1');
		}else{
			header('Location: imagesposts.php?sid='.$sid.'&eid=2');
		}
		break;
}
?>