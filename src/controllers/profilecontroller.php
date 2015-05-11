<?php

	include_once 'src/utility/dbutility.php';
	include_once 'src/entities/doctorprofile.php';
	include_once 'src/entities/doctorspeciality.php';
	include_once 'src/entities/doctorqualification.php';
	include_once 'src/entities/doctorworkplace.php';
	include_once 'src/entities/usertodo.php';
	include_once 'src/entities/usershare.php';
	include_once 'src/entities/user.php';

	function changePassword($oldpassword, $newpassword, $userid){
		$connection = initDB();
		$query = "SELECT * FROM user_table WHERE password='$oldpassword' AND userid='$userid'";
		$result = mysql_query($query);
		$numofrows = mysql_num_rows($result);
		if($numofrows){
			$query = "UPDATE user_table SET password='$newpassword' WHERE userid='$userid'";
			$result = mysql_query($query);
			closeDB($connection);
			return $result;
		}else{
			closeDB($connection);
			return false;
		}
		
	}
	
	function fetchSearchSuggestions($searchquery){
		$connection = initDB();
		$query = "SELECT * FROM user_table ut, doctor_master_profile_table dmpt
			 WHERE (ut.username LIKE '%$searchquery%' OR dmpt.name LIKE '%$searchquery%') AND (ut.accounttype='4' OR ut.accounttype='1')
			 AND ut.userid=dmpt.userid ORDER BY username ASC";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new User();
			$ent->setUserid($row['userid']);
			$ent->setUsername($row['username']);
			$ent->setName($row['name']);
			$data[$entry] = $ent;
			$entry++;
		}
		
		$query = "SELECT dst.userid, smt.specializationlabel, ut.username, dmpt.`name`
