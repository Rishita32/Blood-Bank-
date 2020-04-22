<!DOCTYPE html>
<html>
<head>
	<title>Hospital Registrations</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src='https://kit.fontawesome.com/a076d05399.js'></script>
			<link rel="stylesheet" type="text/css" href="frontpage.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

			<style type="text/css">
				body,th
				{
					font-family: Comic Sans MS, cursive, sans-serif;
					text-align: center;
					font-size: 16px;
				}
			</style>
</head>
<body>
	<h3 align="center">Hospital Registrations</h3>
		<br/>
		<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th >Hospital Name</th>
				<th>Address Name</th>
				<th>Pincode</th>
				<th>Mobile Number</th>
				<th>Blood Group</th>
			</tr>
		</thead>

		<?php

			$connection=mysqli_connect('localhost','root','');
			$db=mysqli_select_db($connection,'donor');
			if($connection-> connect_error )
			{
				die("Connection with Database Failed!!".$connection-> connect_error);
			}
			$sql="SELECT name,address,pincode,phoneno,blood_group from hospitallogin" ;
			$result=$connection-> query($sql);
			if($result-> num_rows>0)
			{
				while ($row=$result->fetch_assoc()) 
				{
					echo "<tr><td>". $row["name"]."</td><td>". $row["address"]."</td><td>". $row["pincode"]."</td><td>". $row["phoneno"]. "</td><td>". $row["blood_group"]."</td></tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "No result to display";
			}
			$connection-> close();
		?>
	</table>	
	<ul class="pagination">
		  <li><a href="managerpage.php">1</a></li>
		  <li class="active"><a href="hospital.php">2</a></li>
	</ul>
</body>
</html>