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
		
		if(isset($_POST['dele']))
		{
				$orderNo = $_POST['Binfo'];
	           $amount = $_POST['Pinfo'];
	           $card = $_POST['card'];
	           $fname = $_POST['fname'];
	           $lname = $_POST['lname'];
	           $cardNO = $_POST['number'];
	           $exp = $_POST['date'];
	           $cvc = $_POST['cvc'];
			   
			   $delete = "delete from payment where Bank_Order_No='$orderNo'";
			   
			   if($con ->query($delete))
			   {
				 echo "Record Deleted Succesfully<br/><br/></br>";  
			   }
			   else
			   {
				   echo"Error".$con->error;
			   }
		}

?>