<?php
	include_once 'src/utility/dbutility.php';
	include_once 'src/entities/speciality.php';
	
	
	//SPECIALITIES
	function getSpecialityMasterList($specialityid = -1){
		$connection = initDB();
		$query = "SELECT * FROM specialization_master_table WHERE sstatus=1 ORDER by specializationlabel ASC";
		if($specialityid != -1){
			$query = "SELECT * FROM specialization_master_table WHERE specializationid='$specialityid'";
		}
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new Speciality();
			$ent->setSpecialityid($row['specializationid']);
			$ent->setSpecialitylabel($row['specializationlabel']);
			$data[$entry] = $ent;
			$entry++;		
		}
		closeDB($connection);	
		return $data;
	}
	
	function getSpecialityMasterListForAdmin($specialityid = -1){
		$connection = initDB();
		$query = "SELECT * FROM specialization_master_table ORDER by specializationlabel ASC";
		if($specialityid != -1){
			$query = "SELECT * FROM specialization_master_table WHERE specializationid='$specialityid'";
		}
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new Speciality();
			$ent->setSpecialityid($row['specializationid']);
			$ent->setSpecialitylabel($row['specializationlabel']);
			$ent->setStatus($row['sstatus']);
			$data[$entry] = $ent;
			$entry++;		
		}
		closeDB($connection);	
		return $data;
	}
	
	function addSpeciality($specialitylabel){
		$connection = initDB();
		$query = "INSERT INTO specialization_master_table (specializationlabel, sstatus) VALUES('$specialitylabel', '1')";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function updateSpecialityStatus($specialityid, $status){
		$connection = initDB();
		$query = "UPDATE specialization_master_table SET sstatus='$status' WHERE specializationid='$specialityid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function updateSpecialityLabel($specialityid, $specialitylabel){
		$connection = initDB();
		$query = "UPDATE specialization_master_table SET specializationlabel='$specialitylabel' WHERE specializationid='$specialityid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}

	
	//COLLEGES AND UNIVERSITIES
	function getCollegeMasterList($collegeid = -1){
		$connection = initDB();
		$query = "SELECT * FROM college_master_table WHERE cstatus=1 ORDER by collegelabel ASC";
		if($collegeid != -1){
			$query = "SELECT * FROM college_master_table WHERE collegeid='$collegeid'";
		}
		$result = mysql_query($query);
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new Speciality();
			$ent->setSpecialityid($row['collegeid']);
			$ent->setSpecialitylabel($row['collegelabel']);
			$data[$entry] = $ent;
			$entry++;		
		}
		closeDB($connection);	
		return $data;
	}
	
	function getCollegeMasterListForAdmin($collegeid = -1){
		$connection = initDB();
		$query = "SELECT * FROM college_master_table ORDER by collegelabel ASC";
		if($collegeid != -1){
			$query = "SELECT * FROM college_master_table WHERE collegeid='$collegeid'";
		}
		$result = mysql_query($query); 
		$data = array();
		$entry = 0;
		while($row = mysql_fetch_array($result)){
			$ent = new Speciality();
			$ent->setSpecialityid($row['collegeid']);
			$ent->setSpecialitylabel($row['collegelabel']);
			$ent->setStatus($row['cstatus']);
			$data[$entry] = $ent;
			$entry++;		
		}
		closeDB($connection);	
		return $data;
	}
	
	function addCollege($collegelabel){
		$connection = initDB();
		$query = "INSERT INTO college_master_table (collegelabel, cstatus) VALUES('$collegelabel', '1')";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function updateCollegeStatus($collegeid, $status){
		$connection = initDB();
		$query = "UPDATE college_master_table SET cstatus='$status' WHERE collegeid='$collegeid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
	
	function updateCollegeLabel($collegeid, $collegelabel){
		$connection = initDB();
		$query = "UPDATE college_master_table SET collegelabel='$collegelabel' WHERE collegeid='$collegeid'";
		$result = mysql_query($query);
		closeDB($connection);
		return $result;
	}
?>