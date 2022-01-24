<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="template.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		.row{
			margin-top: 12%;
		}
		input{
			margin:20px auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 bg-success p-4 rounded">
				<h1 class="text-center m-3 ">Registration Form</h1>
				<form class="form-group" action="" method="POST">
					<input type="text" name="name" placeholder="Full Name" class="form-control">
					<input type="text" name="fathername" placeholder="Father`s Name" class="form-control">
					<input type="text" name="city" placeholder="City" class="form-control">
					<input type="text" name="number" placeholder="Mobile Number" class="form-control">
					<button type="submit" name="submit" class="btn btn-info form-control">SUBMIT</button>
				</form>
				<?php 					
					$con = mysqli_connect("localhost","root","","stu","3308");
					if (isset($_POST['submit'])) {
						$name1=$_POST['name'];
						$city1=$_POST['city'];
						$fathername1 =$_POST['fathername'];
						$number1 =$_POST['number'];
						$sql = "INSERT INTO studetail VALUES('$name1','$fathername1','$city1','$number1')";
						mysqli_query($con,$sql);
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>