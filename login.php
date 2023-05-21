<?php 
$email=$_POST['email'];
$password=$_POST['password'];

//database connection

$conn=mysqli_connect("localhost","root","","orphan");
//mysql_select_db("orphan");
$result=mysqli_query($conn, "select * from adoption where email='$email' and password= '$password' ") or die(mysql_error());
$count=mysqli_num_rows($result);
if($count==0)
{
?>

<script>
alert("admin does not exit");
document.location="adoption.html";
</script>

<?php

}
else
{
while($row=mysqli_fetch_array($result))
{
if($email==$row[0] && $password==$row[1])
{
?>

<script>
alert("login successfull");
document.location="parent.html";
</script>

<?php

}
else
{
?>
<script>
alert("user does not exist");
document.location="adoption.html";
</script>
<?php
}
}
}
?>
