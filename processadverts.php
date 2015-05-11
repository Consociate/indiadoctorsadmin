<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/advertcontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1:
		// add course post
		$status =1;
		$userid = $_SESSION['uid'];
		$approverid = $userid;
		$dateofaddition = date('Y-m-d');
		$views = 0;
		$imageurlpath = $_FILES["file"]["name"];
		$linkurl = $_POST['postlabel'];
		$slot = $_POST['slot'];
			if(strlen($imageurlpath)>2){
				if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/pjpeg"))
					|| ($_FILES["file"]["type"] == "image/png"))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
//					    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
							header('Location: adverts.php?eid=2');
					    }
					  else
					    {
//					    echo "<h1>Upload: " . $_FILES["file"]["name"] . "<br />";
//					    echo "Type: " . $_FILES["file"]["type"] . "<br />";
//					    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//					    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
						$pathname = ADVERTISEMENT_IMAGE_UPLOAD_FOLDER_PATH;
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
						      	if(addAdvertPost($userid, $dateofaddition, $views, $approverid, $status, $slot, $finalfilename, $linkurl)){
					      			header('Location: adverts.php?eid=1');
					      		}else{
					      			header('Location: adverts.php?eid=2');
					      		}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
								header('Location: adverts.php?eid=2');
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      		if(addAdvertPost($userid, $dateofaddition, $views, $approverid, $status, $slot, $finalfilename, $linkurl)){
					      			header('Location: adverts.php?eid=1');
					      		}else{
					      			header('Location: adverts.php?eid=2');
					      		}
					      	}else{
					      		header('Location: adverts.php?eid=2');
					      	}
					      }
					    }
					  }else{
					  	header('Location: adverts.php?eid=2');
					  }
				}else{
					header('Location: adverts.php?eid=2');
				}
				//forward it to next page
				
		break;
	case 2:
		break;
	case 3:
		$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		if(approveAdvertPosts($postid, $status, $_SESSION['uid'])){
			header('Location: adverts.php?eid=1');
		}else{
			header('Location: adverts.php?eid=2');
		}
		break;
}
?>