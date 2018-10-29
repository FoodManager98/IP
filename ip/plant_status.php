<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>alert('You need to login to see the status of your plant');
			window.location.href='login_signup.php';</script>"; 
}

$conn = mysqli_connect('localhost','root','dbit', 'ip');

			if($conn){
				// echo "connected sucessfully";
			}
			else {
				echo "some error has occured Error : ".$mysqli_connect_error();
			}

			// $query_select = "select soilMoisture, humidityLevel,temperature from user_plant_rel where username = '".$_SESSION['username']."'";

			$query_select = "select soilMoisture, humidityLevel,temperature from user_plant_rel";

			$result=mysqli_query($conn,$query_select);
			$num = mysqli_num_rows($result);

			if($num > 0){
				// echo "hii";
				while($row=mysqli_fetch_assoc($result)){
					$soil=$row["soilMoisture"];
					$hum=$row["humidityLevel"];
					$temp=$row["temperature"];
				}
				// $soilMoisture = $num[0];
				// $humidityLevel = $num[1];
				// $temperature = $num[2];

			}
			else{
				echo "There is no plant";
			}
		

?>

<!DOCTYPE html>
<html>
<head>
	<title>Plant Status</title>
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
		.content{
			width: 100%;
			height: 70vh;
		}

		.content2{
			width: 100%;
			height: 30vh;
			background-color: red;
		}

		.content2>p{
			display: inline-block;
		}

		.outer_circle1{
			position: relative;
			margin: 12vw;
			margin-left: 10vw;
			width: 40vh;
			height: 40vh;
			background: #fff;
			border-radius: 50%;
			position: absolute;
			box-shadow: 0 0 0 1px #fff,0 0 0 6px #666;
		}

		.middle_circle1{
			transform: rotate(180deg);
			width: 100%;
			overflow: hidden;
			position: absolute;
			bottom: 0;
		}

		.inner_circle1{
			width: 40vh;
			height: 40vh;
			border-radius: 50%;
			/*display: none;*/
			/*transform: scale(0);*/
			/*transition: 3s;*/
			transform-origin: top;
			transition-delay: 1s;
			animation: animate 2s linear; 
		}

		.inner_circle1>p,
		.inner_circle1>h3{
			margin-left: 2vh; 
			transform: rotate(180deg);
		}

		.outer_circle2{
			/*position: absolute;*/
			margin: 12vw;
			margin-left: 40vw;
			width: 40vh;
			height: 40vh;
			background: #fff;
			border-radius: 50%;
			position: absolute;
			box-shadow: 0 0 0 1px #fff,0 0 0 6px #666;
		}

		.middle_circle2{
			transform: rotate(180deg);
			width: 100%;
			overflow: hidden;
			position: absolute;
			bottom: 0;
		}

		.inner_circle2{
			width: 40vh;
			height: 40vh;
			border-radius: 50%;
			/*display: none;*/
			/*transform: scale(0);*/
			/*transition: 3s;*/
			transform-origin: top;
			transition-delay: 1s;
			animation: animate 2s linear; 
		}

		.outer_circle3{
			/*position: absolute;*/
			margin: 12vw;
			margin-left: 70vw;
			width: 40vh;
			height: 40vh;
			background: #fff;
			border-radius: 50%;
			position: absolute;
			box-shadow: 0 0 0 1px #fff,0 0 0 6px #666;
		}

		.middle_circle3{
			transform: rotate(180deg);
			width: 100%;
			overflow: hidden;
			position: absolute;
			bottom: 0;
		}

		.inner_circle3{
			width: 40vh;
			height: 40vh;
			text-align: center;
			border-radius: 50%;
			/*display: none;*/
			/*transform: scale(0);*/
			/*transition: 3s;*/
			transform-origin: top;
			transition-delay: 1s;
			animation: animate 2s linear; 
		}

		@keyframes animate{
			0%{
				transform: scale(0);
			}
			100%{
				transform: scale(1);
			}
		}

		.title1{
			position: absolute;
			margin-top: 33%;
			margin-left: 15%;
			font-size: 20px;
			font-weight: bold;
		}
		
		.title2{
				position: absolute;
				margin-top: 33%;
				margin-left: 45%;
				font-size: 20px;
				font-weight: bold;
		}
		
		.title3{
				position: absolute;
				margin-top: 33%;
				margin-left: 75%;
				font-size: 20px;
				font-weight: bold;
		}
