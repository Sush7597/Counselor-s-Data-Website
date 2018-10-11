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
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3" style = "margin-top : 5%;">
<div>
<h2 style ="float: left">Courses</h2> <a href = "new_course.php"> <button type = "button" class = "btn btn-default btn-md" style ="float: right; margin-top: 2.5%; margin-right : 4%;">New Course </button></a> 
</div>
<?php 
require 'config.php';
include "session.php";

$db = db_open();
$result = mysqli_query($db,"Select * from courses");
$row= mysqli_fetch_assoc($result);
echo "<div class = 'container' style = 'margin-top : 10%'>";
		$arr = array("ID" , "Code" , "Title" , "Semester" );
		echo "<table class = 'table-hover table-bordered table-responsive' >";
		echo "<center>";
		foreach($arr as $item)
		echo "<th style='width:200px; text-align : center; height : 30px; background-color :#E6E6E6;'>".$item."</th>";
		while($row)
		{
			echo "<tr>";
			foreach($row as $key=>$row1)
			{	
				{
			
				if($row1 == null)
				$row1="-----";
			    echo "<td align='center' style = ' height : 30px;'>".$row1."</td>";
				}
			}
			$row = mysqli_fetch_assoc($result);
		}
			echo "</center>";
		echo "</table>";
		echo "</div>";

?>
</div>
<footer>
		<center>
			<h6> Maharaja Agrasen Institute of Technology </h6>
		</center>
</footer>
</body>
</html>