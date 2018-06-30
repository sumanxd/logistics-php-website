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
$rname=$_POST['rname'];
$ramount=$_POST['ramount'];

$sql="INSERT INTO rpayment(rname,ramount) VALUES ('$rname','$ramount')";
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




















