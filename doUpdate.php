<?php

include('database.php');
try{
	$query = 'update movie set name="'.$_POST["name"].'" ,rating="'.$_POST["rating"].'",date="'.$_POST["date"].'" WHERE id="'.$_POST["id"].'" ';
	$stmt = $db->query($query);
	header ('location:/echange_sportive/index.php?updated=true');
}catch(PDOException $ex){
	echo $ex->getMessage();
}
?>