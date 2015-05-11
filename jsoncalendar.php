<?php
//title: 'All Day Event',
			//		start: new Date(y, m, 1)
include_once 'authenticationscript.php';			
include_once 'src/controllers/profilecontroller.php';
$todolist = getUserToDoList($_SESSION['uid']);
$index = 1;
$hson = "[";
foreach($todolist as $todo){
	if($index == 1){
		$hson .= '{
			"id": '.$todo->getTid().',
			"title": "'.$todo->getTasklabel().'",
			"start": "'.$todo->getFromdate().'",
			"end": "'.$todo->getTilldate().'",
			"url": "todolist.php"
		}';
	}else{
		$hson .= ', {
			"id": '.$todo->getTid().',
			"title": "'.$todo->getTasklabel().'",
			"start": "'.$todo->getFromdate().'",
			"end": "'.$todo->getTilldate().'",
			"url": "todolist.php"
		}';
	}
	$index++;
}
$hson  .= "]";


//$hson = '[{"id":111,"title":"Event1","start":"2013-05-10","url":"http:\/\/yahoo.com\/"},{"id":222,"title":"Event2","start":"2013-05-20","end":"2013-05-22","url":"http:\/\/yahoo.com\/"}]';
echo $hson;

?>