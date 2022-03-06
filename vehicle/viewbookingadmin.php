<html>
    <head>
        <style >
            body{
                background-image:url('https://wallpapercave.com/wp/wp5553626.jpg');
                background-repeat:no-repeat;
                background-size:cover;
            }
        </style>
        <center><button><a href=adminhome.html>HOME</a></button></center>
        </head>
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
    echo "<th>BOOKING ID</th>";
    echo "<th>USER ID</th>";
    echo "<th>SERVICE ID</th>";
    echo "<th>CALENDER</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM booking");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["bookingid"]. "</td>";
        echo "<td>" .$row["mid"]. "</td>";
        echo "<td>" .$row["serviceid"]. "</td>";
        echo "<td>" .$row["calender"]. "</td>";
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