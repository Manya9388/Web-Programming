<html><body>
  <style>
    body{
        background-image: url("../images/bg4.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    </style></body></html>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vehicle";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $mid= $_POST['mid'];
    $serviceid=$_POST['serviceid'];
    $calender=$_POST['calender'];
    $sql = "INSERT INTO booking (`mid`, `serviceid`, `calender`)
    VALUES ('$mid', '$serviceid', '$calender')";

   
    
    
      
    if ($con->query($sql) === TRUE) {
      echo "Booking successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>
<button><a href="userhome.html">GO TO HOME</a></button>