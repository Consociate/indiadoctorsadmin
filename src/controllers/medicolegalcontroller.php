<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/medicolegal.php';
include_once 'src/entities/forumcomment.php';

function addMedicoLegalPost($userid, $post, $status,  $views, $dateofaddition, $postlabel){
    $connection = initDB();
    $query = "INSERT INTO id_medicolegal_table(userid, post, status,  views, dateofaddition, postlabel)
        VALUES('$userid','$post','$status','$views','$dateofaddition','$postlabel')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveMedicoLegalPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_medicolegal_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}


function showMedicoLegalPosts($tid= -1){
    $connection = initDB();
    $query = "SELECT imt.*, ut.username FROM id_medicolegal_table imt, user_table ut WHERE imt.status='1' AND imt.userid=ut.userid";
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
        $ent->setSpecialityid($row['specialityid']);
        $ent->setSpecialitylabel($row['specialitylabel']);
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

function showCountOfMedicoLegalPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_medicolegal_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

function searchMedicoLegalPosts($specialityid, $searchtext){
    $connection = initDB();
    $query = "SELECT * FROM id_medicolegal_table WHERE status='1'";
    $query .=" AND specialityid='$specialityid' AND post LIKE('%$searchtext%')";
    $query .=" ORDER BY timeofaddition DESC";
    $data = array();
    $entry = 0;
    while($row = mysql_fetch_array($result)){
        $ent = new MedicoLegal();
        $ent->setCreatedby($row['username']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
        $ent->setSpecialityid($row['specialityid']);
        $ent->setSpecialitylabel($row['specialitylabel']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setViews($row['views']);
        $ent->setTid($row['tid']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

//MEDICOLEGAL COMMENT FUNCTIONS
function addMedicoLegalPostComment($userid, $postid, $comment, $dateofcomment, $status){
    $connection = initDB();
    $query = "INSERT INTO id_medicolegal_comment_table(userid, postid, comment, dateofcomment, status)
        VALUES('$userid','$postid','$comment','$dateofcomment','$status')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveMedicoLegalPostComment($commentid, $status){
    $connection = initDB();
    $query = "UPDATE id_medicolegal_comment_table SET status='$status'WHERE commentid='$commentid'";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showNumberOfMedicoLegalCommentsOfPosts($postid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_medicolegal_comment_table WHERE postid='$postid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofcomments = 0;
    if($row['COUNT(*)']>0){
        $numofcomments = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofcomments;
}

function showMedicoLegalCommentsForPost($postid){
    $connection = initDB();
    $query = "SELECT ifct.*, ut.username FROM id_medicolegal_comment_table ifct, user_table ut 
    	WHERE postid='$postid' AND ifct.userid=ut.userid AND ifct.status='1'";
    $result = mysql_query($query);
    $data = array();
    $entry = 0;
    while($row = mysql_fetch_array($result)){
        $ent = new ForumComment();
        $ent->setComment($row['comment']);
        $ent->setCommentid($row['commentid']);
        $ent->setDateofcomment($row['dateofcomment']);
        $ent->setPostid($row['postid']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setCreatedBy($row['username']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}
?>