<?php

$dbname = "ibm";
$user = "root";
$password = "";

$db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8mb4',''.$user.'', ''.$password.'');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>