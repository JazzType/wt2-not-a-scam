<?php
	include_once('template.html');
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Team</title>
	<script type="text/javascript">
		document.getElementById("team").className = "active"
	</script>
	<style type="text/css">
		body {
		    font-family: 'Source Sans Pro', sans-serif;
		    line-height: 1.5;
		    color: #323232;
		    font-size: 15px;
		    font-weight: 400;
		}

		.heading-title {
		    margin-bottom: 100px;
		}
		.text-center {
		    text-align: center;
		}
		.heading-title h3 {
		    margin-bottom: 0;
		    letter-spacing: 2px;
		    font-weight: normal;
		}
		.p-top-30 {
		    padding-top: 30px;
		}
		.half-txt {
		    width: 60%;
		    margin: 0 auto;
		    display: inline-block;
		    line-height: 25px;
		    color: #7e7e7e;
		}
		.text-uppercase {
		    text-transform: uppercase;
		}

		.team-member, .team-member .team-img {
		    position: relative;
		}
		.team-member {
		    overflow: hidden;
		}
		.team-member, .team-member .team-img {
		    position: relative;
		}

		.team-hover {
		    position: absolute;
		    top: 0;
		    left: 0;
		    bottom: 0;
		    right: 0;
		    margin: 0;
		    border: 20px solid rgba(0, 0, 0, 0.1);
		    background-color: rgba(255, 255, 255, 0.90);
		    opacity: 0;
		    transition: all 0.3s;
		}
		.team-member:hover .team-hover .desk {
		    top: 35%;
		}
		.team-member:hover .team-hover, .team-member:hover .team-hover .desk{
		    opacity: 1;
		}
		.team-hover .desk {
		    position: absolute;
		    top: 0%;
		    width: 100%;
		    opacity: 0;
		    transition: all 0.3s 0.2s;
		    padding: 0 20px;
		}
		
		.team-member:hover .team-hover, .team-member:hover .team-hover .desk{
		    opacity: 1;
		}
		
		.desk, .desk h4 {
		    text-align: center;
		    color: #222;
		}

		.team-title {
		    position: static;
		    padding: 20px 0;
		    display: inline-block;
		    letter-spacing: 2px;
		    width: 100%;
		}

		.team-title h5 {
		    margin-bottom: 0px;
		    display: block;
		    text-transform: uppercase;
		}
		.team-title span {
		    font-size: 12px;
		    text-transform: uppercase;
		    color: #a5a5a5;
		    letter-spacing: 1px;
}

	</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="heading-title text-center">
            <h3 class="text-uppercase">Our Team </h3>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="" alt="The Useless One" class="img-responsive" style="width:400px;height:250px">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Hi There I'm Jazz!</h4>
                        <p>I Have no idea what i'm doing here</p>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5>Akash Kulhalli</h5>
                <span>01FB14ECS017</span>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="" alt="The Clueless One" class="img-responsive" style="width:400px;height:250px">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Hi There I'm AB!</h4>
                        <p>i Get carried in CSGO</p>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5>Aditya Bharadwaj</h5>
                <span>01FB14ECS011</span>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="" alt="The Loud One" class="img-responsive" style="width:400px;height:250px">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Hi there I'm Aniket</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5>Aniket Udaykumar</h5>
                <span>01FB14ECS028</span>
            </div>
        </div>

    </div>

	</div>
</body>
</html>