<html>
<body>
<?php
$cno=$_POST['cno'];
$expries=$_POST['expries'];
$cvv=$_POST['cvv'];
$amount= $_POST['amount'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$postcode=$_POST['postcode'];
$pno=$_POST['pno'];
$email=$_POST['email'];




$conn = mysqli_connect("localhost", "root", "","orphan") or die ("Error connecting to mysql");
// mysqli_select_db('orphan') or die ('Unable to select  database!');

$query="insert into pro2_vol_fin values('$cno','$expries','$cvv','$amount','$fname','$lname','$address','$country','$state','$postcode','$pno','$email')";


if (!mysqli_query($conn,$query))
  {
  die('Error: ' . mysqli_error());
  } 
  
 
  
  
  ?>
 <script>
 alert("Your payment have succesfully done !. The billing is sent to the given address...Thank you for volunteering"); 
document.location="project.html";
</script>
<?php 
 mysqli_close($conn)
?>
</body>
</html>

