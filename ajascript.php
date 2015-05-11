<?php
include_once 'src/controllers/profilecontroller.php';
$searchquery = $_GET['query'];

$data = fetchSearchSuggestions($searchquery);
//echo $data;
$hint = "[";
$entry = 0;
foreach ($data as $ent){
	$entry ++;
//	if($entry ==1){
//		$hint .= '{ label:"'.$ent->getUserid().'", value:"'.$ent->getName().'"}';
//	}else{
//		$hint .= ', { label:"'.$ent->getUserid().'", value:"'.$ent->getName().'"}';
//	}
	
if($entry ==1){
		$hint .= '"'.$ent->getName().'"';
	}else{
		$hint .= ', "'.$ent->getName().'"';
	}
}
$hint .= "]";
echo $hint;
?>