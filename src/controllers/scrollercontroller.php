<?php
include_once 'src/utility/dbutility.php';

function getLatestUpdatesOnIndiaDoctors(){
	$data = array();
	$date = date('Y-m-d');
	$data = getUpdates('id_conferences_table', $data, $date, 'conferencepost.php', true);
	$data = getUpdates('id_classifieds_table', $data, $date,'classifiedpost.php', false);
	//$data = getUpdates('id_dmexam_table', $data, $date, 'dmpost.php', true);
	//$data = getUpdates('id_ebooks_table', $data, $date,'ebookpost.php', true);
	//$data = getUpdates('id_forum_post_table', $data, $date,'forumpost.php', true);
	//$data = getUpdates('id_images_table', $data, $date,'imagespost.php', true);
	$data = getUpdates('id_internationalnews_table', $data, $date,'internationalnewspost.php', false);
	//$data = getUpdates('id_mdexam_table', $data, $date,'mdpost.php', true);
	//$data = getUpdates('id_medicolegal_table', $data, $date,'medicolegalpost.php', false);
	$data = getUpdates('id_nationalnews_table', $data, $date,'nationalnewspost.php', false);
	$data = getUpdates('id_job_table', $data, $date,'jobpost.php', false);
	return $data;
}

function getLatestUpdatesOnIndiaDoctors1(){
	$data = array();
	$date = date('Y-m-d');
	$data = getUpdates('id_dmexam_table', $data, $date, 'dmpost.php', true);
	$data = getUpdates('id_ebooks_table', $data, $date,'ebookpost.php', true);
	$data = getUpdates('id_forum_post_table', $data, $date,'forumpost.php', true);
	$data = getUpdates('id_images_table', $data, $date,'imagespost.php', true);
	$data = getUpdates('id_mdexam_table', $data, $date,'mdpost.php', true);
	$data = getUpdates('id_quiz_table', $data, $date,'quizpost.php', true);
	$data = getUpdates('id_journalnational_table', $data, $date,'journalposts.php?type=1', true);
	$data = getUpdates('id_journalinternational_table', $data, $date,'journalposts.php?type=2', true);
	$data = getUpdates('id_medicolegal_table', $data, $date,'medicolegalpost.php', false);
	return $data;
}

function getUpdates($tablename, $data, $date, $script, $hasspec){
	$connection = initDB();
	$fromdate = date('Y-m-d', strtotime('-30 days'));
	$query = "SELECT * FROM $tablename WHERE status='1' AND dateofaddition>='$fromdate' AND dateofaddition<='$date' ORDER BY dateofaddition DESC LIMIT 0, 3";
	$result = mysql_query($query);
	$entry = count($data);
	while($row = mysql_fetch_array($result)){
		if($hasspec){
			$sscript ='?sid='.$row['specialityid'].'&';
			if(stripos($script, "?")){
				$sscript ='&sid='.$row['specialityid'].'&';
			}
		}else{
			$sscript ="?";
		}
		$title = $row['postlabel'];
		if(strlen($title)> 50){
			$title = substr($title, 0, 40).'...';
		}
		$data[$entry] = '<a href="'.$script.$sscript.'tid='.$row['tid'].'">'.$title.'</a><hr />';
		$entry++;
	}
	closeDB($connection);
	return $data;
}

?>
