

<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View  Marks</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

	<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.a{
			margin-left: 500px;
		}
	</style>
	
</head>
<body>

	
</div>
</header>




			<div class="a">



				<div class="card">

					<h5 class="card-header info-color white-text text-center py-4">
						<strong style="color: black;">Mark View</strong>
					</h5>


					<div class="card-body px-lg-5 pt-0">


						<form class="text-center" style="color: black;" method="POST">

							
								<div class="col">

									<div class="md-form">
										<label for="">Semester</label>
										<input type=" " id="" class="form-control" name="cid">
									</div>
								</div>
							</div>


							<div class="md-form mt-0">
								<label for="">Course Id</label>
								<input type="" id="" class="form-control" name="subid">

							</div>

							<div class="md-form mt-0">
								<label for="">Term</label>
								<input type="" id="" class="form-control" name="term">

							</div>

							<div class="md-form">
								<label for="">Session</label>
								<input type="" id="" class="form-control" aria-describedby="" name="session">


							</div>


							<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>



						</form>

					</div>

				</div>

				<br>
				<br>

				<div class="container">
					<div class="jumbotron">
						<div class="card">
							<h5 class="card-header">View Updated Marks</h5>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<table class="table table-dark table-hover table-bordered">
									<thead>
										<tr>
											<th scope="col">Student ID</th>
											<th scope="col">Course Id</th>
											<th scope="col">Semester</th>
											<th scope="col">Session</th>
											<th scope="col">Term</th>
											<th scope="col">Marks</th>
										</tr>

									</thead>
									<tbody>
										<tr>


										</div>
									</div>

								</div>
							</div>


							<?php

							if(isset($_POST['submit']))
							{
							
								$cid=$_POST['cid'];
								$subid=$_POST['subid'];
								$session=$_POST['session'];
								$term=$_POST['term'];


								$query= "select * from grade as g
								where g.session='$session' AND g.courseid='$subid' AND g.classid='$cid' AND g.term='$term' 
								;

								";
								$res= mysqli_query($conn,$query);
								if(!$res)
								{
									echo "<script type='text/javascript'>alert('Query Failed!')</script>";
								}

								else {

									while($row = mysqli_fetch_assoc($res))
									{

										echo "<td>";
										echo $row['studentid'];
										echo "</td>";


										echo "<td>";
										echo $row['courseid'];
										echo "</td>";


										echo "<td>";
										echo $row['classid'];
										echo "</td>";

										echo "<td>";
										echo $row['session'];
										echo "</td>";

										echo "<td>";
										echo $row['term'];
										echo "</td>";

										echo "<td>";
										echo $row['grade'];
										echo "</td>";
										echo "</tr>";



									}

								}
							}



							?>
						</div>
					</tr>
				</tbody>
			</table>
			
		</body>
		</html>
