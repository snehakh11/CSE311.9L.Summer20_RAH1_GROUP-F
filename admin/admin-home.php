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
			 
			 <br><br><br><br>
			<ul> 		
				<li><a href="Donor_reg.php">Donor Registration</a></li>	
				
				<li><a href="Donor_list.php">Donor List</a></li>							
				<li><a href="Blood_list.php">Blood In Stock</a></li>				
				
			</ul>
			
			

		</div>
		<div id="footer"><h4 align="center">Donate Blood To Save Lives</h4>
		<p align="center"><a href="logout.php"><font color="blue">Logout</font></a></p>
	    </div>
</div>
</body>
</html>