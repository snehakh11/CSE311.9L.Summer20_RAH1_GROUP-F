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
<h1>Donor Registration</h1>
<center><div id="form">
	<form action="" method="post">
	<table>
		<tr>
			<td><center><b><font color="blue">First Name</font></b></center></td>
			<td><center><b><font color="blue">Last Name</font></b></center></td>
			<td><center><b><font color="blue">Address</font></b></center></td>
			<td><center><b><font color="blue">City</font></b></center></td>
			<td><center><b><font color="blue">Age</font></b></center></td>
			<td><center><b><font color="blue">Blood Group</font></b></center></td>
			<td><center><b><font color="blue">Contact No</font></b></center></td>
			<td><center><b><font color="blue">Email</font></b></center></td>
			</tr>
			<?php
			$q=$db->query("SELECT * FROM donor_registration");
			while($r1=fetchAll(PDO::ASSOC_OBJ))
			{
				?>
			}
			?>
			<tr>
				<td><center><?= $r1->First_name; ?></center></td>
				<td><center><?= $r1->Last_name; ?</center></td>
				<td><center><?= $r1->Address; ?</center></td>
				<td><center><?= $r1->City; ?</center></td>
				<td><center><?= $r1->Age; ?</center></td>
				<td><center><?= $r1->Blood_group; ?</center></td>
				<td><center><?= $r1->Contact_no; ?</center></td>
				<td><center><?= $r1->Email; ?</center></td>
				
		</table>
	</form>
	fdbdf
	<?php
	if (isset($_POST['sub']))
	 {
		$First_name=$_POST['First_name'];
		$Last_name=$_POST['Last_name'];
		$Address=$_POST['Address'];
		$City=$_POST['City'];
		$Age=$_POST['Age'];
		$Blood_group=$_POST['Blood_group'];
		$Contact_no=$_POST['Contact_no'];
		$Email=$_POST['Email'];
		$q=$db->prepare("INSERT INTO donor_registration (First_name,Last_name,Address,City,Age,Blood_group,Contact_no,Email) VALUES
			(:First_name,:Last_name,:Address,:Contact_no,:Age,:Blood_group,:Contact_no,:Email)");
		$q->bindValue('First_name',$First_name)
		$q->bindValue('Last_name',$Last_name)
		$q->bindValue('Address',$Address)
		$q->bindValue('City',$City)
		$q->bindValue('Age',$Age)
		$q->bindValue('Blood_group',$Blood_group)
		$q->bindValue('Contact_no',$Contact_no)
		$q->bindValue('Email',$Email)
		if($q->execute())
		{
			echo "<script>alert('Donor Registration Successful')</script>";
		}
	}
	else
	{
		echo "<script>alert('Donor Registration Failed')</script>";
	}
	?>
</div></center>
</div>





