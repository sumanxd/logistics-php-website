<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'insert'))
{
	echo 'database not selected';
}
$sale=$_POST['sale'];
$nstock=$_POST['nstock'];
$cstock=$_POST['cstock'];

$sql="INSERT INTO sales(sale, nstock, cstock) VALUES ('$sale','$nstock','$cstock')";
if(!mysqli_query($con,$sql))
{
	echo '<script type="text/javascript">alert("Problem in database");</script>';
}
else
{
	echo '<script type="text/javascript">alert("Data inserted successfully");</script>';
}
header("refresh:0; url=index.html");

?>




















