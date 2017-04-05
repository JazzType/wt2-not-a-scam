<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Not-A-Scam.gg</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<style>
			/* Remove the navbar's default rounded borders and increase the bottom margin */ 
			.navbar {
				margin-bottom: 50px;
				border-radius: 0;
			}
			
			/* Remove the jumbotron's default bottom margin */ 
			 .jumbotron {
				margin-bottom: 0;
			}
		 
			/* Add a gray background color and some padding to the footer */
			footer {
				background-color: #f2f2f2;
				padding: 25px;
			}

			.carousel-inner > .item > img,
			.carousel-inner > .item > a > img {
				width: 100%;
				height: 100%;
				margin: auto;
			}
		 
			.dropdown-menu {
				display: none;
			}

			.dropdown:hover .dropdown-menu {
				display: block;
			}
			
			.carousel-caption {
				top: auto;
				bottom: 5;
				left:0;
				right:auto;
				padding-left: 40px;      
			}
		</style>
	</head>
	<body>
		<?php 
			include_once('template.php');
		?>
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Not-A-Scam.gg</h1>      
				<p>You Can Trust Us</p>
			</div>
		</div>
		<div class="container">    
			<div class="row">

			<!--CAROUSEL-->
				<div class="col-md-9">
					<label>What's New</label><br>
					<div id="myCarousel" class="carousel slide" data-ride="carousel" style=" width:100%; height:100%;">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

							<div class="item active">
								<img src="images/halo.jpg" alt="Halo" style="width: 100%; height: 400px !important;">
								<div class="carousel-caption ">
								Halo 5 -   Rs 2,000
								</div>
							</div>

							<div class="item">
								<img src="images/csgo.jpg" alt="csgo" style="width: 100%; height: 400px !important;">
								<div class="carousel-caption">
								CS:GO - Rs 400
								</div>
							</div>
						
							<div class="item">
								<img src="images/dota-2-official.jpg" alt="dota2" style="width: 100%; height: 400px !important;">
								<div class="carousel-caption">
								DOTA 2 - Rs 1,000
								</div>
							</div>

							<div class="item">
								<a href="goto.html"><img src="images/hl.jpg" alt="Half Life" style="width: 100%; height: 400px !important;"></a>
								<div class="carousel-caption">
								HALF LIFE -  Rs 300
								</div>
							</div>
					
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
				</div>

				<div class="col-md-3"> 
					<label>Latest Deal</label>
					<br> 
					<img src="images/halo.jpg" alt="Halo" style=" width: 100%; height:400px;">
				</div>
			</div>
		</div><br>

		<div class="container">    
			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-primary">
						<div class="panel-heading">Valkyria Chronicles</div>
						<div class="panel-body"><img src="images/halo.jpg" class="img-responsive" style="width:100%; height:120px;" alt="Image"></div>
						<div class="panel-footer">Rs 450</div>
					</div>
				</div>
				<div class="col-sm-3"> 
					<div class="panel panel-primary">
						<div class="panel-heading">Mass Effect</div>
						<div class="panel-body"><img src="images/hl.jpg" class="img-responsive" style="width:100%; height:120px;" alt="Image"></div>
						<div class="panel-footer">Rs 2,000</div>
					</div>
				</div>
				<div class="col-sm-3"> 
					<div class="panel panel-primary">
						<div class="panel-heading">Skyrim</div>
						<div class="panel-body"><img src="images/dota-2-official.jpg" class="img-responsive" style="width:100%; height:120px;" alt="Image"></div>
						<div class="panel-footer">Rs 2,500</div>
					</div>
				</div>
				<div class="col-sm-3"> 
					<div class="panel panel-primary">
						<div class="panel-heading">Inside</div>
						<div class="panel-body"><img src="images/csgo.jpg" class="img-responsive" style="width:100%; height:120px;" alt="Image"></div>
						<div class="panel-footer">Rs 300</div>
					</div>
				</div>
			</div>
		</div><br><br>

		<footer class="container-fluid text-center">
			<p>&copy;</p>  
			<form class="form-inline">Get deals:
				<input type="email" class="form-control" size="50" placeholder="Email Address">
				<button type="button" class="btn btn-danger">Sign Up</button>
			</form>
		</footer>
	</body>
</html>
