<?php
include("connection.php");

error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<style type="text/css">
		.bg{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.form-container{
			background: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
		}
	</style>

	
	
</head>
<body class="bg">

		<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"></a>
		</div>
	</header>
	<!--<h2 align="center" color="black" font-weight=30px>Admin Login Form</h2>
		<form  method="POST" action="adminloginvalidate.php" align="center">
                   
                        
				<P>Enter Username:</p>
				<input type="text" name="username">
				<P>Enter Password:</p>
				<input type="password" name="pass">

				<br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
			</form>-->


			<h2 align="center" font-weight=30px><b>Admin Login Form</b></h2>


			
						<form class="form-container" method="POST" action="adminloginvalidate.php">
							<div class="form-group">
								<label for="ex">Username</label>
								<input type="name" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" name="pass">
							</div>
							
							<button type="submit" value="submit" name="submit" class="btn btn-primary">Login</button>
						</form>
						
					

		</body>
		</html>