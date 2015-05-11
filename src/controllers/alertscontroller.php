<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/classified.php';
include_once 'src/entities/forumcomment.php';

function addAlertPost($userid, $post, $status, $views, $dateofaddition, $postlabel,$imageurl){
    $connection = initDB();
    $query = "INSERT INTO id_alert_table(userid, post, status, views, dateofaddition, postlabel, pathurl)
        VALUES('$userid','$post','$status','$views','$dateofaddition','$postlabel','$imageurl')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveAlertPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_alert_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}


function showAlertsPosts($tid= -1){
    $connection = initDB();
    $query = "SELECT imt.*, ut.username FROM id_alert_table imt, user_table ut WHERE imt.status='1' AND imt.userid=ut.userid";
    if($tid != -1){
        $query .=" AND tid='$tid'";
    }
    $query .=" ORDER BY timeofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Classified();
        $ent->setCreatedby($row['username']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setTid($row['tid']);
        $ent->setImageurl($row['pathurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

?>