<?php
	session_start();
?>

<!-- we have to create the php session to the web pages which we want to give the access to the user after the login  -->

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
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
    	container-fluid{
    		margin: 0;
    		padding: 0;
    	}

    	.carousel-inner > .carousel-item{
    		transition: 0.2 ease-in-out left;
    	}
    </style>

</head>
<body>
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
	<div class="container-fluid">
		<h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
		<div class="carousel slide" id="slider" data-ride="carousel">
			<ul class="carousel-indicators">
				<li class="active" data-slide-to="1" data-target="#slider"></li>
				<li data-slide-to="2" data-target="#slider"></li>
				<li data-slide-to="3" data-target="#slider"></li>
				<li data-slide-to="4" data-target="#slider"></li>
				<li data-slide-to="5" data-target="#slider"></li>
				<li data-slide-to="6" data-target="#slider"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/fern.jpg" alt="lorem" width="1300" height="620">
				</div>
				<div class="carousel-item">
					<img src="images/watering_plant1.jpg" alt="lorem" width="1300" height="620">
				</div>
				<div class="carousel-item">
					<img src="images/watering_plant.jpg" alt="lorem" width="1300" height="620">
				</div>
				<div class="carousel-item">
					<img src="images/watering.jpg" alt="lorem" width="1300" height="620">
				</div>
				<div class="carousel-item">
					<img src="images/watering_plant2.jpeg" alt="lorem" width="1300" height="620">
				</div>
				<div class="carousel-item">
					<img src="images/beautiful.jpg" alt="lorem" width="1300" height="620">
				</div>
			</div>

			<a href="#slider" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>

			<a href="#slider" class="carousel-control-next" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>

</body>
</html>