<?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="payment";
        //create the connection
 		
        $con= new mysqli($servername,$username,  $password,$db);
        //check the connection

        if($con->connect_error)
        {
            die("Failed to connect" .$con->connect_error);
        }
        else "Successfully connected";

    
        if(isset($_POST['btn2']))
        {
               $orderNo = $_POST["Binfo"];
	           $amount = $_POST["Pinfo"];
	           $card = $_POST["card"];
	           $fname = $_POST["fname"];
	           $lname = $_POST["lname"];
	           $cardNO = $_POST["number"];
	           $exp = $_POST["date"];
	           $cvc = $_POST["cvc"];
            //write query
            $query ="INSERT INTO payment(Bank_Order_No,Payment_Amount,Card_Type,First_Name,Last_Name,Card_Number,Expiry_Date	,CVC) VALUES ('$orderNo',' $amount','$card','  $fname','$lname','$cardNO','$exp','$cvc')";
            
            mysqli_query($con,$query);
            
            header('location:Payment Paget.php');
        }


?>