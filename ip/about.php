<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script type="text/javascript" src="day_night.js"></script>
    <link rel="stylesheet" type="text/css" href="navbar.css">

	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.container-fluid{
			outline: none;
		}

		.maincontainer{
			position: relative;
			width: 350px;
			height: 500px;
		}

		.card{
			position: absolute;
			outline: none;
			width: 100%;
			height: 100%;
			transform-style: preserve-3d;
			transition: all 0.5s ease;
		}

		.card:nth-child(1){
			margin-top: 7vh;
			margin-left: -5vh;
		}

		.card:nth-child(2){
			margin-top: 7vh;
			margin-left: 55vh;
		}

		.card:nth-child(3){
			margin-top: 7vh;
			margin-left: 115vh;
		}

		.card:hover{
			transform: rotateY(180deg);
		}

		.front img{
			position: absolute;
			width: 350px;
			height: 500px;
			backface-visibility: hidden;
			border-radius: 3vh;
		}

		.back{
			position: absolute;
			width: 350px;
			height: 500px;
			backface-visibility: hidden;
			background: #5fcf80;
        	color: #fff;
        	text-align: center;
        	font-family: 'zilla slab', sans-serif;
        	border-radius: 20px;
        	font-size: 18px;
        	font-weight: bold;
        	transform: rotateY(180deg);
        	padding: 1vh;
        	border: 0px;
		}
	</style>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-sm">
			<ul class="navbar-nav">
				<li class="nav-item" >
					<a class="nav-link" href="home.php"><span title="Home">Home</span></a>
				</li>
				<li class="nav-item" >
					<a class="nav-link" href="plant_status.php"><span title="Plant Status">Plant Status</span></a>
				</li>
				<li class="nav-item" >
					<a class="nav-link" href="suggested_plant.php"><span title="Suggested Plants">Suggested Plants</span></a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#" ><span title="Botanical Gardens">Botanical Gardens</span></a>
				</li>
	 -->			<li class="nav-item">
					<a class="nav-link" href="about.php" ><span title="About Us">About Us</span></a>
				</li>
				<li class="nav-item">
	                <?php if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
	                { ?>
	                    <a class="nav-link" href="logout.php" ><span title="Logout">Logout</span></a>
	                <?php } else{ ?>
	                    <a class="nav-link" href="login_signup.php"><span title="Login">Login</span> </a>
	                <?php } ?>
	            </li>
				<div class="toggle"></div>
			</ul>
		</nav>
	</div>

	<div class="container -fluid">
		<div class="maincontainer">
			<div class="card">
				<div class="front"><img src="images/alok.jpg" alt="John"></div>
				<div class="back">
					<h1>Alok Pandey</h1>
					<p>TE-IT<br>
						Don Bosco Institute of Technology,Kurla(west),Mumbai-400084.<br>
						Mob. No. : 7977290429<br>
						E-mail : alokrocks217@gmail.com<br>
					</p>
				</div>
			</div>
			<div class="card">
				<div class="front"><img src="images/nishant.jpg" alt="John"></div>
				<div class="back">
					<h1>Nishant Nimbalkar</h1>
					<p>TE-IT<br>
						Don Bosco Institute of Technology,Kurla(west),Mumbai-400084.<br>
						Mob. No. : 7775026761<br>
						E-mail : nimbalkarnishant98@gmail.com<br>
					</p>
				</div>
			</div>
			<div class="card">
				<div class="front"><img src="images/pawan.jpg" alt="John"></div>
				<div class="back">
					<h1>Pawan Kumar Maurya</h1>
					<p>TE-IT<br>
						Don Bosco Institute of Technology,Kurla(west),Mumbai-400084.<br>
						Mob. No. : 7045816489<br>
						E-mail : pawanabc59@gmail.com<br>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>