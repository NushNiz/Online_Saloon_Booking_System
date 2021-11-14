<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "salon";
    //connect to the database
    $conn = mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM manu WHERE firstname='$firstname' and password='$password' ";
        $data = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($data);
        
        if($result){
			 header("location:welcome.php");
    }
            
        }
        else{
            echo "plaease insert correct login credentials";
          
        }

?>