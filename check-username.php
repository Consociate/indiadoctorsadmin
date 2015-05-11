<?php
	include_once 'src/utility/dbutility.php';
	function checkUniqueUsername($username){
		$connection = initDB();
		$query = "SELECT * FROM user_table WHERE username='$username'";
		$result = mysql_query($query);
		$numofrows = mysql_num_rows($result);
		closeDB($connection);
		return $numofrows;
	}
	
?>