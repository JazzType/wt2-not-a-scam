<?php
	$game_id = $_GET['appid'];
	$json = 'games/'.$game_id.".json";
	$game_data = file_get_contents($json,true);
	$game_data = json_decode($game_data);
	$images = explode(";",$game_data->screenshots);
	$images_count = count($images);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $game_data->name ?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 	<script src="bootstrap/js/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		
  	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class = "jumbotron">
	<div class = "container text-center">
		<?php
		echo "<img id = \"gameheader\" src=\"$game_data->header\" style = \"width:100\%; height: 100\%\" />";
		?>
	</div>
</div>
<div class = "container">
	<div class = "row">
		<div class = "col-sm-8">
		<?php
		echo "<h1 id = \"gamename\" class = \"text-center\">$game_data->title<small>	$game_data->platforms </small></h1>";
		?>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style=" width: 640px; height:360px">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		       	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <?php
		        	for($i = 1; $i < $images_count; $i++)
		        	{
		        		echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
		        	}
		        ?>
		        </ol>

		        <!-- Wrapper for slides -->
		        <div class="carousel-inner" role="listbox">
		          <div class="item active">
		          <?php
		           echo '<img src="'.$images[0].'"  style="width: 640px; height:360px !important;">';
		        	?>
		        	</div>
		        	<?php
		        		for($i = 1; $i < $images_count; $i++)
		        		{
		        			echo'<div class="item"><img src="'.$images[$i].'" alt="'.$images[$i].'" style="width: 640px; height:360px !important;"></div>';

		        		}
		        	?>
 		        </div>

		        <!-- Left and right controls -->
		        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		      </div>
			<p id = "gamedesc"><br/>
			<?php
				echo $game_data->description;
			?>
			</p>
		</div>	
		<div class = "col-sm-4">
			<div class = "container">
			<label> Reviews </label><br/>
				 <div class="panel panel-primary col-sm-2">
			        <div class="panel-body">
			       		<?php
			        	echo "<div><div class = \"badge\" id = \"metascore\" style = \"font-size:20px;\">$game_data->metascore</div> on Metacritic</div>	";
			        	?>
			        </div>
     			 </div>
     		</div>
			<div class = "container">
				<label> Buy this Item </label><br/>
			</div>

		</div> 
	</div>
</div>
</body>
</html>
