<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'src/utility/dbutility.php';
include_once 'src/entities/library.php';
//EBOOKS SECTION
function addEbooksPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $pathurl){
    $connection = initDB();
    $query = "INSERT INTO id_ebooks_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, pathurl)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel', '$pathurl')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveEbooksPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_ebooks_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showEbooksPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_ebooks_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Library();
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
        $ent->setPathurl($row['pathurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showCountOfEbooksPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_ebooks_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

//IMAGES SECTION
function addImagesPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $pathurl){
    $connection = initDB();
    $query = "INSERT INTO id_images_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, pathurl)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel', '$pathurl')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function approveImagesPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_images_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showImagesPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_images_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Library();
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
        $ent->setPathurl($row['pathurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showCountOfImagesPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_images_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

//GUIDELINES SECTION
function addGuidelinesNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $filename){
    $connection = initDB();
    $query = "INSERT INTO id_guidelinesnational_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, pathurl)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel', '$filename')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function addGuidelinesInterNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $filename){
    $connection = initDB();
    $query = "INSERT INTO id_guidelinesinternational_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, pathurl)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel', '$filename')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}


function approveGuidelinesNationalPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_guidelinesnational_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approveGuidelinesInterNationalPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_guidelinesinternational_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showGuidelinesNationalPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_guidelinesnational_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Library();
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
        $ent->setPathurl($row['pathurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showGuidelinesInterNationalPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_guidelinesinternational_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Library();
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
        $ent->setPathurl($row['pathurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showCountOfGuidelinesNationalPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_guidelinesnational_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

function showCountOfGuidelinesInterNationalPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_guidelinesinternational_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

//JOURNAL SECTION
function addJournalNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $imageurl){
    $connection = initDB();
    $query = "INSERT INTO id_journalnational_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, imageurl)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel','$imageurl')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}

function addJournalInterNationalPost($userid, $post, $status, $dateofaddition, $sid, $views, $postlabel, $imageurl){
    $connection = initDB();
    $query = "INSERT INTO id_journalinternational_table(userid, post, status, specialityid,  views, dateofaddition, postlabel, imageurl)
        VALUES('$userid','$post','$status','$sid','$views','$dateofaddition','$postlabel','$imageurl')";
    $result = mysql_query($query);// or die(mysql_error());
    closeDB($connection);
    return $result;
}


function approveJournalNationalPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_journalnational_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function approveJournalInterNationalPosts($tid, $status, $approverid){
    $connection = initDB();
    $query = "UPDATE id_journalinternational_table SET status='$status', approverid='$approverid' WHERE tid='$tid' ";
    $result = mysql_query($query);
    closeDB($connection);
    return $result;
}

function showJournalNationalPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_journalnational_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Library();
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
        $ent->setPathurl($row['imageurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showJournalInterNationalPosts($specialityid, $tid= -1){
    $connection = initDB();
    $query = "SELECT ifpt.*, ut.username FROM id_journalinternational_table ifpt, user_table ut 
    	WHERE ifpt.status='1' AND ifpt.userid=ut.userid AND specialityid='$specialityid'";
    if($tid!= -1){
        $query .=" AND ifpt.tid='$tid'";
    }
    $query .= " ORDER BY dateofaddition DESC";
    $data = array();
    $entry = 0;
    $result = mysql_query($query);
    while($row = mysql_fetch_array($result)){
        $ent = new Library();
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
        $ent->setPathurl($row['imageurl']);
        $data[$entry] = $ent;
        $entry++;
    }
    closeDB($connection);
    return $data;
}

function showCountOfJournalNationalPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_journalnational_table WHERE specialityid='$specialityid' AND status='1'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $numofrows = 0;
    if($row['COUNT(*)']>0){
        $numofrows = $row['COUNT(*)'];
    }
    closeDB($connection);
    return $numofrows;
}

function showCountOfJournalInterNationalPosts($specialityid){
    $connection = initDB();
    $query = "SELECT COUNT(*) FROM id_journalinternational_table WHERE specialityid='$specialityid' AND status='1'";
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