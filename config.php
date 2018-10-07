<?php
function db_open()
{
	// connecting with Database
	$conn = mysqli_connect("localhost","root","","clg");
	if(!$conn)
	{
		die('Could not connect: ' . mysqli_error());
	}
	return $conn;
}
function db_close($conn)
{
	mysqli_close($conn);
}
?>
