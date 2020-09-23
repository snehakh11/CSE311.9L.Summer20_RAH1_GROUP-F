

?>
<h1>Donor Registration</h1>
<center><div id="form">
	<form action="" method="post">
	<table>
		<tr>
			<td width="200px" height="50px">Enter First Name</td>
			<td width="200px" height="50px"><input type="text" name="First_name" placeholder="Enter First Name"></td>
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
			<td width="200px" height="50px"><input type="text" name="Age"> placeholder="Enter Age"></td>
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
