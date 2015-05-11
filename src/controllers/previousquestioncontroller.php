<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/forumpost.php';
include_once 'src/entities/forumcomment.php';

function addPreviousQuestionPost($userid, $post, $status, $dateofaddition, $collegeid, $views, $postlabel, $fileurl){
    $connection = initDB();
    $query ="INSERT INTO id_previousquestions_table (userid, post, status, dateofaddition, collegeid, views, postlabel, fileurl)
        VALUES('$userid','$post','$status','$dateofaddition','$collegeid','$views','$postlabel','$fileurl')";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approvePreviousQuestionPost($postid, $status, $approverid){
    $connection = initDB();
    $query ="UPDATE id_previousquestions_table SET status='$status', approverid='$approverid' WHERE tid='$postid'";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showPreviousQuestionPosts($collegeid, $tid=-1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_previousquestions_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND collegeid='$collegeid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new ForumPost();
        $ent->setApprovedby($row['approvedby']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
        $ent->setPostid($row['tid']);
        $ent->setSpecialityid($row['collegeid']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setCreateby($row['username']);
        $ent->setImageurl($row['fileurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showNumberOfPreviousQuestionPerCollege($collegeid){
    $connection = initDB();
    $query = "SELECT COUNT(*), collegeid FROM id_previousquestions_table WHERE status='1' AND collegeid='$collegeid' GROUP BY collegeid";
    $result = mysql_query($query);
    $numofposts = 0;
    $row = mysql_fetch_array($result);
    if($row['COUNT(*)'] != NULL){
    	$numofposts = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofposts;
}

function showCountOfUnApprovedPosts($status){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_previousquestions_table WHERE status='$status' ORDER BY dateofaddition DESC";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

?>
