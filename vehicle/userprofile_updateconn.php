<html><body>
<input type="hidden" readonly value="<?php session_start(); $mid=$_SESSION['mid']; echo $mid; ?>">
<style>
    body{
        background-image: url("https://wallpapercave.com/wp/wp3514122.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
        
    </style>

</body></html>
<?php


$name=$_POST['name'];
$email=$_POST['email'];
$phoneNo=$_POST['phoneNo'];
$vehicle=$_POST['vehicle'];
$password=$_POST['password'];


$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "vehicle";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
//$conn = new mysqli("localhost","root","","alf");#connect database password and all

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}
else{
	$sql="UPDATE userreg SET `name`='$name', `email`='$email', phoneNo='$phoneNo', `vehicle`='$vehicle', `password`='$password' WHERE `mid`='$mid'";
	if ($conn->query($sql)) {
		echo "record is updated successfully";	
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}



?>
<button><a  href="user_profile.php">GO TO PROFILE</a></button>