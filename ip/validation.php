<?php

session_start();

$conn = mysqli_connect('localhost','root','dbit','ip');

if($conn){
	echo "connected sucessfully";
}
else {
	echo "some error has happened";
}

$username = $_POST['username'];
$password = $_POST['password'];

$select_query = "select * from signup where username = '$username' && password = '$password' ";

$result = mysqli_query($conn,$select_query);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $username;
	header('location: home.php');
}
else{
	header('location: login_signup.php');
}





?>