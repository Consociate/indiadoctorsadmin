<?php
include_once 'src/utility/dbutility.php';
include_once 'src/entities/survey.php';
include_once 'src/entities/surveyoptions.php';

//Survey Post
function addSurveyPost($userid, $status,  $views, $dateofaddition, $postlabel){
    $connection = initDB();
    $query = "INSERT INTO id_survey_table(userid, status,  views, dateofaddition, postlabel)
        VALUES('$userid','$status','$views','$dateofaddition','$postlabel')";
    $result = mysql_query($query);// or die(mysql_error());
    $result = mysql_insert_id();
    closeDB($connection);
    return $result;
}

function approveSurveyPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_survey_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}


function showSuvreyPosts($tid= -1){
    $connection = initDB();
    $query = "SELECT imt.*, ut.username FROM id_survey_table imt, user_table ut WHERE imt.status='1' AND imt.userid=ut.userid";
    if($tid != -1){
        $query .=" AND tid='$tid'";
    }
    $query .=" ORDER BY timeofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Survey();
        $ent->setCreatedby($row['username']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setTid($row['tid']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

//Survey Options
function addSurveyOptions($surveyid, $optionlabel){
	$connection = initDB();
	$query ="INSERT INTO id_survey_option_table(surveyid, optionlabel) VALUES('$surveyid','$optionlabel')";
	$result = mysql_query($query);
	closeDB($connection);
	return $result;
}

function showSurveyOptions($surveyid){
	$connection = initDB();
	$query = "SELECT * FROM id_survey_option_table WHERE surveyid='$surveyid'";
	$result = mysql_query($query);
	$data = array();
	$entry= 0;
	while($row = mysql_fetch_array($result)){
		$ent = new SurveyOptions();
		$ent->setSurveyid($row['surveyid']);
		$ent->setOptionlabel($row['optionlabel']);
		$ent->setOptionid($row['optionid']);
		$data[$entry] = $ent;
		$entry++;
	}
	closeDB($connection);
	return $data;
}


//SURVEY RESPONSE
function voteForSurvey($surveyid, $userid, $optionid){
	$connection = initDB();
	$query = "INSERT INTO id_survey_response_table (surveyid, userid, optionid) VALUES('$surveyid','$userid','$optionid')";
	$result = mysql_query($query);
	closeDB($connection);
	return $result;
}

function showTotalNoOfVotesForSurvey($surveyid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_survey_response_table WHERE surveyid='$surveyid'";
	$result = mysql_query($query);
	$row= mysql_fetch_array($result);
	$responsecount = 0;
	if($row['COUNT(*)']!= NULL){
		$responsecount = $row['COUNT(*)'];
	}	
	closeDB($connection);
	return $responsecount;
}

function showNoofVotesForSurveyOption($surveyid, $optionid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_survey_response_table WHERE surveyid='$surveyid' AND optionid='$optionid'";
	$result = mysql_query($query);
	$row= mysql_fetch_array($result);
	$responsecount = 0;
	if($row['COUNT(*)']!= NULL){
		$responsecount = $row['COUNT(*)'];
	}	
	closeDB($connection);
	return $responsecount;
}

function checkIfUserhasVotedForThisSurvey($userid, $surveyid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_survey_response_table WHERE surveyid='$surveyid' AND userid='$userid'";
	$result = mysql_query($query);
	$row= mysql_fetch_array($result);
	$responsecount = 0;
	if($row['COUNT(*)']!= NULL){
		$responsecount = $row['COUNT(*)'];
	}	
	closeDB($connection);
	return $responsecount;
}