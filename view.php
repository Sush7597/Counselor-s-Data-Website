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
require 'config.php';
include "session.php";

$db = db_open();
$email = $_GET['view-user'];
$result = mysqli_query($db,"Select * from users where `E-Mail` = '$email'");
$row= mysqli_fetch_assoc($result);
$id = $row['ID'];

?>
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3">
<div>
<?php
echo "<h2 style ='float: left'>User / View User</h2> <a href = 'edit_user.php?id=".$id."'> <button type = 'button' class = 'btn btn-default btn-md' style ='float: right; margin-top: 2.5%; margin-right : 4%;'>Edit User </button></a>";
?>
</div>
<?php

echo "<div class = 'container' style = ' margin-left : 10%; margin-top : 10%; margin-bottom : 5%;'>";
echo "<table class = 'table-hover table-bordered table-responsive' >";
echo "<center>";
foreach($row as $key=>$row1)
	{	echo "<tr>";
		echo "<th style='width:300px; text-align : center; height : 30px; background-color :#E6E6E6;'>".$key."</th>";
		if($row1 == null)
		$row1="-----";
		echo "<td align='center' style = ' height : 30px; width:300px;'>".$row1."</td>";
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