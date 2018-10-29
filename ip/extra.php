<?php
$conn = mysqli_connect('localhost','root','dbit', 'ip');

			if($conn){
				echo "connected sucessfully";
			}
			else {
				echo "some error has occured Error : ".$mysqli_connect_error();
			}

			$query_select = "select soilMoisture, humidityLevel,temperature from user_plant_rel";

			$result=mysqli_query($conn,$query_select);
			$num = mysqli_num_rows($result);

			if($num > 0){
				//echo "hii";
				while($row=mysqli_fetch_assoc($result)){
					echo $row["soilMoisture"];
				}
				// $soilMoisture = $num[0];
				// $humidityLevel = $num[1];
				// $temperature = $num[2];

			}
			else{
				echo "There is no plant";
				// $insert_query = "insert into signup values('$name','$username','$password','$mobile_no','$email')";
				// mysqli_query($conn, $insert_query);
			}
			<h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
			?>