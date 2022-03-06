<html>
<head>
<title>update profile</title>
<style>
    body{
        background-image: url('https://wallpapercave.com/wp/wp3514122.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<a href="userhome.html"><p align="right">HOME</p></a>
</head>

<body>
<h1><center>PROFILE UPDATE</center></h1>

<form action="userprofile_updateconn.php" method="post">
<table align="center">
<center><tr><th></th><td><input type="hidden" name="mid" autofocus required readonly value=<?php session_start(); $mid = $_SESSION['mid']; echo $mid; ?></td></tr></center>
<tr><td>Name:</td>
<td><input type="text" name="name" required autofocus></td></tr>
<tr><td>Email:</td>
<td><textarea type="text" name="email" required></textarea></td></tr>
<tr><td>Mobile:</td>
<td><input type="text" name="phoneNo" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
<tr><td>Vehicle:</td>
<td><input type="text" name="vehicle" required autofocus></td></tr>
<tr><td>Password:</td>
<td><input type="text" name="password" minlength="6" required autofocus></td></tr>
</table>
<center><input type="submit" value="UPDATE"></center>
</form>
</body>
</html>