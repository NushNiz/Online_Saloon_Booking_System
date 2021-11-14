<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="salon";

	$conn = new mysqli($servername,$username,$password,$db);

	if($conn->connect_error)
	{
		die("connection faild:" . $conn->connect_error);
	}

	echo "connect successfully";
	?>