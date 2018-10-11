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
<div id="include_html"></div>
<div id="head" class = "col-xs-9 col-xs-offset-3" style = "margin-top : 5%">
<div class = "container" >

<h2> My Students : </h2>  
</div>
<body>
<?php
include "session.php";
include "config.php";
$db = db_open();
$email = $_SESSION["login_user"];
$result = mysqli_query($db, "SELECT * FROM admin_users WHERE email = '$email'");
$row = mysqli_fetch_array($result);
$batch = $row['batch'];
$year = $row['year'];
$sql = "Select * from `".$year."` where `Group` = '".$batch."'";
$result = mysqli_query($db,$sql);
$row= mysqli_fetch_assoc($result);
echo "<div class = 'container' style = 'margin-top : 3%; margin-bottom : 5%'>";
		$arr = array("S.No." , "Group"  , "Enrollment Number" , "Name" , "Contact" , "View" );
		echo "<table class = 'table-hover table-bordered table-responsive' >";
		echo "<center>";
		foreach($arr as $item)
		echo "<th style='width:200px; text-align : center; height : 30px; background-color :#E6E6E6;'>".$item."</th>";
		while($row)
		{
			echo "<tr>";
			foreach($row as $key=>$row1)
			{	
				if($key == "S.No."||$key == "Group" || $key == "Name" || $key == "Enrollment No." || $key == "Contact")
				{
				if($row1 == null)
				$row1="-----";
				echo "<td align='center' style = 'height : 30px;'>".$row1."</td>";
				}
			}
				echo "<td><center>
						<a href = 'view.php?view-user=".$row['ID']."&db=".$year."'>
						<button class = 'btn btn-default btn-xs' type = 'button' style = 'text-align : center; font-size : 12px; width : 150px '>
							 View
						</button> </a></center>";
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