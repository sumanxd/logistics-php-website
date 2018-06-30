<?php
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMIN PAGE</title>
<link rel="shortcut icon" href="photos/1.jpg">  
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
	.form-control{
		border-radius:15px;
		width:500px;
		height:45px;
		background-color:white;
		margin-top:10px;
		color:black;
		font-size:17px;
	}
	th{
		text-align:center;
	}
	.control-label{
	color:white;
	font-size:22px;
	font-weight:500;
	margin-top:10px;
	font-family:times;
	}
	.nav nav-pills:hover{
	color:red;
	}
</style>
</head>
<body>
	<div Class="container" style="width:100%"> <!--  Container Starts -->
	 <a href="admin/logout.php" class="btn btn-info btn-lg" style="float:right;">
						  <span class="glyphicon glyphicon-log-out"></span> Log out
						</a>
		<div  id="tabs"  style="margin-top:60px; border:none" >
			<ul style="background:pink; margin-bottom:30px;"> <!-- Tabs Navigation -->
				<li class="reddy active col-md-2 col-xs-6" ><a href="#material"><b>Raw Material</b></a></li>
				<li class="reddy col-md-2 col-xs-6 " ><a href="#production"><b>Production</b></a></li>
				<li class="reddy col-md-2 col-xs-6" ><a href="#sales"><b>Sales</b></a></li>
				<li class="reddy col-md-2 col-xs-6" ><a href="#payment"><b>Payment</b></a></li>
				<li class="reddy col-md-2 col-xs-6"><a href="#rpayment"><b>Received Payment</b></a></li>
				<li class="reddy col-md-2 col-xs-6"><a href="#items"><b>Items Oening Stock</b></a></li>
				
			</ul>
			
	
			<div id="material"> <!--  Raw Material Tab-->

				<div class="row col-md-12 custyle">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
    
							<tr>
								<th>S.No</th>
								<th>Name Of Supplier</th>
								<th>Date</th>
								<th>Material</th>
								<th>No Of Bags</th>
								<th>Vehicle No</th>
								<th>Rate</th>
								<th>Payment Condition</th>
								<th>Gross Weight</th>
								<th>Tare Weight</th>
								<th>Bags Weight</th>
								<th>Nett Weight</th>
								<th>Remarks</th>
								<th colspan="2" >Action</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from material ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["supplier"]; ?></td>
								<td align="center"><?php echo $row["date"]; ?></td>
								<td align="center"><?php echo $row["material"]; ?></td>
								<td align="center"><?php echo $row["bags"]; ?></td>
								<td align="center"><?php echo $row["vehicle"]; ?></td>
								<td align="center"><?php echo $row["rate"]; ?></td>
								<td align="center"><?php echo $row["payment"]; ?></td>
								<td align="center"><?php echo $row["gross"]; ?></td>
								<td align="center"><?php echo $row["tare"]; ?></td>
								<td align="center"><?php echo $row["bagw"]; ?></td>
								<td align="center"><?php echo $row["net"]; ?></td>
								<td align="center"><?php echo $row["remark"]; ?></td>
								<td align="center"><a class='btn btn-info btn-xs pad' href="editnew.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
								<td align="center"><a href="deletenew.php?id=<?php echo $row["id"]; ?>"   onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a></td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
					</div>
				</div>
			</div> <!--  Raw Material Tab-->

			<div id="production" > <!--Production Tab  -->

				<div class="row col-md-12 custyle">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Block</th>
								<th>Week</th>
								<th>Date</th>
								<th>Production</th>
								<th>Damage</th>
								<th>Total</th>
								<th>Sales</th>
								<th>Rate</th>
								<th>Machinery</th>
								<th>Remaining Material</th>
								<th>Labour</th>
								<th>Productivity</th>
								<th colspan="2" >Action</th>
							</tr>
						</thead>




						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from production ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["block"]; ?></td>
								<td align="center"><?php echo $row["week"]; ?></td>
								<td align="center"><?php echo $row["date"]; ?></td>
								<td align="center"><?php echo $row["production"]; ?></td>
								<td align="center"><?php echo $row["damage"]; ?></td>
								<td align="center"><?php echo $row["total"]; ?></td>
								<td align="center"><?php echo $row["sales"]; ?></td>
								<td align="center"><?php echo $row["rate"]; ?></td>
								<td align="center"><?php echo $row["machinery"]; ?></td>
								<td align="center"><?php echo $row["rmaterial"]; ?></td>
								<td align="center"><?php echo $row["labour"]; ?></td>
								<td align="center"><?php echo $row["productivity"]; ?></td>



								<td align="center">
								<a class='btn btn-info btn-xs pad' href="edit1.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>

								</td>
								<td align="center">


								 <a href="delete1.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>



							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>			
				</div>
			</div> <!-- Production Tab End -->

			<div id="sales"> <!--  Sales Tab -->

				<div class="row col-md-12 custyle">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><strong>S.No</strong></th>
								<th><strong>Date</strong></th>
								<th><strong>Sales</strong></th>
								<th><strong>Nett Stock</strong></th>
								<th><strong>Closing Stock</strong></th>
								<th colspan="2" >Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from sales ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["date"]; ?></td>
								<td align="center"><?php echo $row["sale"]; ?></td>
								<td align="center"><?php echo $row["nstock"]; ?></td>
								<td align="center"><?php echo $row["cstock"]; ?></td>


								<td align="center">
								<a class='btn btn-info btn-xs pad' href="edit2.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>

								</td>
								<td align="center">


								 <a href="delete2.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
				</div>
			</div> <!-- Sales Tab End -->


			<div id="payment"> <!--  Payments Tab -->

				<div class="row col-md-12 custyle">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><strong>S.No</strong></th>
								<th><strong>Date</strong></th>
								<th><strong>Type of bill</strong></th>
								<th><strong>Name</strong></th>
								<th><strong>Payment type</strong></th>
								<th><strong>Amount</strong></th>
								<th colspan="2" >Action</th>

							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from payment ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["date"]; ?></td>
								<td align="center"><?php echo $row["bill"]; ?></td>
								<td align="center"><?php echo $row["name"]; ?></td>
								<td align="center"><?php echo $row["payment"]; ?></td>
								<td align="center"><?php echo $row["amount"]; ?></td>

								<td align="center">
								<a class='btn btn-info btn-xs pad' href="edit3.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>

								</td>
								<td align="center">


								 <a href="delete3.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
				</div>
			</div> <!-- Payments Tab -->

			<div id="rpayment"> <!--  Received Payment Tab -->

				<div class="row col-md-12 custyle">
				
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><strong>S.No</strong></th>
								<th><strong>Date</strong></th>
								<th><strong>Receiver Name</strong></th>
								<th><strong>Amount</strong></th>
								<th colspan="2" >Action</th>

							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from rpayment ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["date"]; ?></td>
								<td align="center"><?php echo $row["rname"]; ?></td>
								<td align="center"><?php echo $row["ramount"]; ?></td>


								<td align="center">
								<a class='btn btn-info btn-xs pad' href="edit4.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>

								</td>
								<td align="center">


								 <a href="delete4.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
				</div>
			</div> <!-- Received Payment Tab End -->

			<div id="items"> <!-- Opening stock Tab -->

				<div class="row col-md-12 custyle">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><strong>S.No</strong></th>
								<th><strong>Material 1</strong></th>
								<th><strong>Material 2</strong></th>
								<th><strong>Material 3</strong></th>
								<th><strong>Material 4</strong></th>
								<th><strong>Material 5</strong></th>
								<th colspan="2" >Action</th>

							</tr>
						</thead>
						<tbody>
							<?php
							$count=1;
							$sel_query="Select * from items ORDER BY id desc;";
							$result = mysqli_query($con,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["m1"]; ?></td>
								<td align="center"><?php echo $row["m2"]; ?></td>
								<td align="center"><?php echo $row["m3"]; ?></td>
								<td align="center"><?php echo $row["m4"]; ?></td>
								<td align="center"><?php echo $row["m5"]; ?></td>


								<td align="center">
								<a class='btn btn-info btn-xs pad' href="edit5.php?id=<?php echo $row["id"]; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>

								</td>
								<td align="center">


								 <a href="delete5.php?id=<?php echo $row["id"]; ?>" onclick="return confirm(' Are you sure to delete this record?');" class="btn btn-danger btn-xs pad"><span class="glyphicon glyphicon-remove" ></span> Delete</a>

								</td>
							</tr>
							<?php $count++; } ?>
						</tbody>
					</table>
				</div>
			</div>  <!-- End Of Opening Stock  -->

		</div> <!-- Tabs End -->


	</div>  <!-- Container -->

</body>
</html>