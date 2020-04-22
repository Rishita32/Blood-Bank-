<?php

	$connection=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($connection,'donor');
	if(isset($_POST['submit']))
	{
		$fname=$_POST['_fname'];
		$lname=$_POST['_lname'];
		$email=$_POST['_email'];
		$phone=$_POST['_phone'];
		$age=$_POST['_age'];
		$group=$_POST['_group'];
		$sql="INSERT INTO donorlogin(firstname,lastname,email,phoneno,age,blood_group) values('$fname' , '$lname' , '$email' , '$phone' , '$age' , '$group')";
		$query=mysqli_query($connection,$sql) or die ('Unable to execute query. '. mysqli_error($connection));
	}
	mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="Dlogin.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body background="back.jpg">
	
		<div class="container">
			<div class="sign-up form">
				<br/><h4 align="center" style=" font-weight: 900 ; color:#cc0000;"><i class="fas fa-quote-left "></i> Remember that the happiest people are not those getting more, but those giving more.<i class="fas fa-quote-right "></i></h4><br/>
					<h4 align="center" >Please fill the form for Registration </h4><br/>
					<hr>
			    	<form  action="Donorlogin.php" method="post">

			    		<div class="row">

				    		<div class="col-xs-4 col-sm-4 col-md-4">
				    				<div class="form-group">
				    					<input type="text" name="_fname" class="form-control" placeholder="First Name" required="required">
				    				</div>
				    		</div>

				    		<div class="col-xs-4 col-sm-4 col-md-4">
				    			<div class="form-group">
				    					<input type="text" name="_lname" class="form-control" placeholder="Last Name" required="required">
				    			</div>					
			    			</div>

			    		</div>
			    		<br/>
			    		<div class="row">

				    		<div class="col-xs-4 col-sm-4 col-md-4">
				    			<div class="form-group">
				    					<input type="email" name="_email" class="form-control" placeholder="Email" required="required">
				    			</div>
				    		</div>
			
				    			<div class="col-xs-4 col-sm-4 col-md-4">
				    				<div class="form-group">
				    					<input type="tel" id="phone" name="_phone" class="form-control" placeholder="Phone Number [ 9420496351 ]"required>
				    				</div>
				    			</div>
			    		</div>
			    		<br/>
			    		<div class="row">
				    		<div class="col-xs-4 col-sm-4 col-md-4">
				    				<div class="form-group">
				    					<input type="text" name="_age" class="form-control" placeholder="Age" required="required">
				    				</div>
				    		</div>
				    
				    		<div class="col-xs-4 col-sm-4 col-md-4">
				    			<div class="form-group">
				    				<select class="form-control" name="_group">
				                        <option class="hidden"  selected disabled>Blood Group</option>
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
								<button type="submit" class="btn btn-primary btn-lg" name= "submit" onclick="myfunction()"> Confirm Registration</button>
						</div>	
			    	</form>	
			</div>
		</div>  

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    		<div class="modal-dialog">
        		<div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
            </div>
            <div class="modal-body">
                <p>Thanks for getting in touch!</p>                     
            </div>    
        </div>
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
