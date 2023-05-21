<html>
<body>
<?php
$vname=$_POST['vname'];
$phone=$_POST['phone'];
$nod=$_POST['nod'];


$conn = mysqli_connect("localhost", "root", "","orphan") or die ("Error connecting to mysql");
// mysqli_select_db('orphan') or die ('Unable to select  database!');

$query="insert into pro2_vol values('$vname','$phone','$nod')";


if (!mysqli_query($conn,$query))
  {
  die('Error: ' . mysqli_error());
  } 
  
 
  
  
  ?>
 <script>
 alert("You have been volunteered"); 
document.location="project.html";
</script>
<?php 
 mysqli_close($conn)
?>
</body>
</html>


