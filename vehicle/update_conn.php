<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$serviceid=$_POST['serviceid'];
$servicename=$_POST['servicename'];
$price=$_POST['price'];
$features=$_POST['features'];
$details=$_POST['details'];

$sql = "UPDATE service SET `servicename`='$servicename', `price`='$price', `features`='$features',`details`='$details' WHERE serviceid=$serviceid";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('LOCATION:viewserviceadmin.php');
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>