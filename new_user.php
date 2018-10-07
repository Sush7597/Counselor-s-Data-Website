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
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$enroll = $_POST['eno'];
	$year = $_POST['year'];
	$group = $_POST['group'];
	$contact = $_POST['contact'];
	$cetroll = $_POST['cetroll'];
	$cetrank = $_POST['cetrank'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$father_profession = $_POST['father_profession'];
	$category = $_POST['category'];
	$academic_year_id = $_POST['academic_year_id'];
	$batch_id = $_POST['batch_id'];
	$row = mysqli_query($db,"Select from users where E-mail = '$email'");
	$count = mysql_num_rows($row);
	if($count == 0)
	{
	mysqli_query($db,"Insert into users( `E-Mail`, `Password`, `Name`, `Enrollment Number`, `Year`, `Group`,  `Contact`, `CET Roll Number`, `CET Rank`, `Father's Name`, `Mother's Name`, `DOB`, `Gender`, `Address`, `Father's Profession`, `Category`, `Acdemic Year ID`, `Batch ID`) values ('$email','$pass','$name','$enroll','$year', '$group', '$contact', '$cetroll', '$cetrank', '$father_name', '$mother_name', '$dob', '$gender', '$address', '$father_profession', '$category' , '$academic_year_id', '$batch_id')");
	header("location: users.php");
	}
	else
			echo '<script>',"alert('Email Already Exists!');",'</script>';

	
}
?>
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3">
<div>
<h2 style ="float: left"> User / New  User</h2>
</div>
<center>
				<div class="container">
					<div class="row row_style">
						<div class="col-xs-8 col-xs-offset-1" style = "margin-top : 7%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Create a new User</h4>
								</div>
								<div class="panel-body">
									<form class = "inline-form" action = "#" method = "POST">
									
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "email" placeholder = "Email*" required />
											</div>
											<div class = "form-group">
												<input type = "password" class = "form-control" name = "pass" placeholder = "Password*" required  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "name" placeholder = "Name"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "eno" placeholder = "Enrollment Number"  />
											</div>
											<div class = "form-group">
												<input type = "number" class = "form-control" name = "year" placeholder = "Year"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "group" placeholder = "Group"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "contact" placeholder = "Contact"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "cetroll" placeholder = "CET Roll Number"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "cetrank" placeholder = "CET Rank"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "father_name" placeholder = "Father's Name"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "mother_name" placeholder = "Mother's Name"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "dob" placeholder = "DOB"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "gender" placeholder = "Gender"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "address" placeholder = "Address"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "father_profession" placeholder = "Father's Profession"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "category" placeholder = "Category"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "academic_year_id" placeholder = "Academic Year ID"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "batch_id" placeholder = "Batch ID"  />
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
</html>