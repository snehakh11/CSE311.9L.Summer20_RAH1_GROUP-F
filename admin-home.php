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
		<div id="header"><h2> Blood Bank Management System</h2></div>
		<div id="body">
			<br>
			<?php 
             $un=$_SESSION['un'];
             if(!$un)
             {
             	header("Location:index.php");
             }
			 ?>
			<h1>WELCOME!!!!!!</h1>
			

		</div>
		<div id="footer"><h4 align="center">Donate Blood Save Lives</h4></div>
		<p align="center"><a href="logout.php"><font color="maroon">Logout</font><a></p>
	</div>
</div>
</body>
</html>