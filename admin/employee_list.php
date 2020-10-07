<?php
include('Connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee List</title>
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
		 header("Location:admin.php");
		}
		
        ?>
         <div><h1><a href="admin-home.php" style="text-decoration: none;color: red;"></h1></div>
			 <h1 align="center">Employee List</h1><br>
             <center><div id="form">
             	<table>
             	<tr>	
             		<td><center><b><font color="Black">Username</font></b></center></td>
					<td><center><b><font color="Black">Contact Number</font></b></center></td>
					
					
					
			</tr>
			<?php
			$q=$db->query("SELECT * FROM admin");
			while($r1=$q->fetch(PDO::FETCH_OBJ))
			{
				?>
				<tr>
				<td><center><?= $r1->username; ?></center></td>			
				<td><center><?= $r1->contact_no; ?></center></td>
				<td>
						<button type="button" class="btn btn-success">EDIT</button>
					</td>
				
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
