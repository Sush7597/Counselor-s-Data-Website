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
include "session.php";
?>
<body>
<div id="include_html"></div>
<div id="head" class = "col-xs-6 col-xs-offset-3">
<h2>Welcome to the Dashboard</h2>
</div>
<div id="coa" class = "col-xs-6 col-xs-offset-3">
				<div class="container" style = "margin-top : 2%">
					<div class="row row_style">
							<div class="panel panel-default">
								<div class="panel-body">
									<p class = "text-warning">Course Outcome Analysis</p>
									<form class = "form-inline">
										<div class = "form-group">
											<select id = "course" required>
											  <option placeholder = "Course" value="">Course</option>
											  <option value="">Course1</option>
											  <option value="">Course2</option>
											  <option value="">Course3</option>
											</select>
											<select id = "outcome" style = " width : 190px; margin-top : 2px;" required>
											  <option placeholder = "Course Outcome" value="">Course Outcome</option>
											  <option value="">Course1</option>
											  <option value="">Course2</option>
											  <option value="">Course3</option>
											</select>
											</div>
											<button class="btn btn-xs btn-primary" type = "Submit" class = "form-control" style="margin-left:10px" > Submit </button>
									</form>
								</div>
							</div>
					</div>
				</div>
</div>
<div id="poa" class = "col-xs-6 col-xs-offset-3">
<div class="container" style = "margin-top : 2%">
					<div class="row row_style">
							<div class="panel panel-default">
								<div class="panel-body">
									<p class = "text-warning">Program Outcome Analysis</p>
									<form class = "form-inline">
										<div class = "form-group">
											<select id = "course" required>
											  <option placeholder = "Course" value = "">Course</option>
											  <option value="">Course1</option>
											  <option value="">Course2</option>
											  <option value="">Course3</option>
											</select>
											<select id = "outcome" style = " width : 190px; margin-top : 2px;" required>
											  <option placeholder = "Course Outcome" value="">Program Outcome</option>
											  <option value="">P01</option>
											  <option value="">P02</option>
											  <option value="">P03</option>
											</select>
											</div>
											<button class="btn btn-xs btn-primary" type = "Submit" class = "form-control" style="margin-left:10px" > Submit </button>
									</form>
								</div>
							</div>
					</div>
				</div>
</div>
<div id="psoa" class = "col-xs-6 col-xs-offset-3">
<div class="container" style = "margin-top : 2%;">
					<div class="row row_style">
							<div class="panel panel-default">
								<div class="panel-body">
									<p class = "text-warning">Program Specific Outcome Analysis</p>
									<form class = "form-inline">
										<div class = "form-group">
											<select id = "course" required>
											  <option placeholder = "Course" value="">Course</option>
											  <option value="">Course1</option>
											  <option value="">Course2</option>
											  <option value="">Course3</option>
											</select>
											<select id = "outcome" style = "margin-top : 2px;" required>
											  <option placeholder = "Course Outcome" value="">Program Specific Outcome</option>
											  <option value="">Course1</option>
											  <option value="">Course2</option>
											  <option value="">Course3</option>
											</select>
											</div>
											<button class="btn btn-xs btn-primary" type = "Submit" class = "form-control" style="margin-left:10px" > Submit </button>
									</form>
								</div>
							</div>
					</div>
				</div>
</div>
<footer>
		<center>
			<h6> Maharaja Agrasen Institute of Technology </h6>
		</center>
</footer>
</body>
</html>