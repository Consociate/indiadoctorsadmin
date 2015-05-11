<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/exam.php';

function addQuizPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $option1, $option2, $option3, $option4, $correctanswer, $explanation){
    $connection = initDB();
    $query = "INSERT INTO id_quiz_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, option1, option2, option3, option4, correctanswer, explanation)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel', '$option1', '$option2', '$option3', '$option4', '$correctanswer', '$explanation')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}


function addMDPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel){
    $connection = initDB();
    $query = "INSERT INTO id_mdexam_table(userid, post, status, specialityid,  views, dateofaddition, postlabel)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function addDMPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel){
    $connection = initDB();
    $query = "INSERT INTO id_dmexam_table(userid, post, status, specialityid,  views, dateofaddition, postlabel)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveMDPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_mdexam_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approveQuizPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_quiz_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approveDMPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_dmexam_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showQuizPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_quiz_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Exam();
        $ent->setApprovedby($row['approverid']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
        $ent->setPostid($row['tid']);
        $ent->setSpecialityid($row['specialityid']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setCreateby($row['username']);
        $ent->setOption1($row['option1']);
        $ent->setOption2($row['option2']);
        $ent->setOption3($row['option3']);
        $ent->setOption4($row['option4']);
        $ent->setCorrectanswer($row['correctanswer']);
        $ent->setExplanation($row['explanation']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showMDExamPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_mdexam_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Exam();
        $ent->setApprovedby($row['approverid']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
        $ent->setPostid($row['tid']);
        $ent->setSpecialityid($row['specialityid']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setCreateby($row['username']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showDMExamPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_dmexam_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Exam();
        $ent->setApprovedby($row['approverid']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
        $ent->setPostid($row['tid']);
        $ent->setSpecialityid($row['specialityid']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setCreateby($row['username']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showCountOfQuizPosts($specialityid){
	$connection = initDB();
    $query = "SELECT COUNT(*) FROM id_quiz_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

function showCountOfMDExamPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_mdexam_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

function showCountOfDMExamPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_dmexam_table WHERE specialityid='$specialityid' AND status='1'";
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