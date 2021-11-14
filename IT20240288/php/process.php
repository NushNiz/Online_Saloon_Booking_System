<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="salon";
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

?>
    <?php
    if(isset($_POST['button']))
    {
        $user=$_POST['username'];
        $pass=$_POST['password'];

        if(empty($user) || empty($pass))
        {
            echo 'please fill all the fields';
        }
        else{
            $query = "select * from admin where Admin='$user' and Pass='$pass'";
            $result= mysqli_query($con,$query);

            if($row=mysqli_fetch_assoc($result)){
                $db_password = $row['Pass'];

                if($pass == $db_password ){
                    header("../../IT20207618/php/index.php");
                }
                else{
                   echo"incorrect password";
                }
            }
            else{
                echo"incorrect User Name or Password";
            }
        }
    }





?>