<?php
include_once 'authenticationscript.php';

$uid = $_GET['uid'];
$st = $_GET['st'];

include_once 'src/controllers/logincontroller.php';
updateAccountStatus($uid, $st);
header('Location: userlist.php');
?>