<?php
include_once 'src/utility/dbutility.php';
include_once 'src/entities/user.php';
include_once 'src/globalvars.php';
	function rand_string( $length ) {

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
return substr(str_shuffle($chars),0,$length);

}

function validateUserForPasswordGeneration($username){
	$connection = initDB();
	$data = array();
		$query = "SELECT * FROM user_table WHERE username='$username'";
		$result = mysql_query($query);
		if(mysql_num_rows($result)){
			$row = mysql_fetch_array($result);
			$accounttype = $row['accounttype'];
			$userid = $row['userid'];
			switch($accounttype){
				case USER_ADMIN:
				case USER_DOCTOR:
					$query = "SELECT * FROM doctor_master_profile_table WHERE userid='$userid'";
					break;
				case USER_STUDENT:
					$query = "SELECT * FROM student_master_profile_table WHERE userid='$userid'";
					break;
				case USER_HR:
					$query = "SELECT * FROM hr_master_profile_table WHERE userid='$userid'";
					break;
			}
			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			$email = $row['email'];
			$password = rand_string(8);
			$query = "UPDATE user_table SET password='$password' WHERE userid='$userid'";
			$result =  mysql_query($query);
			$data = array('email'=>$email, 'password'=>$password);
		}else{
			closeDB($connection);
			return $data;
		}
	closeDB($connection);
	return $data;
}

	function loginUser($username, $password){
		$connection = initDB();
		$password = mysql_escape_string($password);
		$username = mysql_escape_string($username);
		$query = "SELECT * FROM user_table WHERE username='$username' AND password='$password' AND status='1'";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new User();
			$ent->setAccounttype($row['accounttype']);
			$ent->setUserid($row['userid']);
			$ent->setUsername($row['username']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function fetchUserList($userid = -1){
		$connection = initDB();
		$query = "SELECT * FROM user_table ORDER BY username ASC";
		if($userid != -1){
			$query = "SELECT * FROM user_table WHERE userid='$userid'";
		}
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new User();
			$ent->setAccounttype($row['accounttype']);
			$ent->setUserid($row['userid']);
			$ent->setUsername($row['username']);
			$ent->setStatus($row['status']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function updateAccountStatus($userid, $status){
		$connection = initDB();
		$query = "UPDATE user_table SET status='$status' WHERE userid='$userid'";
		if($status < 1){
			$query = "DELETE FROM user_table WHERE userid='$userid'";
		}
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
?>