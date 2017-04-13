<?php

include('database.php');
try{
	$query = 'delete from movie WHERE id="'.$_GET["id"].'" ';
	$stmt = $db->query($query);
	echo 'Messenger().post("Your request has succeded !");';
	header ('location:/echange_sportive/index.php');
}catch(PDOException $ex){
	echo $ex->getMessage();
}
?>