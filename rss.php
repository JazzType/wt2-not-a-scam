<?php
	header("Content-type:text/xml");
	$feed = file_get_contents("rss.xml");
	echo($feed);
?>