<?php
	header("Content-Type:text/event-stream");	
	header('Cache-Control: no-cache');
	ob_start();
	 $modified = filemtime("new_deals.json");
	 clearstatcache();
	 //echo time();
	 while(1) {
	 	$lastModified = filemtime("new_deals.json");
	 	clearstatcache();
	 	$file_data = json_decode(file_get_contents("new_deals.json"));
 		echo
 		'
 		<script>
 		alert("About to send events");
 		</script>
 		';
	 	if($lastModified != $modified) {
	 		echo 'Event: DealUpdate\n';
	 		echo 'appid: $file_data->_id\n';
	 		echo 'deal_image: $file_data->img\n';

	 		echo 'timer:'.$file_data['time'];
	 		echo '\n\n';
	 		//echo 'data: '.$;
	 		//echo '\n\n';
	 		$modified = $lastModified;
	 	}
	 	ob_flush();
	 	flush();
	 	sleep(3);
	 }
	 
?>