FROM `doctor_speciality_table` dst, specialization_master_table smt, user_table ut, doctor_master_profile_table dmpt
WHERE dst.specialityid=smt.specializationid
AND ut.userid=dst.userid AND dmpt.userid=ut.userid AND (ut.accounttype='4' OR ut.accounttype='1')
AND smt.specializationlabel LIKE '%$searchquery%'";
		$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
			$ent = new User();
			$ent->setUserid($row['userid']);
			$ent->setUsername($row['username']);
			$ent->setName($row['name']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function updateShareSettings($userid, $shareid, $setting){
		$connection = initDB();
		$query = "SELECT * FROM user_permission_table WHERE userid='$userid' AND shareid='$shareid'";
		$result = mysql_query($query);
		$numofrows = mysql_num_rows($result);
		if($numofrows){
			//update
			$query = "UPDATE user_permission_table SET setting='$setting' WHERE userid='$userid' AND shareid='$shareid'";
			$result = mysql_query($query);
		}else{
			//insert
			$query = "INSERT INTO user_permission_table(userid, shareid, setting) VALUES('$userid', '$shareid', '$setting')";
			$result = mysql_query($query);
		}
		closeDB($connection);
		return $result;
	}
	
	function fetchShareSettingForUserForOnePermission($userid, $shareid){
		$connection = initDB();
		$setting = 1;
		$query = "SELECT * FROM user_permission_table WHERE userid='$userid' AND shareid='$shareid'";
		$result = mysql_query($query);
		if(mysql_num_rows($result)){
			$row = mysql_fetch_array($result);
			$setting = $row['setting'];
		}
		closeDB($connection);
		return $setting;
	}
	
	function fetchShareSettingsForUser($userid, $shareid=-1){
		$connection = initDB();
		$query = "SELECT * FROM user_permission_table WHERE userid='$userid'";
		if($shareid != -1){
			$query .= "  AND shareid='$shareid'";
		}
		$result = mysql_query($query);
		$data = array();
		$entry =0;
		while($row = mysql_fetch_array($result)){
			$ent = new UserShare();
			$ent->setUserid($row['userid']);
			$ent->setShareid($row['shareid']);
			$ent->setSetting($row['setting']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function fetchDoctorBasicProfile($userid){
		$connection = initDB();
		$query = "SELECT * FROM doctor_master_profile_table WHERE userid='$userid'";
		$result = mysql_query($query);
		$data = array();
		$entry =0;
		while($row = mysql_fetch_array($result)){
			$ent = new DoctorProfile();
			$ent->setAddress($row['address']);
			$ent->setEmail($row['email']);
			$ent->setGender($row['gender']);
			$ent->setMobileno($row['mobileno']);
			$ent->setProfileimageurlpath($row['profileimageurl']);
			$ent->setRecievenewsletter($row['recievenewsletter']);
			$ent->setUserid($row['userid']);
			$ent->setMci($row['mci']);
			$ent->setName($row['name']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function fetchStudentBasicProfile($userid){
		$connection = initDB();
		$query = "SELECT * FROM student_master_profile_table WHERE userid='$userid'";
		$result = mysql_query($query);
		$data = array();
		$entry =0;
		while($row = mysql_fetch_array($result)){
			$ent = new DoctorProfile();
			$ent->setAddress($row['address']);
			$ent->setEmail($row['email']);
			$ent->setGender($row['gender']);
			$ent->setMobileno($row['mobileno']);
			$ent->setProfileimageurlpath($row['profileimageurl']);
			$ent->setRecievenewsletter($row['recievenewsletter']);
			$ent->setUserid($row['userid']);
			$ent->setMci($row['currentyear']);
			$ent->setName($row['name']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function fetchHRBasicProfile($userid){
		$connection = initDB();
		$query = "SELECT * FROM hr_master_profile_table WHERE userid='$userid'";
		$result = mysql_query($query);
		$data = array();
		$entry =0;
		while($row = mysql_fetch_array($result)){
			$ent = new DoctorProfile();
			$ent->setAddress($row['address']);
			$ent->setEmail($row['email']);
			$ent->setGender($row['gender']);
			$ent->setMobileno($row['mobileno']);
			$ent->setProfileimageurlpath($row['profileimageurl']);
			$ent->setRecievenewsletter($row['recievenewsletter']);
			$ent->setUserid($row['userid']);
			$ent->setMci($row['positionofperson']);
			$ent->setName($row['name']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function updateDoctorBasicProfile($name, $email, $gender, $mobileno, $profileurlpath, $recievenewsletter, $userid, $mci){
		$connection = initDB();
		$query = "UPDATE doctor_master_profile_table SET name='$name', email='$email', gender='$gender', mobileno='$mobileno', 
			mci='$mci', recievenewsletter='$recievenewsletter' WHERE userid='$userid'";
		$result = mysql_query($query);
		if(strlen($profileurlpath)>2){
			$query = "UPDATE doctor_master_profile_table SET profileimageurl='$profileurlpath' WHERE userid='$userid'";
			$result = mysql_query($query);
		}
		closeDB($connection);
		return $result;
	}
	
	function getDoctorProfileImage($userid){
		$connection = initDB();
		$query = "SELECT profileimageurl FROM doctor_master_profile_table WHERE userid='$userid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function updateProfileImagePath($profileimageurl, $userid){
		$connection = initDB();
		$query = "UPDATE doctor_master_profile_table SET profileimageurl='$profileimageurl' WHERE userid='$userid'";
			$result = mysql_query($query);
			closeDB($connection);
		return $result;
	}
	
	//SPECIALITY FUNCTIONS
	function addDoctorSpecialization($userid, $specialization){
		$connection = initDB();
		$query = "INSERT INTO doctor_speciality_table(userid, specialityid) VALUES('$userid', '$specialization')";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}

	function removeDoctorSpecialization($tid, $userid){
		$connection = initDB();
		$query = "DELETE FROM doctor_speciality_table WHERE tid='$tid' AND userid='$userid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function getDoctorSpecialityDetails($userid){
		$connection = initDB();
		$query = "SELECT dst.*, smt.specializationlabel 
FROM `doctor_speciality_table` dst, specialization_master_table smt
WHERE dst.specialityid=smt.specializationid AND dst.userid='$userid'
ORDER BY smt.specializationlabel ASC";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new DoctorSpeciality();
			$ent->setSpecialityid($row['specialityid']);
			$ent->setSpecialitylabel($row['specializationlabel']);
			$ent->setTid($row['tid']);
			$ent->setUserid($row['userid']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}

	//QUALIFICATON FUNCTIONS
	function addDoctorQualifications($userid, $qualification, $year){
		$connection = initDB();
		$query = "INSERT INTO doctor_qualification_table(userid, qualification, qyear) VALUES('$userid', '$qualification', '$year')";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}	
	
	function removeDoctorQualification($tid, $userid){
		$connection = initDB();
		$query = "DELETE FROM doctor_qualification_table WHERE userid='$userid' AND tid='$tid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function getDoctorQualificationDetails($userid){
		$connection = initDB();
		$query = "SELECT * FROM doctor_qualification_table WHERE userid='$userid' ORDER BY qyear DESC";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new DoctorQualification();
			$ent->setQualification($row['qualification']);
			$ent->setTid($row['tid']);
			$ent->setUserid($row['userid']);
			$ent->setYear($row['qyear']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}

	//WORKPLACES FUNCTIONS
	function addDoctorWorkplaces($userid, $organization, $fromdate, $tilldate){
		$connection = initDB();
		$query = "INSERT INTO doctor_job_table(userid, workedat, fromdate, tilldate) VALUES('$userid', '$organization', '$fromdate', '$tilldate')";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}	
	
	function removeDoctorWorkplaces($tid, $userid){
		$connection = initDB();
		$query = "DELETE FROM doctor_job_table WHERE userid='$userid' AND tid='$tid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function getDoctorWorkplaceDetails($userid){
		$connection = initDB();
		$query = "SELECT * FROM doctor_job_table WHERE userid='$userid' ORDER BY fromdate DESC";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new DoctorWorkplace();
			$ent->setFromdate($row['fromdate']);
			$ent->setOrganization($row['workedat']);
			$ent->setTid($row['tid']);
			$ent->setUserid($row['userid']);
			$ent->setTilldate($row['tilldate']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	//TO DO LIST
	function addUserToDoList($userid, $fromdate, $tilldate, $fromtime, $tilltime, $tasklabel){
    $connection = initDB();
    $query = "INSERT INTO user_todo_list(userid, fromdate, tilldate, fromtime, tilltime, tasklabel)
        VALUES('$userid','$fromdate','$tilldate','$fromtime','$tilltime', '$tasklabel')";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function removeUserToDoList($userid, $tid){
    $connection = initDB();
    $query = "DELETE FROM user_todo_list WHERE userid='$userid' AND tid='$tid'";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function getUserToDoList($userid, $fromdate=-1){
    $connection = initDB();
    $query = "SELECT * FROM user_todo_list WHERE userid='$userid'";
    if($fromdate!= -1){
        $query .= " AND fromdate>='$fromdate' AND tilldate>='$fromdate'";
    }
    $query .=" ORDER BY fromdate DESC";
    $result = mysql_query($query);
    $data = array();
    $entry = 0;
    while($row = mysql_fetch_array($result)){
        $ent = new UserToDo();
        $ent->setFromdate($row['fromdate']);
        $ent->setFromtime($row['fromtime']);
        $ent->setTasklabel($row['tasklabel']);
        $ent->setTid($row['tid']);
        $ent->setTilldate($row['tilldate']);
        $ent->setTilltime($row['tilltime']);
        $ent->setUserid($row['userid']);
        $data[$entry]=  $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

//CV controller
function uploadCV($userid, $cvpath){
	$connection = initDB();
	$query = "SELECT * FROM doctor_cv_table WHERE userid='$userid'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
		//update
		$query = "UPDATE doctor_cv_table SET cvpath='$cvpath' WHERE userid='$userid'";
		$result = mysql_query($query);
	}else{
		//insert
		$query = "INSERT INTO doctor_cv_table (userid, cvpath) VALUES('$userid','$cvpath')";
		$result = mysql_query($query);
	}
	closeDB($connection);
	return $result;
}

function getCVPathForUser($userid){
	$connection = initDB();
	$query = "SELECT cvpath FROM doctor_cv_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$cvpath = NULL;
	if(mysql_num_rows($result)){
		$row = mysql_fetch_array($result);
		$cvpath = $row['cvpath'];
	}
	closeDB($connection);
	return $cvpath;
}
?>
