<html><body>
<input type="hidden" readonly value="<?php session_start(); $mid=$_SESSION['mid']; echo $mid; ?>">
<style>
    body{
        background-image: url('https://wallpapercave.com/wp/wp3514122.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
        
    </style>

</body></html>
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

    echo "<table>";
    echo "<tr>";
    echo "<th>USER ID</th>";
    echo "<th>USER NAME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>PHONE NO</th>";
    echo "<th>VEHICLE</th>";



    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM userreg where mid=$mid");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["mid"]. "</td>";
        $z=$row["mid"];
        echo "<td>" .$row["name"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["phoneNo"]. "</td>";
        echo "<td>" .$row["vehicle"]. "</td>";
        echo "</tr>";

    $i++;
    }
echo "</table>";
    }
    else{
    echo "No result found";
    }

    $con->close();
    ?>
<html>
    <body align="center">
<button><a href="userprofile_update.php">UPDATE PROFILE</a></button>
<button><a href="userhome.html">HOME</a></button>
</body></html>