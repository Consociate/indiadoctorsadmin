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
		$type = $_POST['type'];
		
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
					     switch($type){
									case 1:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
									case 2:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
								}
					    }
					  else
					    {
						$pathname = LIBRARY_GUIDELINES_UPLOAD_FOLDER_PATH;
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
						      switch($type){
									case 1:
										if(addGuidelinesNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
										}else{
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										}
										break;
									case 2:
										if(addGuidelinesInterNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
										}else{
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										}
										break;
								}
						     }else{
//						      	echo "<h1>File not uploaded. Please try again</h1>";
						     switch($type){
									case 1:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
									case 2:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
								}
						      }
					      }
					    else
					      {
					      	if(!file_exists($pathname)){
					      		mkdir($pathname, 0, true);
					      	}
					      	$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
					      	if($fileUploadStatus){
					      	switch($type){
									case 1:
										if(addGuidelinesNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
										}else{
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										}
										break;
									case 2:
										if(addGuidelinesInterNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $finalfilename)){
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
										}else{
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										}
										break;
								}
					      	}else{
					      	 switch($type){
									case 1:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
									case 2:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
								}
					      	}
					      }
					    }
					  }else{
					   switch($type){
									case 1:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
									case 2:
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										break;
								}
					  }
				}else{
					switch($type){
									case 1:
										if(addGuidelinesNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, null)){
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
										}else{
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										}
										break;
									case 2:
										if(addGuidelinesInterNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, null)){
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
										}else{
											header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
										}
										break;
								}
				}
		break;
	case 2:
		break;
	case 3:
		//remove post
$postid = $_GET['tid'];
		$sid = $_GET['sid'];
		$status = $_GET['st'];
		$type = $_GET['type'];
		switch($type){
			case 1:
		if(approveGuidelinesNationalPosts($postid, $status, $_SESSION['uid'])){
			header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
		}else{
			header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
		}
				break;
			case 2:
		if(approveGuidelinesInterNationalPosts($postid, $status, $_SESSION['uid'])){
			header('Location: guidelinesposts.php?sid='.$sid.'&eid=1&type='.$type);
		}else{
			header('Location: guidelinesposts.php?sid='.$sid.'&eid=2&type='.$type);
		}
				break;
		}
		
		break;
}
?>