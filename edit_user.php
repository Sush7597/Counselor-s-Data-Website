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
$id = $_GET['id'];
$fetch = mysqli_query($db,"Select * from users where ID = '$id'");
$det = mysqli_fetch_assoc($fetch);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email = $_POST['email'];
	if($email == "")
		$email = $det['E-Mail'];
	$name = $_POST['name'];
	if($name == "")
		$name = $det['Name'];	
	$enroll = $_POST['eno'];
	if($enroll == "")
		$enroll = $det['Enrollment Number'];
	$year = $_POST['year'];
	if($year == "")
		$year = $det['Year'];
	$group = $_POST['group'];
	if($group == "")
		$group = $det['Group'];
	$contact = $_POST['contact'];
	if($contact == "")
		$contact = $det['Contact'];
	$cetroll = $_POST['cetroll'];
	if($cetroll == "")
		$cetroll = $det['CET Roll Number'];
	$cetrank = $_POST['cetrank'];
	if($cetrank == "")
		$cetrank = $det['CET Rank'];
	$father_name = $_POST['father_name'];
	if($father_name == "")
		$father_name = $det["Father's Name"];
	$mother_name = $_POST['mother_name'];
	if($mother_name == "")
		$mother_name = $det["Mother's Name"];
	$dob = $_POST['dob'];
	if($dob == "")
		$dob = $det['DOB'];
	$gender = $_POST['gender'];
	if($gender == "")
		$gender = $det['Gender'];
	$address = $_POST['address'];
	if($address == "")
		$address = $det['Address'];
	$father_profession = $_POST['father_profession'];
	if($father_profession == "")
		$father_profession = $det["Father's Profession"];
	$category = $_POST['category'];
	if($category == "")
		$category = $det['Category'];
	$academic_year_id = $_POST['academic_year_id'];
	if($academic_year_id == "")
		$academic_year_id = $det['Academic Year ID'];
	$batch_id = $_POST['batch_id'];
	if($batch_id == "")
		$batch = $det['Batch ID'];
	$row = mysqli_query($db,"Select from users where E-mail = '$email'");
	$count = mysql_num_rows($row);
	if($count == 0)
	{
	mysqli_query($db,"Update  users set `E-Mail` = '$email' ,`Name` = '$name' , `Enrollment Number` = '$enroll', `Year` = '$year', `Group` = '$group',  `Contact` = '$contact' , `CET Roll Number` = '$cetroll', `CET Rank` = '$cetrank', `Father's Name` = '$father_name' , `Mother's Name` = '$mother_name', `DOB` = '$dob', `Gender` = '$gender', `Address` = '$address', `Father's Profession` = '$father_profession', `Category` = '$category' , `Acdemic Year ID` = '$academic_year_id', `Batch ID` = '$batch_id'  where ID = '$id'");
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
<h2 style ="float: left"> Users / View User / Edit  User</h2>
</div>
<center>
				<div class="container">
					<div class="row row_style">
						<div class="col-xs-8 col-xs-offset-1" style = "margin-top : 7%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Edit User</h4>
								</div>
								<div class="panel-body">
									<form class = "inline-form" action = "#" method = "POST">
									
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "email" placeholder = "E-MAIL = <?php echo $det['E-Mail'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "name" placeholder = "Name = <?php echo $det['Name'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "eno" placeholder = "Enrollment Number = <?php echo $det['Enrollment Number'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "number" class = "form-control" name = "year" placeholder = "Year = <?php echo $det['Year'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "group" placeholder = "Group = <?php echo $det['Group'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "contact" placeholder = "Contact = <?php echo $det['Contact'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "cetroll" placeholder = "CET Roll Number = <?php echo $det['CET Roll Number'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "cetrank" placeholder = "CET Rank = <?php echo $det['CET Rank'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "father_name" placeholder = "Father's Name = <?php echo $det["Father's Name"] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "mother_name" placeholder = "Mother's Name  = <?php echo $det["Mother's Name"] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "dob" placeholder = "DOB = <?php echo $det['DOB'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "gender" placeholder = "Gender = <?php echo $det['Gender'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "address" placeholder = "Address = <?php echo $det['Address'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "father_profession" placeholder = "Father's Profession = <?php echo $det["Father's Profession"] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "category" placeholder = "Category = <?php echo $det['Category'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "academic_year_id" placeholder = "Academic Year ID = <?php echo $det['Academic Year ID'] ?>"  />
											</div>
											<div class = "form-group">
												<input type = "text" class = "form-control" name = "batch_id" placeholder = "Batch ID = <?php echo $det['Batch ID'] ?>"  />
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