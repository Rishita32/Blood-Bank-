<?php

	$connect=mysqli_connect('localhost','root','');
	$database=mysqli_select_db($connect,'donor');
	if(isset($_POST['submit']))
	{
		$name=$_POST['hospital_name'];
		$address=$_POST['address'];
		$pin=$_POST['_pincode'];
		$phone=$_POST['_phone'];
		$group=$_POST['_group'];
		$sql="INSERT INTO hospitallogin(name,address,pincode,phoneno,blood_group) values('$name' , '$address' , '$pin' , '$phone' , '$group')";
		$query=mysqli_query($connect,$sql) or die ('Unable to execute query. '. mysqli_error($connect));
		if(!$query)
		{

			echo "Registration Failed !!";
		}
		else
		{
			echo "<script> $('#myModal').modal(show)</script>";
		}
	}
	mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Dlogin.css"> 
</head>

<body background="back.jpg">
	
		<div class="container">
			<br/><br/><br/><div class="sign-up form">
					<br/><h4 align="center" >Please fill the form for Registration </h4>
					<hr>
			    	<form action="Hospitallogin.php" method="post">

			    		<div class="row">

				    		<div class="col-xs-5 col-sm-5 col-md-5">
				    				<div class="form-group">
				    					<input type="text" name="hospital_name" class="form-control" placeholder="Hospital Name" required="required">
				    				</div>
				    		</div>

				    		<div class="col-xs-5 col-sm-5 col-md-5">
				    			<div class="form-group">
				    					<input type="text" name="address" class="form-control" placeholder="Address" required="required">
				    			</div>					
			    			</div>

			    		</div>
			    		<br/>
			    		<div class="row">

				    		<div class="col-xs-5 col-sm-5 col-md-5">
				    			<div class="form-group">
				    					<input type="txt" name="_pincode" class="form-control" placeholder="Pincode" required="required">
				    			</div>
				    		</div>
			
				    			<div class="col-xs-5 col-sm-5 col-md-5">
				    				<div class="form-group">
				    					<input type="tel" id="phone" name="_phone" class="form-control"  placeholder="Phone Number" required>
				    				</div>
				    			</div>
			    		</div>
			    		<br/>
			    		<div class="row">
				    		<div class="col-xs-5 col-sm-5 col-md-5">
				    			<div class="form-group">
				    				<select class="form-control" name="_group" >
				                        <option class="hidden"  selected disabled>Blood Group Required</option>
				                            <option>A+ve</option>
				                            <option>A-ve</option>
				                            <option>B+ve</option>
				                            <option>B-ve</option>
				                            <option>O+ve</option>
				                            <option>O-ve</option>
				                            <option>AB+ve</option>
				                            <option>AB-ve</option>
                                   </select>
				   				</div>
				    		</div>
			    		</div>

			    		<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label class="checkbox-inline"><input type="checkbox" required="required">I accept the <a href="terms.html">terms</a>	
								</label>
						</div>

                        <div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type="submit" class="btn btn-primary btn-lg" name="submit" onclick="myfunction()"> Confirm Request</button>
						</div>	
			    	</form>	
			</div>
		</div>	
		<script type="text/javascript">
			function myfunction()
			{
				confirm("Press 'Ok' for Confirmation");
			}
		</script>   	
</body>
</html>
