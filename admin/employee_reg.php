<?php 
include ('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
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
			 <h1 align="center" style="text-decoration: none;color: coral;">Employee Registration</h1><br>
			 <center><div id="form">
			 	<form action="" method="post">
			 	<table>
			 		<tr>
			<td width="200px" height="50px">Enter UserName</td>
			<td width="200px" height="50px"><input type="text" name="username" placeholder="Username"></td>
			<td width="200px" height="50px">Enter Password</td>Password
			<td width="200px" height="50px"><input type="text" name="password" placeholder="Password">
			<td width="200px" height="50px">Enter Contact Number</td>
			<td width="200px" height="50px"><input type="text" name="contact_no" placeholder=" Contact Number"></td>
		</td>
	</tr>
	<tr>
				<td><input type="submit" name="sub" value="Save"></td>
			</tr>
	 	</table>
	</form>
	<?php
	if (isset($_POST['sub']))
	 {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$contact_no=$_POST['contact_no'];
	
		$q=$db->prepare("INSERT INTO admin (username,password,contact_no) VALUES (:username,:password,:contact_no)");
		$q->bindValue('username',$username);
		$q->bindValue('password',$password);
		$q->bindValue('contact_no',$contact_no);
		if($q->execute())
		{
			echo "<script>alert('New Employee Added')</script>";
		}
	
	    else
	    {
		   echo "<script>alert('Unsuccessful')</script>";
		}
		
	}

	?>
	</div></center>
			 
		
</div>
</body>
</html>