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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="suggest.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    .dropdown-menu {
        display: none;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    body {
          background-color: #f2f2f2;
    }

    
  </style>
</head>
<body>
  <!-- NAVBAR -->
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
          <li id="home"><a href="index.php">Home</a></li>
          <li id="games" class="dropdown">
            <a href="genre.php?genre=All" class="dropdown-toggle">Games</a>
            <ul class="dropdown-menu">
              <li><a href="genre.php?genre=Action">Action</a></li>
              <li><a href="genre.php?genre=Adventure">Adventure</a></li>
              <li><a href="genre.php?genre=RPG">RPG</a></li>
            </ul>
          </li>
          <li id="Deals"><a href="#">Deals</a></li>
          <li id="Consoles" class="dropdown">
            <a href="abc.html" class="dropdown-toggle">Consoles</a>
            <ul class="dropdown-menu">
            <li><a href="#">PC</a></li>
            <li><a href="#">PS4</a></li>
            <li><a href="#">XBOX</a></li>
            </ul>
          </li>
          <li id="team"><a href="team.php">Team</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login_page.php"><span class="glyphicon glyphicon-user"></span> <?php echo $status?></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          <li style="display: <?php echo $visibility;?>;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
        <ul>
        <li>
          <div class="col-sm-3 col-md-3">          	
          	<div class="input-group">
              	<input type="text" class="form-control" placeholder="Search" name="q" id="search" list="datalist-search" onkeyup="fetchgame()">
              	<datalist id="datalist-search">                 
                </datalist>
                <div id="gameid" style="display: none;">-1</div>
              	<div class="input-group-btn">
              	    <button class="btn btn-default" onclick="navigateToApp()"><i class="glyphicon glyphicon-search"></i></button>
             	 	</div>
          	</div>          	
      	 </div>
        </ul>
      </div>
    </div>
  </nav>
</body>
