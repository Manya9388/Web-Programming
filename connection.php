<?php
$link=mysqli_connect("localhost","root","","vehicle");
if($link === false)
{
die("ERROR".mysqli_connect_error());
}
?>