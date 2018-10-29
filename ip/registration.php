<?php

// session_start();
header('location:login_signup.php');
// echo "<script type='text/javascript'>
// 			window.location.href = 'login_signup.php';
// 		</script>";

$conn = mysqli_connect('localhost','root','dbit', 'ip');

if($conn){
	echo "connected sucessfully";
}
else {
	echo "some error has occured Error : ".$mysqli_connect_error();
}

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];

if($password != $repassword){
	echo "<script type='text/javascript'>
			alert('Password doesn't matched!');
			window.location.href = 'login_signup.php';
		</script>";
}
else{

	$select_query = "select * from signup where username='$username'";

	$result = mysqli_query($conn,$select_query);

	$num = mysqli_fetch_array($result,MYSQLI_NUM);

	if($num > 0){
		echo "<script type='text/javascript'>
				alert('User alerady exists');
				window.location.href = 'login_signup.php';
			</script>";
	}
	else{
		$insert_query = "insert into signup values('$name','$username','$password','$mobile_no','$email')";
		mysqli_query($conn, $insert_query);
	}
}


?>