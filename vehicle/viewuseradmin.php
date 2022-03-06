<html>
    <head>
        <style >
            body{
                background-image:url('https://wallpapercave.com/wp/wp6680248.jpg');
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
    echo "<th>USER ID</th>";
    echo "<th>USER NAME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>PHONE </th>";
    echo "<th>DISTRICT</th>";
    echo "<th>CITY</th>";
    echo "<th>PINCODE</th>";
    echo "<th>VEHICLE</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM userreg");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["mid"]. "</td>";
        echo "<td>" .$row["name"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["phoneNo"]. "</td>";
        echo "<td>" .$row["district"]. "</td>";
        echo "<td>" .$row["city"]. "</td>";
        echo "<td>" .$row["pincode"]. "</td>";
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