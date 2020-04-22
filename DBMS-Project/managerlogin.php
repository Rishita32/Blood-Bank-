<?php

	$connection=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($connection,'manager');
	if(isset($_REQUEST['submit']))
	{
		$user=$_REQUEST['_email'];
		$pass=$_REQUEST['_password'];
		$sql="SELECT email,password from managerlogin where email='$user' && password='$pass'";
		$query=mysqli_query($connection,$sql) or die ('Unable to execute query. '. mysqli_error($connection));
		$rowcount=mysqli_num_rows($query);
		if($rowcount==true)
		{
			header("location: managerpage.php");
			exit;
		}
		else
		{
			echo "Invalid email or password!! Try again";
		}
	}
?>