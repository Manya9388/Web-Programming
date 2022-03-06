<html><body>
<style>
    body{
        background-image: url('https://wallpapercave.com/wp/wp1898174.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
    <?php
    $mid=$_POST['mid'];
    ?>
<?php
$conn=mysqli_connect("localhost", "root", "", "vehicle");

if(!$conn)
{
    die("Error: Failed to connect to database!"); 
}
$serviceid=$_POST['serviceid'];
$query=mysqli_query($conn,"SELECT * FROM `service`where serviceid=$serviceid");

session_start(); $mid=$_SESSION['mid']; 
//echo $item_id;
echo "<table align=center>";
while($row= mysqli_fetch_array($query)){
    echo "<tr><th>SERVICE ID</th><td style='border: solid 1px black;'>".$row['serviceid']."</td></tr>";
    $packageid=$row['serviceid'];
    echo "<tr><th>SERVICE NAME</th><td style='border: solid 1px black;'>".$row['servicename']."</td></tr>";
    echo "<tr><th>PRICE</th><td style='border: solid 1px black;'>"."$".$row['price']."</td></tr>";
    $price=$row['price'];
    echo "<tr><th>FEATURES</th><td style='border: solid 1px black;'>".$row['features'] ."</td></tr>";
    echo "<tr><th>DETAILS</th><td style='border: solid 1px black;'>".$row['details'] ."</td></tr>";
    
            }           
echo "</table>";

?>

<!DOCTYPE HTML>
<html>
<head>
 <title>BOOKING</title>
</head>
 <body>
<div>
     <form action="booking_conn.php" method="post">  
    <input type="hidden" name="mid" value="<?php echo $mid; ?>" readonly>
     <input type="hidden" readonly name="serviceid" value="<?php echo $serviceid;?>"><br>
     <input type="hidden" readonly name="price" value="<?php echo $price;?>"><br>
     <input type="hidden" readonly name="features" value="<?php echo $features;?>"><br>
     <input type="hidden" readonly name="details" value="<?php echo $details;?>"><br>
         CALENDER:<input type="date"name="calender"required><br><br><br>
         <input type="submit" value="BOOK">
         <button><a href="viewserviceuser.php">CANCEL</a></button>
         <button><a href="userhome.html">GO TO HOME</a></button>
    </form>
     
</div>     
</body>
</html>