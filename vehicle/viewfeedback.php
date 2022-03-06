<html>
    <head>
        <style >
            body{
                background-image:url('https://wallpapercave.com/wp/wp3514109.jpg');
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
    echo "<th>FEEDBACK ID</th>";
    echo "<th>EMAIL</th>";
    echo "<th>FEEDBACK</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM feedback");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["fid"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["feedback"]. "</td>";
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