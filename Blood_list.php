<?php
include('Connection.php');
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
<div id="inner_full">
	<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2> </div>
	<div id="body">
		<br>
		<?php
		$un=$_SESSION['un'];
		if (|$un) 
		{
		 header("Location:index.php");
		}		
?>
<h1>Available Blood List</h1>
<center><div id="form">
	<form action="" method="post">
	<table>
		<tr>
			<td><center><b><font color="blue">Name</font></b></center></td>
			<td><center><b><font color="blue">Qty</font></b></center></td>
			</tr>
			<tr>
				<td><center>O+</center></td>
				<td><center>
				   <?php
				$q=$db->query("SELECT * FROM donor_registration WHERE Blood_group= 'O+'");
				echo $row=$q->rowcount();
				?>
			</center></td>
		</tr>
			<tr>
				<td><center>O-</center></td>
				<td><center>
				   <?php
				$q=$db->query("SELECT * FROM donor_registration WHERE Blood_group= 'O-'");
				echo $row=$q->rowcount();
				?>
				</center></td>
			</tr>
			<tr>
				<td><center>AB+</center></td>
				<td><center>
				   <?php
				$q=$db->query("SELECT * FROM donor_registration WHERE Blood_group= 'AB+'");
				echo $row=$q->rowcount();
				?>
			</center></td>
		</tr>
		<tr>
			<td><center>AB-</center></td>
				<td><center>
				   <?php
				$q=$db->query("SELECT * FROM donor_registration WHERE Blood_group= 'AB-'");
				echo $row=$q->rowcount();
				?>
			</center></td>
		</tr>
		<tr>
			<td><center>B+</center></td>
				<td><center>
				   <?php
				$q=$db->query("SELECT * FROM donor_registration WHERE Blood_group= 'B+'");
				echo $row=$q->rowcount();
				?>
			</center></td>
		</tr>
		<tr>
			<td><center>B-</center></td>
				<td><center>
				   <?php
				$q=$db->query("SELECT * FROM donor_registration WHERE Blood_group= 'B-'");
				echo $row=$q->rowcount();
				?>
			</center></td>
		</tr>

		</table>
	</form>
	?>
</div></center>
</div>





