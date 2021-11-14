<?php
include 'connect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE manu set id='" . $_POST['id'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', mobileNo='" . $_POST['mobileNo'] . "' ,email='" . $_POST['email'] . "',password='" . $_POST['password'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM manu WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
	<head>
		<title>Salon Riverdale</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/registation.css">
		<script src="../js/reg.js"></script>
		<link rel="stylesheet" href="../css/footercss.css">
		<style>
	.frm{
width:520px;
height:700px;
background:rgba(48, 45, 45, 0.3);
font-family: Arial, Helvetica, sans-serif;
color: black;
top:55%;
left:80%;
position:center;
transform:translate(45%,0%);
box-sizing:border-box;
padding: 70px 60px ;
font-family: Arial, Helvetica, sans-serif;
margin-left:280px;
}
		
input[type=text]{
	
 background:transparent;;
  border: transparent;
  border-bottom: 2px solid grey;
  width:50%;
  
		}
	
		.button {
  display: inline-block;
  border-radius: 4px;
  background-color:black;
  border: none;
 
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
 
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


.button{
color:yellow;

}	
.bt{
	
	color:yellow;
	
}
		

		</style>
	</head>
	<body class="bg">
	
			<div class="box-area">
				<header><!-----------------------------------header----------------------------------------------->
		<div class="wrapper">
					<div class="logo">
					<a href="#"><img class="ima2" src="../images/salon1.jpg"></a>
					<a href="#" >Riverdale</a>
						
					</div>
							<nav>
								<a href="#">Home</a>
								<a href="#">Services</a>
								<a href="#">Review</a>
								<a href="#">Location</a>
								<a href="#">Contact Us</a>
								<a href="#">About</a>
                                <a href="login.html">Login</a>
								
								
									
						
				</header><!------------------------------------end of header------------------------------------------------------->
					<div class="uarea"><center><h2>Salon Riverdale</h2></center></div>
					<div class="con">
					<div class="wrapper">
						

					</div>
					
               <br><br>
	    <!----------------------------------------------------content--------------------------------------------------------------------->
	    
	<div class="frm">
		         <br> 
				<center><h1>Update User Details</h1></center><br>
				<form name="frmddd" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<button class="button"><span><a  class="bt" href="update.php">User account List</a></span><button>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br><br>
First Name: <br>
<input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>">
<br><br>
Last Name :<br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br><br>
MobileNo:<br>
<input type="text" name="mobileNo" class="txtField" value="<?php echo $row['mobileNo']; ?>">
<br><br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br><br>
password:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br><br>
<input type="submit" name="submit" value="Submit" class="button">

</form>
</div>




<br>
<!---------------------------------------------------------------------footer------------------------------------------------------------------------------->
            <br><br><br>
        
            <fieldset class="ft">
		<table border="0">
		<tr>
			<td class="edit"><img class="image2" src = "../Images/salon.png" style="width:300px; height: 200px; "></td>
			<td class="edit1"><b> HQ </b> 
			<br/>
			NO:12/A,<br/>
			Rockland Place<br/>
			5th Lane,<br/>
			Colombo 6.<br/>
			(+94) 77 2121 889
			</td>
			
			<td class="edit2">
			<b> Branches </b><br/><br/>
			<div class="under">
			<a href = "https://www.google.com/maps/place/Colombo/@6.9218335,79.7861647,12z/data=!4m5!3m4!1s0x3ae253d10f7a7003:0x320b2e4d32d3838d!8m2!3d6.9270786!4d79.861243">Colombo</a><br/><br/>		  
			<a href = "https://www.google.com/maps/place/Malabe/@6.9043203,79.9479226,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae256d59601df81:0x31a1dd96e8d49ba!8m2!3d6.9060787!4d79.9696277">Malabe</a><br/><br/>
			<a href = "https://www.google.com/maps/place/Panadura/@6.729035,79.8944164,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae24616c169e7c3:0xd21e80c970651d56!8m2!3d6.7106361!4d79.9074262">Panadura</a><br/><br/>
			<a href = "https://www.google.com/maps/place/Nugegoda/@6.8656191,79.8881501,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae25a7a9577b535:0x62e4b0a7bd678e33!8m2!3d6.8649081!4d79.8996789">Nugegoda</a><br/><br/>
			<a href = "https://www.google.com/maps/place/Balangoda/@6.6630029,80.6697925,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae3f340fe7adc7b:0x644a4b5a08997d83!8m2!3d6.6668611!4d80.7048084">Balangoda</a><br/><br/>
			<a href = "https://www.google.com/maps/place/Ratnapura/@6.7167744,80.3351204,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae3beb435df712f:0xc14a5df053ff0561!8m2!3d6.7055742!4d80.3847345">Ratnapura</a><br/><br/>
			</div></td>
			
			<td class="edit3">
			<h2><p> Riverdale </p></h2>
			</td>
			
			<td class="edit4">
				<div class="under1">
			<a href=""> Contact Us</a><br/><br/>
			<a href=""> Terms of use </a><br/><br/>
			<a href=""> Privacy and policy </a><br/><br/>
			<a href=""> Conditions </a><br/><br/>
				</div>
			</td>
			
			<td class="edit5">
			<h3 class="connect">Connect With Us</h3>
			<hr>
			<table>
				<tr>
			<td class="space"><a href="https://www.facebook.com/"><img id="under3" class="logoo" src="../Images/facebook.png"></a></td>

			<td class="space"><a href="https://twitter.com/" ><img id="under3" class="logoo" src="../Images/twitter.png"></a></td>

			<td class="space"><a href="https://www.instagram.com/" ><img id="under3" class="logoo" src="../Images/instagram.png"></a></td>

			<td class="space1"><a href="https://www.pinterest.com/"><img id="under3" class="logo1" src="../Images/pinterest.png"></a><br/><br/></td><br/>
			
			</tr>
			</table>
			<p>Copyright 2020 Riverdale Salon.<br/><br/>Designated by NN Creations.</p>
			</td>
			
		</tr>
		</table>
	</fieldset>      
    </div>
                

		</div><br><br>
		
	</body>
	</html>