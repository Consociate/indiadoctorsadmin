<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/profilecontroller.php';
include_once 'src/globalvars.php';
	$name=$_POST['name'];
	$mci = $_POST['mci'];
	$accounttype = $_SESSION['at'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$newsletter = $_POST['newsletter'];
	$address = $_POST['address'];
	$userid = $_SESSION['uid'];
	$profileurlpath = $_FILES["file"]["name"];
	$newsletter = 1;
	switch($accounttype){
		case USER_ADMIN:
		case USER_DOCTOR:
			if(updateDoctorBasicProfile($name, $email, $gender, $mobileno, $profileurlpath, $newsletter, $userid, $mci)){
				//upload image
				if(strlen($profileurlpath)>2){
				if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/pjpeg")
					|| ($_FILES["file"]["type"]) == "image/png"))
					  {
					  if ($_FILES["file"]["error"] > 0)
					    {
//					    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
					    }
					  else
					    {
//					    echo "<h1>Upload: " . $_FILES["file"]["name"] . "<br />";
//					    echo "Type: " . $_FILES["file"]["type"] . "<br />";
//					    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//					    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
						$pathname = PROFILE_IMG_UPLOAD_FOLDER_PATH;
					    $extn = substr($_FILES["file"]["name"], strpos($_FILES["file"]["name"], "."));
					    $finalfilename = $userid.$extn;
					    if (file_exists($pathname . $finalfilename))
					      {
//					      echo $finalfilename . " already exists. ";
					      	unlink($pathname . $finalfilename);
						      $fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
						      if($fileUploadStatus){
//						      	 echo "Stored in: " . $pathname . $finalfilename."</h1>";
						      	// $filename = $_FILES["file"]["name"];
						      	updateProfileImagePath($finalfilename, $userid);
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      		updateProfileImagePath($finalfilename, $userid);
					      	}
					      }
					    }
					  }
				}
				//forward it to next page
				header('Location: editprofile.php?eid=1');
			}else{
				header('Location: editprofile.php?eid=2');
			}
			break;
		case USER_HR:
			break;
		case USER_STUDENT:
			break;
	}

?>
