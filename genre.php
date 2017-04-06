<?php
	include_once('template.php');
	$genre = $_GET['genre'];
	$json = 'games/genres.json';
	$genre_data = file_get_contents($json,true);
	$genre_data = json_decode($genre_data);
	$games = explode(";",$genre_data->$genre);
	$g_count = count($games);


	$i = 0;
?>
<body>
	<script type="text/javascript">
		function gameinfo(a) {
			window.location = "gamepage.php?appid="+a;
		}
	</script>
	<style type="text/css">
		.panel:hover {
				cursor:pointer;
		}
	</style>
	<?php
		echo '<title>'.$genre.'</title>';

		echo '<div class="container">';
			echo '<div class="row">';
		for ($x = 0; $x < $g_count; $x++) {
   			$json = 'games/'.$games[$x];
			$game_data = file_get_contents($json,true);
			$game_data = json_decode($game_data);
			$id = $game_data->_id;
			$title = $game_data->title;
			$image = $game_data->img;
			$price = $game_data->price;

			echo '<div class="col-sm-3">
		      <div class="panel panel-default" onclick="gameinfo('.$id.')">
		        <div class="panel-heading">'.$title.'</div>
		        <img src="'.$image.'" class="img-responsive" style="width:100%; height:150px;" alt="Image">
		        <div class="panel-footer">Rs '.$price.'</div>
		      </div>
		    </div>';
		} 
			echo '</div>';
		echo '</div>';
	?>

</body>
</html>