/*
		.inner_circle::after{
			display: block;
			transition: 
		}
*/
		/*@keyframes animate{
			0%{
				background-position: bottom 800px;
			}

			40%{
				background-position: top 
			}
		}
*/
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm">
		<ul class="navbar-nav">
			<li class="nav-item" >
				<a class="nav-link" href="home.php"><span title="Home">Home</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="plant_status.php" ><span title="Plant Status">Plant Status</span></a>
			</li>
			<li class="nav-item" >
				<a class="nav-link" href="suggested_plant.php"><span title="Suggested Plants">Suggested Plants</span></a>
			</li>
			<li class="nav-item">
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
	<div class="content">
 
		<div class="outer_circle1">
			<div id="middle_circle1" class="middle_circle1" >
				<div id="inner_circle1" class="inner_circle1"></div>
			</div>
		</div>
		<div class="title1">
			<span style="margin-left: 40%;">
				<?php echo $soil."%"?>
			</span>
			<br>
			<span>
				Soil Moisture
			</span>
		</div>


		<div class="outer_circle2">
			<div id="middle_circle2" class="middle_circle2" >
				<div id="inner_circle2" class="inner_circle2"></div>
			</div>
		</div>
		<div class="title2">
			<span style="margin-left: 40%;">
				<?php echo $hum."%"?>
			</span>
			<br>
			<span>
				Humidity Level
			</span>
		</div>
		
		<div class="outer_circle3">
			<div id="middle_circle3" class="middle_circle3" >
				<div id="inner_circle3" class="inner_circle3"></div>
			</div>
		</div>
		<div class="title3">
			<span style="margin-left: 40%;">
				<?php echo $temp."%"?>
			</span>
			<br>
			<span>
				Temperature
			</span>
		</div>

	</div>
	<!-- <div class="content2">
		<p style="display: inline;"><?php echo $soil;?><h3>Soil Moisture</h3></p>
		<p><?php echo $soil;?><h3>Soil Moisture</h3></p>
		<p><?php echo $soil;?><h3>Soil Moisture</h3></p>
	</div> -->


	<script type="text/javascript">

		var height = "<?php echo $soil; ?>";
		var height2 = "<?php echo $hum; ?>";
		var height3 = "<?php echo $temp; ?>";
		console.log(height);
		document.getElementById('middle_circle1').style.height = height + "%"
		var element = document.getElementById('inner_circle1')

		if (height < 30){
			element.setAttribute("style", "border: solid 6px red; background:magenta");
		}
		else if(height < 60){
			element.setAttribute("style", "border: solid 6px green; background:lightgreen")
		}
		else{
			element.setAttribute("style", "border: solid 6px #95bee1; background:lightblue")
		}

		document.getElementById('middle_circle2').style.height = height2 + "%"
		var element = document.getElementById('inner_circle2')

		if (height2 < 30){
			element.setAttribute("style", "border: solid 6px red; background:magenta");
		}
		else if(height2 < 60){
			element.setAttribute("style", "border: solid 6px green; background:lightgreen")
		}
		else{
			element.setAttribute("style", "border: solid 6px #95bee1; background:lightblue")
		}

		document.getElementById('middle_circle3').style.height = height3 + "%"
		var element = document.getElementById('inner_circle3')

		if (height3 < 30){
			element.setAttribute("style", "border: solid 6px red; background:magenta");
		}
		else if(height3 < 60){
			element.setAttribute("style", "border: solid 6px green; background:lightgreen")
		}
		else{
			element.setAttribute("style", "border: solid 6px #95bee1; background:lightblue")
		}
	</script>
</body>
</html>