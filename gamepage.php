<?php
	include_once('template.html');
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
</head>
<body>
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