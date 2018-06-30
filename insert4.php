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
$bill=$_POST['bill'];
$name=$_POST['name'];
$payment=$_POST['payment'];
$amount=$_POST['amount'];

$sql="INSERT INTO payment(bill, name, payment,amount ) VALUES ('$bill','$name','$payment','$amount')";
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




















