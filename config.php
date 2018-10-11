<?php
function db_open()
{
	$conn = mysqli_connect("localhost:3306","counscma_counscm","counc@654321^%$#@!","counscma_clg");
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