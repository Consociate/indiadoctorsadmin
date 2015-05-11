<?php
include_once 'src/utility/dbutility.php';

function showNumberOfForumPostsByYou($userid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_forum_post_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$numofrows = 0;
	if($row['COUNT(*)']!= NULL){
		$numofrows = $row['COUNT(*)'];
	}
	closeDB($connection);
	return $numofrows;
}

function showNumberOfForumCommentsByYou($userid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_forum_comment_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$numofrows = 0;
	if($row['COUNT(*)']!= NULL){
		$numofrows = $row['COUNT(*)'];
	}
	closeDB($connection);
	return $numofrows;
}

function showNumberOfExamQuestionsByYou($userid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_previousquestions_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$numofrows = 0;
	if($row['COUNT(*)']!= NULL){
		$numofrows = $row['COUNT(*)'];
	}
	closeDB($connection);
	return $numofrows;
}

function showNumberOfLibraryPostsByYou($userid){
	$connection = initDB();
	$query = "SELECT COUNT(*) FROM id_ebooks_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$numofrows = 0;
	if($row['COUNT(*)']!= NULL){
		$numofrows = $row['COUNT(*)'];
	}
	$query = "SELECT COUNT(*) FROM id_images_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['COUNT(*)']!= NULL){
		$numofrows += $row['COUNT(*)'];
	}
$query = "SELECT COUNT(*) FROM id_guidelinesnational_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['COUNT(*)']!= NULL){
		$numofrows += $row['COUNT(*)'];
	}
$query = "SELECT COUNT(*) FROM id_guidelinesinternational_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['COUNT(*)']!= NULL){
		$numofrows += $row['COUNT(*)'];
	}
$query = "SELECT COUNT(*) FROM id_journalnational_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['COUNT(*)']!= NULL){
		$numofrows += $row['COUNT(*)'];
	}
$query = "SELECT COUNT(*) FROM id_journalinternational_table WHERE userid='$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['COUNT(*)']!= NULL){
		$numofrows += $row['COUNT(*)'];
	}
	closeDB($connection);
	return $numofrows;
}
?>