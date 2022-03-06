<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="vehicle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$password = $_POST['password'];

$sql = "select *from userreg where email = '$email' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$fetch = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
  
if($count > 0){
  session_start();
  $_SESSION['mid']=$fetch['mid'];
  //echo $_SESSION['mid'];
  header('LOCATION:userhome.html');
}
else{
  echo "<h1>Login failed .Invalid email or password </h1> ";
}

?>