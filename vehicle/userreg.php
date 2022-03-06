<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "vehicle";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$age = $_POST['age'];
$phoneNo = $_POST['phoneNo'];
$district = $_POST['district'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$vehicle = $_POST['vehicle'];
$password = $_POST['password'];

$sql = "INSERT INTO userreg (`name`,`email`, `address`,`age`,`phoneNo`,`district`,`city`,`pincode`,`vehicle`,`password`)
VALUES ('$name','$email', '$address','$age', '$phoneNo', '$district','$city', '$pincode','$vehicle', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
<button><a  href="index.html">GO TO INDEX</a></button>