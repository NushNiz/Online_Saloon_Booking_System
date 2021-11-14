<?php

$con = new mysqli('localhost','root','','contact_information');

if($con ->connect_error)
{
	die("Connection failed:".$con->connect_error);
}

?>