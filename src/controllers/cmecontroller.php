<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/cme.php';

function addCoursesPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel){
    $connection = initDB();
    $query = "INSERT INTO id_courses_table(userid, post, status, specialityid,  views, dateofaddition, postlabel)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function addConferencesPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel){
    $connection = initDB();
    $query = "INSERT INTO id_conferences_table(userid, post, status, specialityid,  views, dateofaddition, postlabel)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveCoursesPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_courses_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approveConferencesPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_conferences_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}


function showCoursesPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_courses_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new CME();
        $ent->setApprovedby($row['approvedby']);
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

function showConferencesPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_conferences_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new CME();
        $ent->setApprovedby($row['approvedby']);
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

function showCountOfCoursesPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_courses_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

function showCountOfConferencesPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_conferences_table WHERE specialityid='$specialityid' AND status='1'";
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