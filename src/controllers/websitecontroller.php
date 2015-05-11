<?php
	include_once 'src/utility/dbutility.php';
	include_once 'src/entities/team.php';
	
	function addTeamMember($name, $text, $orderonwebsite, $imageurl){
		$connection = initDB();
		$query = "INSERT INTO team_table(name, description, status, orderonwebsite, imageurl) VALUES('$name', '$text', '1', '$orderonwebsite', '$imageurl')";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function showTeamMembers(){
		$connection = initDB();
		$query = "SELECT * FROM team_table WHERE status='1' ORDER BY orderonwebsite ASC";
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new Team();
			$ent->setDescription($row['description']);
			$ent->setName($row['name']);
			$ent->setOrderonwebsite($row['orderonwebsite']);
			$ent->setStatus($row['status']);
			$ent->setMemberid($row['memberid']);
			$data[$entry] = $ent;
			$entry++;
		}
		closeDB($connection);
		return $data;
	}
	
	function updateTeamMembers($memberid, $name, $description, $orderonwebsite){
		$connection = initDB();
		$query = "UPDATE team_table SET name='$name', description='$description',  orderonwebsite='$orderonwebsite' WHERE memberid='$memberid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function updateStatusOfMember($memberid, $status){
		$connection = initDB();
		$query = "UPDATE team_table SET status='$status' WHERE memberid='$memberid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
?>