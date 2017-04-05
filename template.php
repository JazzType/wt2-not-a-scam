<?php
session_start();
  $status = "Not logged in";
  $visibility = "none";
  if(isset($_SESSION['userid'])) {
    $status = "Logged in as ".$_SESSION['userid'];
    $visibility = "block";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Not-A-Scam.gg</title>
  </head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Not-A-Scam.gg</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a href="Games.html" class="dropdown-toggle">Games</a>
            <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">RPG</a></li>
            </ul>
          </li>
          <li><a href="#">Deals</a></li>
          <li class="dropdown">
            <a href="abc.html" class="dropdown-toggle">Consoles</a>
            <ul class="dropdown-menu">
            <li><a href="#">PC</a></li>
            <li><a href="#">PS4</a></li>
            <li><a href="#">XBOX</a></li>
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login_page.php"><span class="glyphicon glyphicon-user"></span> <?php echo $status?></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          <li style="display: <?php echo $visibility;?>;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
