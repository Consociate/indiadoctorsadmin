<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/forumpost.php';
include_once 'src/entities/forumcomment.php';

function addForumPost($userid, $post, $status, $dateofaddition, $specialityid, $views, $postlabel, $imageurl){
    $connection = initDB();
    $query ="INSERT INTO id_forum_post_table (userid, post, status, dateofaddition, specialityid, views, postlabel, imageurl)
        VALUES('$userid','$post','$status','$dateofaddition','$specialityid','$views','$postlabel','$imageurl')";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approveForumPost($postid, $status, $approverid){
    $connection = initDB();
    $query ="UPDATE id_forum_post_table SET status='$status', approverid='$approverid' WHERE tid='$postid'";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showForumPosts($specialityid, $tid=-1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_forum_post_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
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
        $ent->setSpecialityid($row['specialityid']);
        $ent->setStatus($row['status']);
        $ent->setUserid($row['userid']);
        $ent->setViews($row['views']);
        $ent->setPostlabel($row['postlabel']);
        $ent->setCreateby($row['username']);
        $ent->setImageurl($row['imageurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showNumberOfForumPostsPerSpeciality($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*), specialityid FROM id_forum_post_table WHERE status='1' AND specialityid='$specialityid' GROUP BY specialityid";
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
    $query = "SELECT COUNT(*) FROM id_forum_post_table WHERE status='$status' ORDER BY dateofaddition DESC";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}
//FORUM COMMENT FUNCTIONS
function addForumPostComment($userid, $postid, $comment, $dateofcomment, $status){
    $connection = initDB();
    $query = "INSERT INTO id_forum_comment_table(userid, postid, comment, dateofcomment, status)
        VALUES('$userid','$postid','$comment','$dateofcomment','$status')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveForumPostComment($commentid, $status){
    $connection = initDB();
    $query = "UPDATE id_forum_comment_table SET status='$status'WHERE commentid='$commentid'";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showNumberOfForumCommentsOfPosts($postid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_forum_comment_table WHERE postid='$postid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofcomments = 0;
    if($row['COUNT(*)']>0){
        $numofcomments = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofcomments;
}

function showForumCommentsForPost($postid){
    $connection = initDB();
    $query = "SELECT ifct.*, ut.username FROM id_forum_comment_table ifct, user_table ut 
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
