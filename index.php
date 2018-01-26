<?php
$flag=0;
if(isset($_GET["out"])){
    if($_GET["out"]){
        setcookie('uname','',time()-1);
        $flag=1;//防止服务器接收到getout操作时已经认为该用户有cookie，然后下面的COOKIE[NAME]已经有了，服务器返回给他的才是空的
    }
}

if($flag!=1){
    $link=mysqli_connect('localhost','root','fangyu2018','medicalRobot');
    if(isset($_COOKIE['uname'])){
        $name=$_COOKIE['uname'];
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
