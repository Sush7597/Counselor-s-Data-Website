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
	$course = $_POST['course'];
	$po = $_POST['po'];
	$value = $_POST['value'];
	$ayear = $_POST['ayear'];
	mysqli_query($db,"Insert into pov(`course`, `program_outcome`, `value`, `ayear`) values ('$course','$po','$value','$ayear')");
	header("location: pov.php");
	
}
?>
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3" style = "margin-top : 5%;">
<div>
<h2 style ="float: left">Program Outcome Values / New Program Outcome Value</h2>
</div>
<center>
				<div class="container">
					<div class="row row_style">
						<div class="col-xs-8 col-xs-offset-1" style = "margin-top : 7%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Create a new Program Outcome Value</h4>
								</div>
								<div class="panel-body">
									<form class = "inline-form" action = "#" method = "POST">
									
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "po" placeholder = "Program Outcome*" required />
											</div>
											<div class = "form-group">
												<input type = "number" class = "form-control" name = "value" placeholder = "Value*"  step = "0.01" required />
											</div>
											<div class = "form-group">
												<input type = "number" class = "form-control" name = "ayear" placeholder = "Academic Year*"  required />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "course" placeholder = "Course*" required />
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