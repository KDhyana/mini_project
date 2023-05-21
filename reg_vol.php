<html>
<body>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$nation=$_POST['nation'];
$work=$_POST['work'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];



$conn = mysqli_connect("localhost", "root", "","orphan") or die ("Error connecting to mysql");
// mysql_select_db('orphan') or die ('Unable to select  database!');

$query="insert into reg_vol values('$fname','$lname','$dob','$gender','$address','$nation','$work','$age','$email','$password');";
$result=mysqli_query($conn,$query) or die('volunteer already existed.');

if (!mysqli_query($conn,$query))
  {
  die('Error: ' . mysqli_error());
  } 
  
 
  
  
  ?>
 <script>
 alert("you registered successfull please enter the login details"); 
document.location="volunteer.html";
</script>
<?php 
 mysqli_close($conn)
?>
</body>
</html>
