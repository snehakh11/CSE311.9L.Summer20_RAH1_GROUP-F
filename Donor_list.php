<?php
include('Connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>

<div id="full">
	<div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management System</a></h2></div>
	<div id="body">
		<br>
		<?php
		$un=$_SESSION['un'];
		if (!$un) 
		{
		 header("Location:index.php");
		}
		
        ?>
        <div><h1><a href="admin-home.php" style="text-decoration: none;color: red;"></h1></div>
			 <h1 align="center">Donor List</h1><br>
             <center><div id="form">
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
			while($r1=$q->fetch(PDO::FETCH_OBJ))
			{
				?>
				<tr>
				<td><center><?= $r1->First_name; ?></center></td>
				<td><center><?= $r1->Last_name; ?></center></td>
				<td><center><?= $r1->Address; ?></center></td>
				<td><center><?= $r1->City; ?></center></td>
				<td><center><?= $r1->Age; ?></center></td>
				<td><center><?= $r1->Blood_group; ?></center></td>
				<td><center><?= $r1->Contact_no; ?></center></td>
				<td><center><?= $r1->Email; ?></center></td>
			</tr>
				<?php
				
			}
			?>				
		</table>
		</div></center>
</div>
</div><br><br><br>
		<div id="footer">
		<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
	    </div>
</div>
</body>
</html>	
