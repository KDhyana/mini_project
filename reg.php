

<html>
<body>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mfname=$_POST['mfname'];
$mlname=$_POST['mlname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$city=$_POST['city'];
$fage=$_POST['fage'];
$mage=$_POST['mage'];
$password=$_POST['password'];



$conn = mysqli_connect("localhost", "root", "","orphan") or die ("Error connecting to mysql");
//mysql_select_db('orphan') or die ('Unable to select  database!');


$query="insert into reg values('$fname','$lname','$mfname','$mlname','$email','$phone','$country','$city','$fage','$mage','$password')";

$query1="insert into adoption values('$email','$password')";


if (!mysqli_query($conn, $query))
  {
  die('Error: ' . mysqli_error());
  } 
  
 if (!mysqli_query($conn, $query1))
  {
  die('Error: ' . mysqli_error());
  } 
  
  
  
  ?>
 <script>
 alert("you registered successfull please enter the login details"); 
document.location="adoption.html";
</script>
<?php 
 mysql_close($conn)
?>
</body>
</html>




