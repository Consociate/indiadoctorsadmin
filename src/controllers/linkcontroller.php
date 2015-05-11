<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/medicolegal.php';
include_once 'src/entities/forumcomment.php';

function addLinks($userid, $post, $status,  $views, $dateofaddition, $postlabel, $linkpath, $docpath){
    $connection = initDB();
    $query = "INSERT INTO id_link_table (userid, post, status,  views, dateofaddition, postlabel, linkpath, pathurl)
        VALUES('$userid','$post','$status','$views','$dateofaddition','$postlabel', '$linkpath', '$docpath')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveLinks($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_link_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}


function showLinks($tid= -1){
    $connection = initDB();
    $query = "SELECT imt.*, ut.username FROM id_link_table imt, user_table ut WHERE imt.status='1' AND imt.userid=ut.userid";
    if($tid != -1){
        $query .=" AND tid='$tid'";
    }
    $query .=" ORDER BY timeofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new MedicoLegal();
        $ent->setCreatedby($row['username']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
   //     $ent->setSpecialityid($row['specialityid']);
     //   $ent->setSpecialitylabel($row['specialitylabel']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setTid($row['tid']);
        $ent->setPathurl($row['linkpath']);
        $ent->setDocpath($row['pathurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}


?>