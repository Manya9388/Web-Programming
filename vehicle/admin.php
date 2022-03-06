<?php
	session_start();

	$conn=mysqli_connect("localhost", "root", "", "vehicle");

	if(!$conn){
		die("Error: Failed to connect to database!");
	}

		$email = $_POST['email'];
		$password = $_POST['password'];
    $result=  ("SELECT * FROM `admin` WHERE `email`='$email' && `password`='$password'");

	    $query = mysqli_query($conn,$result);
		$fetch = mysqli_fetch_array($query);
		$count = mysqli_num_rows($query);

		if($count > 0){
			$_SESSION['users_id']=$fetch['users_id'];
     		header('Location:adminhome.html');
			$_SESSION['user']=$fetch['name'];
			//$_SESSION['users_id']=$row['users_id'];
		}

		else{
			$_SESSION['tmp']="Invalid username or password!";
		
		  }
?>