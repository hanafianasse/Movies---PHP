<?php
  $connectedUser = unserialize($_SESSION["connectedUser"]);
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/echange_sportive/dashboard.php">IBM</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/echange_sportive/index.php">Movies<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $connectedUser->getLogin(); ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Disconnect</a></li>
            <li><a href="#">My Profile</a></li>
            <li><a href="#">Setings</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>