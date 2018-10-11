<?php
	session_start();
	require 'config.php';
	ini_set('display_errors',0);
	$db = db_open();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$email = $_POST['email'];
	$pass = $_POST['pass'];       
	$result = mysqli_query($db, "SELECT * FROM admin_users WHERE email = '$email' and password = '$pass'");
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION["login_user"] = $email;
		$_SESSION["islogged_in"]=true;
		header("location: dashboard.php");
	}
	else{
		echo '<script>',"alert('Invalid E-Mail Or Password!');",'</script>';
	}	
	}
?>
<html>
	<head>
		<title> MAIT </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="index.css" type="text/css">

			</head>

			<body>
				<nav class = "navbar navbar-fixed-top navbar-default ">
					<div class = "container">
						<div class = "navbar-header">
							<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navbar">
								<span class = "icon-bar"/>
								<span class = "icon-bar"/>
								<span class = "icon-bar"/>
							</button>
							<p class = "navbar-brand"> Councellor Data </p>
						</div>
					</div>
				</nav>
				<center>
				<div class="container" style = "margin-top : 11%; margin-bottom : 11%">
					<div class="row row_style">
						<div class="col-xs-6 col-xs-offset-3" >
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Login</h4>
								</div>
								<div class="panel-body">
									<form class = "inline-form" method="POST">
										<div class = "form-group">
												<input type = "email" class = "form-control" name = "email" placeholder = "E-mail" required />
											</div>
											<div class = "form-group">
												<input type = "password" class = "form-control" name = "pass" placeholder = "Password" required />
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
				<footer>
		<center>
			<h6> Maharaja Agrasen Institute of Technology </h6>
		</center>
</footer>
</body>
</html>

		