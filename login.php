i<?php
$username=$_POST['username'];
$password=$_POST['password'];

$link = mysqli_connect('localhost','root','fangyu2018','medicalRobot');
$query=mysqli_query($link,"SELECT username,password FROM userinfo WHERE username = '$username'");
$row = mysqli_fetch_array($query);
if($_POST['submit']){    
    if($row['username']==$username &&$row['password']==$password){
        setcookie('uname',$username,time()+7200);
        echo "<script>alert('Login successfully');window.location= 'index.php';</script>";
    }
    else echo "<script>alert('failed');history.go(-1)</script>";//返回之前的页面
}

include('login.html');?>
