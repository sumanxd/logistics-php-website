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
$block=$_POST['block'];
$week=$_POST['week'];
$production=$_POST['production'];
$damage=$_POST['damage'];
$total=$_POST['total'];
$sales=$_POST['sales'];
$rate=$_POST['rate'];
$machinery=$_POST['machinery'];
$rmaterial=$_POST['rmaterial'];
$labour=$_POST['labour'];
$productivity=$_POST['productivity'];
$sql="INSERT INTO production(block, week,production,damage, total,sales,rate,machinery,rmaterial ,labour,productivity) VALUES
('$block','$week','$production','$damage','$total','$sales','$rate','$machinery','$rmaterial','$labour','$productivity')";
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




















