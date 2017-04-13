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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>New movie</title>
</head>
<body>
<?php 
	include("navBar.php");
?>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form class="form-horizontal" method="post" action="doAdd.php">
					<div class="form-group">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
						<input name="name" type="text" class="form-control" placeholder="name" requered>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">rating</label>
						<div class="col-sm-10">
						<input name="rating" type="number" class="form-control" placeholder="rating" min="0" max="10" requered>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">date</label>
						<div class="col-sm-10">
						<input name="date" type="date" class="form-control" requered>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-info">Add</button>
							<a class="btn btn-warning pull-right" href="/echange_sportive/index.php">Cancel</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>