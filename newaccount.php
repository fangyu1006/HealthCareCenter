<?php
$username=$_POST['name'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","medicalRobot");
if (!$con){
	die('Could not connect: ' . mysqli_error());
}
	
if($_POST['submit']){
	if (mysqli_query($con,"insert into userinfo (username,password) values('$username','$password')")) {
		setcookie("uname", $username, time()+7200);
		echo "<script>alert('successfully');window.location= 'index.php';</script>";
	}else {
		echo "<script>alert('failed');history.go(-1)</script>";
	}
}
mysqli_close($con);
include('register.html');?>