<?php
	session_start();
	include('User.php');
	if(!isset($_SESSION["connectedUser"])){
		$connectedUser = new User("anasse","ans","Live1994",["ADM"]);
		$_SESSION["connectedUser"] = serialize($connectedUser);
	}
?>
<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/messenger.css">
	<link rel="stylesheet" type="text/css" href="css/messenger-theme-future.css">
	<title>IBM</title>
</head>
<body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/messenger.js"></script>
<script src="js/messenger-theme-future.js"></script>

<?php 
	include('navBar.php');
	include('database.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php include('list.php');?>
		</div>
	</div>
</div>
</body>
</html>



