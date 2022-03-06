<html><body>
<style>
    body{
        background-image: url('https://wallpapercave.com/wp/wp1891107.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
 <form action="booking.php " method="POST">    
     
    <?php
    session_start();
    $mid=$_SESSION['mid'];
    ?>
    <input type="hidden" name="mid" value="<?php echo $mid; ?>" readonly>

 SERVICE ID:<input type="text" name="serviceid"autofocus/>
<input type="hidden" readonly value="<?php session_start(); $mid=$_SESSION['mid']; echo $mid; ?>">
 <input type="submit" value="BOOK">
 <button><a href="userhome.html">HOME</a></button>
</form>
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
    echo "<th>SERVICE ID</th>";
    echo "<th>SERVICE NAME</th>";
    echo "<th>PRICE</th>";
    echo "<th>FEATURES</th>";
    echo "<th>DETAILS</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM service");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["serviceid"]. "</td>";
        echo "<td>" .$row["servicename"]. "</td>";
        echo "<td>" .$row["price"]. "</td>";
        echo "<td>" .$row["features"]. "</td>";
        echo "<td>" .$row["details"]. "</td>";
        echo "</tr>";

    $i++;
    }
echo "</table>";
    }
    else{
    die("No result found");
    }

    $con->close();
    ?>