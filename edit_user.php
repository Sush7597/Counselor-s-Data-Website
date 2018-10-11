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
$ID = $_GET['view-user'];
$database = $_GET['db'];
$result = mysqli_query($db,"SELECT * FROM `$database` where `ID` = '$ID'");
$row= mysqli_fetch_assoc($result);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$dat = array();
	$info=$_POST['Details'];
	$x = 0;
  foreach($row as $k=>$r)
  {
	if($k != "ID")
	{
	mysqli_query($db , "UPDATE `$database` SET `$k` = '$info[$x]' where `ID` = '$ID'");
    $x++;
	}
   }
}
?>
<body>
<div id="include_html"></div>
</div>
<div id="head" class = "col-xs-9 col-xs-offset-3" style = "margin-top : 5%;">
<div>
<h2 style ="float: left"> Student / View  / Edit  Data</h2>
</div>
<center>
				<div class="container">
					<div class="row row_style">
						<div class="col-xs-8 col-xs-offset-1" style = "margin-top : 7%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Edit Data</h4>
								</div>
								<div class="panel-body">
									<form class = "form-horizontal" action = "" method = "POST" id = "form">
										<?php
											foreach($row as $k=>$r)
											{if($k == "ID")
												{
											echo "<div class = 'form-group'>";
											echo  "<input type = 'number' class = 'form-control' name = 'id' value = '".$r."' placeholder ='".$k." = ".$r."' disabled />";
											echo "</div>";
												}
											
											else{
											echo "<div class = 'form-group'>";
											echo  "<input type = 'text' class = 'form-control' name = 'Details[]' value = '".$r."' placeholder = '".$k." - ".$r."' />";
											echo "</div>";
												}
											}
										?>
											<div class = "form-group">
											<button class="btn btn-primary" type = "Submit" id = "sub" class = "form-control"> Submit </button>
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