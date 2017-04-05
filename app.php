<?php
	include_once('template.html');
	$gid = $_GET['appid'];
	$i = 0;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Store Page - <?php echo $gid ?></title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="carousel slide" data-ride="carousel" id="media-carousel" style="width:100%; height: 100%;">
					<ol class="carousel-indicators">
						<li data-target="#media-carousel" data-slide-to="0" class="active"></li>
						<?php						
							for ($i=1; $i < $media_count; $i++) {
								echo '<li data-target="#media-carousel" data-slide-to="'.$i.'"></li>';
							}							
						?>						
					</ol>
					<div class="carousel-inner" role="listbox">
						<?php
							echo 
							'
							<div class="item active">
							<img src="'.$images[0].'" alt="'.$images[0].'" style="width: 100%; height: 350px !important;">
							</div>
							';
							for ($image_index = 1; $image_index < count($images); $image_index++) { 
								echo 
								'
								<div class="item">
								<img src="'.$images[$image_index].'" alt="'.$images[$image_index].'" style="width: 100%; height: 350px !important;">
								</div>
								';
							}
						?>
					</div>
					<a class="left carousel-control" href="#media-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#media-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<strong class="text-center">Buy Now!</strong>
					<button class="btn btn-success btn-lg pull-right">Add to cart</button>
					<br><strike id="oldprice">$16.00</strike>
					<span id="newprice" class="text-success">$15.99</span>
				</div>
				<hr>
				<div class="row">
					<strong>Details</strong>
				</div>
				<div class="row">
					<label>Genre: </label>
					<span id="genre" class="pull-right">Genre-placeholder</span>
				</div>
				<div class="row">
					<label>Works on: </label>
					<span id="works_on" class="pull-right">Works on placeholder</span>
				</div>
				<div class="row">
					<label>Release Date: </label>
					<span id="release_date" class="pull-right">Release date placeholder</span>
				</div>
				<div class="row">
					<label>Publisher: </label>
					<span id="publisher" class="pull-right">Publisher-placeholder</span>
				</div>
			</div>
		</div><br><hr>
		<div class="row">
			<div class="col-sm-6">
				<label>About the game</label><hr>
				<div>Lipsum</div>
			</div>
			<div class="col-sm-6">
				<label>Minimum System Requirements</label><hr>
				<div>Sysreq Lipsum</div>
			</div>
		</div>
	</div>	
	</body>
</html>
