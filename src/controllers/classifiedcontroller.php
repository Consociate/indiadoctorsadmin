<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/classified.php';
include_once 'src/entities/forumcomment.php';

function addClassifiedPost($userid, $post, $status, $views, $dateofaddition, $postlabel,$imageurl){
    $connection = initDB();
    $query = "INSERT INTO id_classifieds_table(userid, post, status, views, dateofaddition, postlabel, imageurl)
        VALUES('$userid','$post','$status','$views','$dateofaddition','$postlabel','$imageurl')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveClassifiedPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_classifieds_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}


function showClassifiedPosts($tid= -1){
    $connection = initDB();
    $query = "SELECT imt.*, ut.username FROM id_classifieds_table imt, user_table ut WHERE imt.status='1' AND imt.userid=ut.userid";
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
        $ent->setImageurl($row['imageurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function searchClassifiedPosts($specialityid, $searchtext){
    $connection = initDB();
    $query = "SELECT * FROM id_classifieds_table WHERE status='1'";
    $query .=" AND specialityid='$specialityid' AND post LIKE('%$searchtext%')";
    $query .=" ORDER BY timeofaddition DESC";
    $data = array();
    $entry = 0;
    while($row = mysql_fetch_array($result)){
        $ent = new Classified();
        $ent->setCreatedby($row['username']);
        $ent->setDateofaddition($row['dateofaddition']);
        $ent->setPost($row['post']);
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

//CLASSIFIEDS COMMENT FUNCTIONS
function addClassifiedPostComment($userid, $postid, $comment, $dateofcomment, $status){
    $connection = initDB();
    $query = "INSERT INTO id_classifieds_comment_table(userid, postid, comment, dateofcomment, status)
        VALUES('$userid','$postid','$comment','$dateofcomment','$status')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveClassifiedPostComment($commentid, $status){
    $connection = initDB();
    $query = "UPDATE id_classifieds_comment_table SET status='$status'WHERE commentid='$commentid'";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showNumberOfClassifiedCommentsOfPosts($postid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_classifieds_comment_table WHERE postid='$postid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofcomments = 0;
    if($row['COUNT(*)']>0){
        $numofcomments = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofcomments;
}

function showClassifiedCommentsForPost($postid){
    $connection = initDB();
    $query = "SELECT ifct.*, ut.username FROM id_classifieds_comment_table ifct, user_table ut 
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