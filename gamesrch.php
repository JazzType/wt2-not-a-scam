<?php	
	$game_list = json_decode(file_get_contents("games/game_list.json"), true)['games'];	
	$matches = array();
	foreach ($game_list as $title) {
		if(strpos($title['title'], $_GET['game']) !== false) {
			$matches[] = $title;
		}
	}
	echo json_encode($matches);
?>
