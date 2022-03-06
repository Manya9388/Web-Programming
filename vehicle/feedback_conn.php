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

$email = $_POST['email'];
$feedback = $_POST['feedback'];
$sql = "INSERT INTO feedback (`email`, `feedback`)VALUES ('$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
  echo "Feedback send successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
<button><a  href="userhome.html">GO TO HOME</a></button>