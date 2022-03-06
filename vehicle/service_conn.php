<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="vehicle";

$conn =  mysqli_connect($servername, $username, $password, $dbname);

if(! $conn)
{
	die('could not connect: ' . mysqli_error());
}

$servicename=$_POST['servicename'];
$price=$_POST['price'];
$features=$_POST['features'];
$details=$_POST['details'];

$sql = "INSERT INTO service ( `servicename`, `price`, features, details)
VALUES ('$servicename', '$price', '$features', '$details')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
<button><a  href="adminhome.html">HOME</a></button>

