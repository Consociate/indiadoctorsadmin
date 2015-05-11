<?php
include_once 'authenticationscript.php';
include_once 'src/controllers/linkcontroller.php';
$action = $_POST['action'];
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
switch($action){
	case 1://add medicolegal post
		$postlabel = $_POST['postlabel'];
		$post = $_POST['post'];
		$status =1;
		$userid = $_SESSION['uid'];
		$dateofaddition = date('Y-m-d');
		$views = 0;
		$linkpath = $_POST['linkpath'];
		
		$imageurlpath = $_FILES["file"]["name"];
		if(strlen($imageurlpath)>2){
			if (true)
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
					$pathname = IMPLINKS_UPLOAD_FOLDER_PATH;
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
							if(strlen($linkpath)>2){
								if(addLinks($userid, $post, $status, $views, $dateofaddition, $postlabel, $linkpath, $finalfilename)){ 
									header('Location: implinks.php?eid=1');
								}else{
									header('Location: implinks.php?eid=2');
								}
							}else{
								header('Location: implinks.php?eid=2');
							}
						}else{
							//						      	echo "<h1>File not uploaded. Please try again</h1>";
							header('Location: implinks.php?eid=2');
						}
					}
					else
					{
						if(!file_exists($pathname)){
							mkdir($pathname, 0, true);
						}
						$fileUploadStatus = move_uploaded_file($_FILES["file"]["tmp_name"],$pathname . $finalfilename);
						if($fileUploadStatus){
							if(strlen($linkpath)>2){
								if(addLinks($userid, $post, $status, $views, $dateofaddition, $postlabel, $linkpath, $finalfilename)){ 
									header('Location: implinks.php?eid=1');
								}else{
									header('Location: implinks.php?eid=2');
								}
							}else{
								header('Location: implinks.php?eid=2');
							}
						}else{
							header('Location: implinks.php?eid=2');
						}
					}
				}
			}else{
				header('Location: implinks.php?eid=2');
			}
		}else{
			if(strlen($linkpath)>2){
				if(addLinks($userid, $post, $status, $views, $dateofaddition, $postlabel, $linkpath, null)){ 
						header('Location: implinks.php?eid=1');
					}else{
						header('Location: implinks.php?eid=2');
					}
				}else{
					header('Location: implinks.php?eid=2');
				}
		}
		break;
	case 2://add medicolegal comment
//add po
$tid = $_GET['tid'];
$status = $_GET['st'];
$approverid = $_SESSION['uid'];
		if(approveLinks($tid, $status, $approverid)){
			header('Location: implinks.php?eid=1');
		}else{
			header('Location: implinks.php?eid=2');
		}
		break;
}


?>