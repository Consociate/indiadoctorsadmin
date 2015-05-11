<?php
include_once 'src/utility/dbutility.php';
include_once 'src/globalvars.php';

function activateAccount($username){
	$connection = initDB();
	$query = "UPDATE user_table SET status='1' WHERE username='$username'";
	$result = mysql_query($query);
	closeDB($connection);
	return $result;
}

function registerDoctor($username, $password, $mci, $address, $email, $name, $mobileno, $gender, $recievenewsletter, $accounttype){
	$query = "INSERT INTO user_table(username, password, accounttype,status) VALUES('$username', '$password', '$accounttype', '0')";
	$connection = initDB();
	$result = mysql_query($query);
	$userid = mysql_insert_id();
	if($userid){
		$query = "INSERT INTO doctor_master_profile_table(userid, name, mci, gender, email, address, mobileno, recievenewsletter)
			VALUES('$userid', '$name', '$mci', '$gender', '$email', '$address', '$mobileno', '$recievenewsletter')";
		$result = mysql_query($query);
		if($result){
			closeDB($connection);
			return true;
		}else{
			$query = "DELETE FROM user_table WHERE userid='$userid'";
			$result = mysql_query($query);
			return false;
		}
	}else{
		return false;
		closeDB($connection);
	}
}

function registerStudent($username, $password, $mci, $address, $email, $name, $mobileno, $gender, $recievenewsletter, $accounttype){
	$query = "INSERT INTO user_table(username, password, accounttype,status) VALUES('$username', '$password', '$accounttype', '0')";
	$connection = initDB();
	$result = mysql_query($query);
	$userid = mysql_insert_id();
	if($userid){
		$query = "INSERT INTO student_master_profile_table(userid, name, currentyear, gender, email, address, mobileno, recievenewsletter)
			VALUES('$userid', '$name', '$mci', '$gender', '$email', '$address', '$mobileno', '$recievenewsletter')";
		$result = mysql_query($query);
		if($result){
			closeDB($connection);
			return true;
		}else{
			$query = "DELETE FROM user_table WHERE userid='$userid'";
			$result = mysql_query($query);
			return false;
		}
	}else{
		return false;
		closeDB($connection);
	}
}

function registerHR($username, $password, $mci, $address, $email, $name, $mobileno, $gender, $recievenewsletter, $accounttype){
	$query = "INSERT INTO user_table(username, password, accounttype,status) VALUES('$username', '$password', '$accounttype', '0')";
	$connection = initDB();
	$result = mysql_query($query);
	$userid = mysql_insert_id();
	if($userid){
		$query = "INSERT INTO hr_master_profile_table(userid, name, positionofperson, gender, email, address, mobileno, recievenewsletter)
			VALUES('$userid', '$name', '$mci', '$gender', '$email', '$address', '$mobileno', '$recievenewsletter')";
		$result = mysql_query($query) or die(mysql_error());
		if($result){
			closeDB($connection);
			return true;
		}else{
			$query = "DELETE FROM user_table WHERE userid='$userid'";
			$result = mysql_query($query);
			return false;
		}
	}else{
		return false;
		closeDB($connection);
	}
}

?>