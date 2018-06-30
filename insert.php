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
$supplier=$_POST['supplier'];
$material=$_POST['material'];
$bags=$_POST['bags'];
$vehicle=$_POST['vehicle'];
$rate=$_POST['rate'];
$payment=$_POST['payment'];
$gross=$_POST['gross'];
$tare=$_POST['tare'];
$bagw=$_POST['bagw'];
$net=$_POST['net'];
$remark=$_POST['remark'];
$sql="INSERT INTO material(supplier, material,bags,vehicle, rate,payment,gross,tare,bagw ,net,remark) VALUES
('$supplier','$material','$bags','$vehicle','$rate','$payment','$gross','$tare','$bagw','$net','$remark')";
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




















