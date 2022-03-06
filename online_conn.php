<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "car";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$model = $_POST['model'];
$price = $_POST['price'];


$sql = "INSERT INTO register (`name`, `address`,`phone`,`model`,`price`)
VALUES ('$name','$address', '$phone','$model', '$price')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
