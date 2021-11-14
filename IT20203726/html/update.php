<?php
include 'connect.php';
$result = mysqli_query($conn,"SELECT * FROM manu");
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Salon Riverdale</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
	
		
		<link rel="stylesheet" href="../css/footercss.css">

	<style>

		

.lol {
  font-family: arial, sans-serif;
  border-collapse: collapse;

  width: 100%;
  

}

.btn{
	
	color:yellow;
}
.ttt {
  border: 2px solid black;
  background-color: black;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-decoration:none;
}


. td, th {
	
  border: 1px solid #dddddd;
  text-align: left;
  padding: 12px;
}
tr:nth-child(even) {
 background-color: #dddddd;
 
}
.ima1{
	width:30px;
	height:30px;
	
}
.ima2{
	width:30px;
	height:30px;
 
	
}
.ima1:hover{
	
	-ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
	
}
.ima2:hover{
	-ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
	
	
}

 </style>
	</head>
	<body class="bg">
			<div class="box-area">
				<header><!----------------------------------header------------------------------------------->
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
											
							<div class="site-search">
								
							<form action="index.html" method="get">
									
							<input type="search" name="search-box">
							<button type="submit"></button>

							</form>	
					
							</nav>					
						</div>
				</header><!-------------------------------------------end of header--------------------------------------------->
					<div class="uarea"><center><h2>Salon Riverdale</h2></center></div>
					<div class="con">
					<div class="wrapper">
					<br>
					<br>
					<br>
					<br>
                    </div>
					
<!-------------------------------content--------------------------------------------------------->
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table  class="lol" >
  
  <tr>
    <td><b>Id</b></td>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    
	 <td><b>MobileNo</b></td>
    <td><b>Email</b> </td>
	<td><b>password</b></td>
  </tr>
  <!------------printing in a tabale----------------->
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
 <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>

   <td><?php echo $row["mobileNo"]; ?></td>
   <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
	<td><a href="updatepro.php?id=<?php echo $row["id"]; ?>"><img  class="ima1"  src="../images/pencil.png" ></a></td>
	<td><a href="deletepro.php?id=<?php echo $row["id"]; ?>"><img  class="ima2"  src="../images/delete.png" ></a></td>
</tr>
<?php
$i++;
}
?>
</table>
<br><br><br>
<button  class="ttt"><a class="btn" href="welcome.php">Back</a></button>
	
 <?php
}
else{
    echo "No result found";
}
?>
			

					<br><br>

                <!-------------------------footer----------------------------------------------------------------->
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
						<dive class="under1">
					<a href=""> Contact Us</a><br/><br/>
					<a href=""> Terms of use </a><br/><br/>
					<a href=""> Privacy and policy </a><br/><br/>
					<a href=""> Conditions </a><br/><br/>
						</dive>
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
				
