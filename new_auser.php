<!DOCTYPE html>
<html>
<head>
<title> MAIT </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="index.css" type="text/css">
		</head>
		
<script>
$(function(){
$("#include_html").load("sidebar.html");
});
</script>
<?php
include "config.php";
include "session.php";

$db = db_open();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$year = $_POST['year'];
	$batch = $_POST['batch'];
	$date = date('Y-m-d');
	if($pass == $cpass)
	{
	mysqli_query($db,"Insert into admin_users(`email`, `name`, `created_at`, `password` , `year` ,`batch`) values ('$email','$name','$date','$pass', '$year' ,'$batch')");
	header("location: ausers.php");
	}
	else
	{
		echo '<script>',"alert('Passwords does not match!');",'</script>';
	}
}
?>
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3" style = "margin-top : 5%;">
<div>
<h2 style ="float: left">Admin User / New Admin User</h2>
</div>
<center>
				<div class="container">
					<div class="row row_style">
						<div class="col-xs-8 col-xs-offset-1" style = "margin-top : 7%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Create a new Admin User</h4>
								</div>
								<div class="panel-body">
									<form class = "inline-form" action = "#" method = "POST">
									
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "email" placeholder = "Email*" required />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "name" placeholder = "Name"  />
											</div>
											<div class = "form-group">
												<input type = "password" class = "form-control" name = "pass" placeholder = "Password*" required />
											</div>
											<div class = "form-group">
												<input type = "password" class = "form-control" name = "cpass" placeholder = "Confirm Password*" required />
											</div>
											<div class = "form-group">
											<select name="year" class = "form-control" required>
												<option value="" placeholder = "Select Year and Shift" >Select Year and Shift</option>
												<option value="2nd_year_1">2nd Year 1st Shift</option>
												<option value="2nd_year_2">2nd Year 2nd Shift</option>
												<option value="3rd_year_1">3rd Year 1st Shift</option>
												<option value="3rd_year_2">3rd Year 2nd Shift</option>
												<option value="4th_year_1">4th Year 1st Shift</option>
												<option value="4th_year_2">4th Year 2nd Shift</option>
											  </select>
											  <br>
											</div>
											<div class = "form-group">
											<select name="batch" class = "form-control" required>
												<option value="" placeholder = "Select Batch" >Select Batch</option>
												<option value="C1">C1</option>
												<option value="C2">C2</option>
												<option value="C3">C3</option>
												<option value="C4">C4</option>
												<option value="C5">C5</option>
												<option value="C6">C6</option>
												<option value="C7">C7</option>
												<option value="C8">C8</option>
												<option value="C9">C9</option>
												<option value="C10">C10</option>
												<option value="C11">C11</option>
												<option value="C12">C12</option>
												<option value="C13">C13</option>												
											  </select>
											  <br>
											</div>
											<div class = "form-group">
											<button class="btn btn-primary" type = "Submit" class = "form-control" > Submit </button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				</center>

</div>
<footer>
		<center>
			<h6> Maharaja Agrasen Institute of Technology </h6>
		</center>
</footer>
</body>
</html>