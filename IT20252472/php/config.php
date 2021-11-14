<?php

$con = new mysqli('localhost','root','','salon');

if($con ->connect_error)
{
	die("Connection failed:".$con->connect_error);
}

?>