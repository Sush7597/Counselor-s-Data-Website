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
	$title = $_POST['title'];
	$sem = $_POST['sem'];
	$code = $_POST['code'];
	mysqli_query($db,"Insert into courses(`code`, `title`, `semester`) values ('$code','$title','$sem')");
	header("location: courses.php");
	
}
?>
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3">
<div>
<h2 style ="float: left">Courses / New Course</h2>
</div>
<center>
				<div class="container">
					<div class="row row_style">
						<div class="col-xs-8 col-xs-offset-1" style = "margin-top : 7%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Create a new Course</h4>
								</div>
								<div class="panel-body">
									<form class = "inline-form" action = "#" method = "POST">
									
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "code" placeholder = "Subject Code*" required />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "title" placeholder = "Title*"  required />
											</div>
											<div class = "form-group">
												<input type = "number" class = "form-control" name = "sem" placeholder = "Semester*" required />
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