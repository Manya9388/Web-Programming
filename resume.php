<html>
<body>
<head>
<title>
resume
</title>
</head>
<?php
$name="Vikash Rao Teela";
$address="278,Himalaya Nivas
          <p>near Akash Hotel</p>
          Adarsh Nagar<br><br>
          566004";
$email="Email id:vikash@yahoo.com";
$phone="Phone:906754934";
$career="Career Objective:";
$obj=" Keeping in my view my academic knowledge,proffesional skills and personal strenghts.
      I can secure challenging position to work in a globally competitive environment. ";
echo "<h1>$name</h1>";
echo "$address<br>";
echo"<pre align='right'>$email</pre>";
echo"<pre align='right'>$phone</pre><hr width=100%>";
echo"<h3>$career</h3>";
echo"$obj";
echo"<h3>Academic Review</h3>";
?>
<table border="2" width="950">
  <tr>
    <th>Qualifications</th>
    <th>University board</th>
    <th>Marks</th>
  </tr>
  <tr>
    <td>Btech</td>
    <td>KU</td>
    <td>63</td>
  </tr>
  <tr>
    <td>MCA</td>
    <td>KTU</td>
    <td>90</td>
  </tr>
</table>
<?php

$achievements="<h4>Achievements:</h4>";
$achi="Won many prizes in elocution and competitions.<br><br>";
$personal="<h4>Personal Skills:</h4>
           optimist
          <p>zeal and willingness  to learn</p>
          Proactiveness<br><br>";
echo"$achievements";
echo"$achi";
echo"$personal";
?>
</body>
</html>