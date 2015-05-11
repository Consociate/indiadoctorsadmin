<?php
	include_once 'src/utility/dbutility.php';
	include_once 'src/globalvars.php';
	function checkUniqueEmail($at, $email){
		$connection = initDB();
		switch($at){
			case USER_DOCTOR:
				$query = "SELECT * FROM doctor_master_profile_table WHERE email='$email'";
				break;
			case USER_STUDENT:
				$query = "SELECT * FROM student_master_profile_table WHERE email='$email'";
				break;
			case USER_HR:
				$query = "SELECT * FROM hr_master_profile_table WHERE email='$email'";
				break;
		}
		$result = mysql_query($query);
		$numofrows = mysql_num_rows($result);
		closeDB($connection);
		return $numofrows;
	}
?>