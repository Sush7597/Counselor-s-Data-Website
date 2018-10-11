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
<div id="head" class = "col-xs-9 col-xs-offset-3" style = "margin-top : 5%">
<div class = "container" >
<h2 style ="float: left"> Students </h2>  
</div>
<div class = "container" style = "margin-top : 2%;font-size : 12px">
<form class = "form-inline" action="" method = "POST">
<label style = "margin-right : 20px"> Year	:	</label>          
          <input type = "radio"
                 name = "year"
                 id = "2nd"
                 value = "2nd_year" required
                 />
          <label for = "2nd" style = "margin-right : 15px"> 2nd Year </label>
          <input type = "radio"
                 name = "year"
                 id = "3rd"
                 value = "3rd_year" required />
          <label for = "3rd" style = "margin-right : 15px"> 3rd Year </label>
          <input type = "radio"
                 name = "year"
                 id = "4th"
                 value = "4th_year" required />
          <label for = "4th"> 4th Year</label><br><br>
		  
		  <label style = "margin-right : 20px"> Shift	:	</label>          
          <input type = "radio"
                 name = "shift"
                 id = "1st"
                 value = "1" required />
          <label for = "1st" style = "margin-right : 15px"> 1st  </label>
          <input type = "radio"
                 name = "shift"
                 id = "2nd"
                 value = "2" required />
          <label for = "2nd" style = "margin-right : 15px"> 2nd </label><br><br>
		  	<label for = "batch" style = "margin-right : 15px;"> Group : </label>
					<select name="batch" id = "batch" required>
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
		  <button type = "submit" class = "btn btn-xs btn-default" value = "Submit" style = "margin-left : 5%; width:15%;"> Submit </button>
          
</form>
</div>
<?php 
require 'config.php';
include "session.php";

$db = db_open();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$year = $_POST["year"];
	$shift = $_POST["shift"];
	$data = $year."_".$shift;
	$batch = $_POST['batch'];
$result = mysqli_query($db,"Select * from `$data` where `Group` = '$batch'");
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
						<a href = 'view.php?view-user=".$row['ID']."&db=".$data."'>
						<button class = 'btn btn-default btn-xs' type = 'button' style = 'text-align : center; font-size : 12px; width : 150px '>
							 View
						</button> </a></center>";
			$row = mysqli_fetch_assoc($result);
		}
			echo "</center>";
		echo "</table>";
		echo "</div>";
}
?>
</div>
<footer>
		<center>
			<h6> Maharaja Agrasen Institute of Technology </h6>
		</center>
</footer>
</body>
</html>