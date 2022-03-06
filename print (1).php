<html>
<body>
<table>
<tr> <th>student_id</th>
     <th>First_name</th>
     <th>Last_name</th>
</tr>
<?php
include('connection.php');
$sql="SELECT * from tba_student";
$res=mysqli_query($link,$sql);
if($res)
 {
  while($row=mysqli_fetch_row($res))
  {
   ?>
   <tr> <td> <?php echo $row[0] ; ?> </td>
        <td> <?php echo $row[1] ; ?> </td>
        <td> <?php echo $row[2] ; ?> </td>
   </tr>
<?php
  }
 }
?>
</table>
</body>
</html>
 

