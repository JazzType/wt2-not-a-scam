<?php 
		include_once('template.php');
?>
<body>
		<title>Not-A-Scam.gg</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="sse_ldeal.js"></script>
		<style>
			/* Remove the jumbotron's default bottom margin */ 
			 .jumbotron {
				margin-bottom: 0;
			}
		 
			/* Add a gray background color and some padding to the footer */
			footer {
				background-color: #292C2E;
     			padding: 25px;
      			color: #F7F7F7;
			}

			.carousel-inner > .item > img,
			.carousel-inner > .item > a > img {
				width: 100%;
				height: 100%;
				margin: auto;
			}
			
			.carousel:hover, .panel:hover {
				cursor:pointer;
			}

			.carousel-caption {
				top: auto;
				bottom: 5;
				left:0;
				right:auto;
				padding-left: 40px;      
			}

			.img-container{
			    width:150px;
			    height:225px;
			    position: relative;
			    display: inline;
			    margin:5px;
			}

			.img-text {
			    top:170px;
			    width:150px;
			    height:50px;
			    margin-left:15px;
			    position: absolute;
			    color: white;
			    display:block;
			}

			.price-tag {
				width: 40%;
				text-align: center;
				border-width: thin;
				border-style: solid;
				border-radius: 5px;
			}
		</style>
	</head>
	<body>
		
		<!-- JUMBOTRON -->
		<div class="jumbotron">
		  <div class="container text-center">
		    <h1>NOT-A-SCAM</h1>      
		    <p>You Can Trust Us!</p>
		  </div>
		</div>

		<!-- AFter NAV -->
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
		            <img src="screenshots/halo5/halo.jpg" alt="Halo" onclick="gameinfo(3)" style="width: 100%; height: 400px !important;">
		            <div class="carousel-caption ">
		            Halo 5 -   Rs 2,000
		            </div>
		          </div>

		          <div class="item">
		            <img src="screenshots/csgo/csgo.jpg" alt="csgo" onclick="gameinfo(2)" style="width: 100%; height: 400px !important;">
		            <div class="carousel-caption">
		            CS:GO - Rs 400
		            </div>
		          </div>
		        
		          <div class="item">
		            <img src="screenshots/dota2/dota-2-official.jpg" alt="dota2" onclick="gameinfo(1)" style="width: 100%; height: 400px !important;">
		            <div class="carousel-caption">
		            DOTA 2 - Rs 1,000
		            </div>
		          </div>

		          <div class="item">
		            <img src="screenshots/hl/hl.jpg" alt="HL" style="width: 100%; height: 400px !important;">
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
		    <!-- LATEST DEAL -->
		    <div class="col-md-3"> 
		      <label>Latest Deal</label>
		      <br>
		      <div class="img-container">
		      	<div class="img-text" id="demo"></div>
		      		<img src="screenshots/rl/RL.jpg" alt="RL" style=" width: 100%; height:400px;">
		      </div>
		    </div>
		  </div>
		</div><br><br>

		<!-- GAMES -->
		<div class="container">    
		  <div class="row">
		    <div class="col-sm-3">
		      <div class="panel panel-default">
		        <div class="panel-heading">Valkyria Chronicles</div>
		        <img src="screenshots/vc/vc.jpg" alt="vc" class="img-responsive" style="width:100%; height:150px;" alt="Image">
		        <div class="panel-footer"><div class="price-tag">Rs 450</div></div>
		      </div>
		    </div>
		    <div class="col-sm-3"> 
		      <div class="panel panel-default">
		        <div class="panel-heading">Mass Effect</div>
		        <img src="screenshots/me/me.jpg" alt="me" class="img-responsive" style="width:100%; height:150px;">
		        <div class="panel-footer"><div class="price-tag">Rs 2000</div></div>
		      </div>
		    </div>
		    <div class="col-sm-3"> 
		      <div class="panel panel-default">
		        <div class="panel-heading">Skyrim</div>
		        <img src="screenshots/skyrim/skyrim.jpg" alt="skyrim" class="img-responsive" style="width:100%; height:150px;">
		        <div class="panel-footer"><div class="price-tag">Rs 1050</div></div>
		      </div>
		    </div>
		    <div class="col-sm-3"> 
		      <div class="panel panel-default">
		        <div class="panel-heading">Inside</div>
		        <img src="screenshots/inside/inside.jpg" alt="inside" class="img-responsive" style="width:100%; height:150px;">
		        <div class="panel-footer"><div class="price-tag">Rs 400</div></div>
		      </div>
		    </div>
		  </div>
		</div><br><br>

		<footer class="container-fluid text-center">
			<p>Not-A-Scam Copyright &copy;</p>  
			<form class="form-inline">Get deals:
				<input type="email" class="form-control" size="50" placeholder="Email Address">
				<button type="button" class="btn btn-danger">Sign Up</button>
			</form>
		</footer>
	</body>
</html>
