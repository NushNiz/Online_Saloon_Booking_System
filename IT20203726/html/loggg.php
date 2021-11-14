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

        if(isset($_POST['register'])){
            
          $firstname =  $_POST["firstname"];
            $lastname =  $_POST["lastname"];

            $mobileNo =  $_POST["mobileNo"];
            $email =  $_POST["email"];
            $password =  $_POST["password"];
            
            $query="INSERT INTO manu (firstname,lastname,mobileNo,email,password) VALUES ('$firstname','$lastname','$mobileNo','$email','$password')";
            mysqli_query($conn,$query);
            header('location:login.html');
            
            
        }






	?>