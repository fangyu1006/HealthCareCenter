<?php
	session_start();

	function debug_to_console($data) {
	if ( is_array( $data ) )
		$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
	else
      		$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
   		 echo $output;
	}

	//DB info
	$DBServerName = "localhost";
 	$DBUserName = "root";
 	$DBPassWord = "fangyu2018";
 	$DBName = "HealthCareCenter";
  
	// Create connection
  	$conn = mysqli_connect($DBServerName, $DBUserName, $DBPassWord, $DBName) or die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());

	$action = $_POST['action'];
 	$username = $_POST['username'];
  	$password = $_POST['password'];


	//----------------------------
	// user login
	//----------------------------
	if($action=="login"){
		$sql = "SELECT * FROM userinfo WHERE username='$username' and password='$password'";
   		$res = mysqli_query($conn, $sql);
   		if(!$res) {
      		die('Invalid query:'. mysqli_error($conn));
   		}
   		$row = mysqli_fetch_array($res);
    		$active = $row['active'];
   		$count = mysqli_num_rows($res);
	
		if($count==1){
                	$_SESSION["username"]=$username;
                	echo 'trueuser';
       		} else {
        	        echo 'falseuser';
	        }


	}

	//-------------------------
	// user register
	//-------------------------
	if($action=="register"){
		$sql = "SELECT * FROM userinfo WHERE username='$username'";
   		$res = mysqli_query($conn, $sql);
		if(!$res) {
      			die('Invalid query:'. mysqli_error($conn));
   		}
    	
		$row = mysqli_fetch_array($res);
    		$active = $row['active'];
    		$count = mysqli_num_rows($res);

    		if ($count==1) {
      			echo 'nametoken';
		} else {
			$sql_insert = "INSERT INTO userinfo (username, password) VALUES ('$username','$password')";
     			if (mysqli_query($conn, $sql_insert)) {
       			$_SESSION["username"] = $username;
        		echo 'register';
			} else {
				echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
			}
		}
	}

?>
