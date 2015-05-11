<?php

function initDB(){
//$connection = mysql_connect("db452520781.db.1and1.com:3306","dbo452520781","dodgeviper");
	$connection = mysql_connect("localhost:3306","root","dodgeviper");
// $connection = mysql_connect("indiadoctors.db.10892322.hostedresource.com:3306","indiadoctors","India@123");
 $db = mysql_select_db("indiadoctors",$connection);
//$connection = mysql_connect("localhost:3306","root","dodgeviper");
//$db = mysql_select_db("indiadoctors",$connection);
 //$connection = mysql_connect("localhost:3306","root","dodgeviper");
        //or die ("Error while connecting to host");
   // $db = mysql_select_db("dav",$connection);

        //or die ("Error while connecting to database");
    return $connection;
}

/*
DB Closing method.
Pass the connection variable
obtained through initDB().
*/
function closeDB($connection){
    mysql_close($connection);
}
?>