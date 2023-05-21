
<?php
include("dbcon.php");
$email= $_POST['email'];
$table=$_POST['table'];


$conn = mysqli_connect("localhost", "root", "","orphan") or die ("Error connecting to mysql");
// mysql_select_db('orphan') or die ('Unable to select  database!');

$query="DELETE FROM $table WHERE email = '$email' ";

  
if (!mysqli_query($conn,$query))
  {
  die('Error: ' . mysqli_error());
  } 
   
  ?>
 <script>
 alert(" RECORD DELETED "); 
document.location="admin_del.html";
</script>
<?php 
 mysql_close($conn)
?>