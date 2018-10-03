<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$database = "smartplantwatering";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT soilMoisture,time FROM user_plant_rel";
$result = $conn->query($sql);

/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["contactNo"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
//$mysqli->close();

//now print the data
print json_encode($data);
#print($data[0]["soilMoisture"])



   //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");
 
    if(!empty($_POST['soil']) && !empty($_POST['water']))
    {
    	$soil = $_POST['soil'];
    	$water = $_POST['water'];
    	//$temp="ON"
    	if($water<10){
    		$temp="OFF";
    	}
     	else {
     		if($soil<100)
     		{
     		$temp="OFF";
     		}
     		else{
     		$temp="ON";
     		}
     	}
	    $sql = "INSERT INTO user_plant_rel
		
		VALUES ('7775026761','1','".$soil."', '".$water."','NULL','NULL','".$temp."', '".$t."', '".$d."')";
 
		if($conn->query($sql) === TRUE ){
			//echo "Successfully inserted the data";
		}else {
		    //echo "Error: " . $sql . "<br>" . $conn->error;
		}



		if ($temp === "ON") {
		    echo "1";
		} else {
			echo "0";
		    //echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	


$conn->close();

?>