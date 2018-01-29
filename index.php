<?php
$flag=0;
session_start();

if($flag!=1){
    $link=mysqli_connect('localhost','root','fangyu2018','HealthCareCenter');
    if(isset($_SESSION["username"])){
        $name=$_SESSION["username"];
        $query=mysqli_query($link,"SELECT username FROM userinfo WHERE username = '$name'");
        $row=mysqli_num_rows($query);
        if($row==1){
           echo "<script>window.location= 'homepage.php';</script>";
        }
    }else{
        echo "<script>window.location= 'welcome.html';</script>";
    }
}
else{
    echo "<script>window.location= 'welcome.html';</script>";
}
?>
