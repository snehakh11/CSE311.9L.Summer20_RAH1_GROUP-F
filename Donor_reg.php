<?php 
include ('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
	<div id="inner_full">
		<div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management System</a></h2></div>
		<div id="body">
			<br>
			<?php 
             $un=$_SESSION['un'];
             if(!$un)
             {
             	header("Location:index.php");
             }
			 ?>
			 <h1 align="center" style="text-decoration: none;color: coral;">Donor Registration</h1><br>
			 <center><div id="form">
			 	<form action="" method="post">
			 	<table>
			 		<tr>
			<td width="200px" height="50px">Enter First Name</td>
			<td width="200px" height="50px"><input type="text" name="First_name" placeholder=" Enter First Name"></td>
			<td width="200px" height="50px">Enter Last Name</td>
			<td width="200px" height="50px"><input type="text" name="Last_name" placeholder="Enter Last Name">
		</td>
	</tr>
		<tr>
			<td width="200px" height="50px">Enter Address</td>
			<td width="200px" height="50px"><textarea name="Address"></textarea></td>
			<td width="200px" height="50px">Enter City</td>
			<td width="200px" height="50px"><input type="text" name="City" placeholder="Enter City"></td>
    </tr>
		<tr>
			<td width="200px" height="50px">Enter Age</td>
			<td width="200px" height="50px"><input type="text" name="Age" placeholder="Enter Age"></td>
			<td width="200px" height="50px">Select Blood Group</td>
			<td width="200px" height="50px">
				<select name="Blood_group">
					<option>O+</option>
					<option>O-</option>
					<option>A+</option>
					<option>A-</option>
					<option>AB+</option>
					<option>AB-</option>
					<option>B+</option>
					<option>B-</option>
				</select>
				</td>
			</tr>
			<tr>
				<td width="200px" height="50px">Enter Email</td>
			<td width="200px" height="50px"><input type="text" name="Email" placeholder="Enter Email"></td>
			<td width="200px" height="50px">Enter Contact No</td>
			<td width="200px" height="50px"><input type="text" name="Contact_no" placeholder="Enter Contact No"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sub" value="Save"></td>
			</tr>
	 	</table>
	</form>
	
	<?php
	if (isset($_POST['sub']))
	 {
		$First_name=$_POST['First_name'];
		$Last_name=$_POST['Last_name'];
		echo $Address=$_POST['Address'];
		$City=$_POST['City'];
		echo $Age=$_POST['Age'];
		$Blood_group=$_POST['Blood_group'];
		$Contact_no=$_POST['Contact_no'];
		$Email=$_POST['Email'];
		$q=$db->prepare("INSERT INTO donor_registration (First_name,Last_name,Address,City,Age,Blood_group,Contact_no,Email) VALUES
			(:First_name,:Last_name,:Address,:Contact_no,:Age,:Blood_group,:Contact_no,:Email)");
		$q->bindValue('First_name',$First_name);
		$q->bindValue('Last_name',$Last_name);
		$q->bindValue('Address',$Address);
		$q->bindValue('City',$City);
		$q->bindValue('Age',$Age);
		$q->bindValue('Blood_group',$Blood_group);
		$q->bindValue('Contact_no',$Contact_no);
		$q->bindValue('Email',$Email);
		if($q->execute())
		{
			echo "<script>alert('Donor Registration Successful')</script>";
		}
	
	    else
	    {
		   echo "<script>alert('Donor Registration Failed')</script>";
		}
		
	}

	?>

			 

		</div></center>
			 
		</div><br><br><br>
		<div id="footer"><h4 align="center">Donate Blood To Save Lives</h4>
		<p align="center"><a href="logout.php"><font color="blue">Logout</font></a></p>
	    </div>
</div>
</body>
</html>