<?php

	include("database.php");
	try{
		$query = 'insert into movie (name, rating, date) VALUES ("'.$_POST["name"].'","'.$_POST["rating"].'","'.$_POST["date"].'")';
		echo $query." </br>";
		
		$db->query($query);
		header ('location:/echange_sportive/index.php');
	}catch(PDOException $ex){
		echo $ex->getMessage();
	}
?>