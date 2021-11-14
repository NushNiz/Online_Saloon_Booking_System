	<!DOCTYPE html>
	<html>
	<head>
		<title>Salon Riverdale</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/sign.css">
		<script src="../js/homepage.js"></script>
		<link rel="stylesheet" href="../css/footercss.css">
        <link rel="stylesheet" href="../css/bd.css">
		
	</head>
	<body class="bg">
			<div class="box-area">
				<header><!----------------- HEADER ----------------------->
					<div class="wrapper">
						<div class="logo">
							<a href="homepage.html"><img class="image2" src="..\Images\salon1.jpg"></a>
							<a href="homepage.html" >Riverdale</a>
						</div>
							<nav>
								<a href="homepage.html">Home</a>
								<a href="services.html">Services</a>
								<a href="#">Review</a>
								<a href="../../IT20252472/html/Location.html">Location</a>
								<a href="#">Contact Us</a>
								<a href="#">About</a>
                              
                                <div class="site-search">
							<form action="index.html" method="get">
		
						<input type="search" name="search-box">
						<button type="submit"></button>
							</form>	                               
							</nav>					
						</div>
				</header><!-------------- END OF HEADER ----------------------->
					<div class="uarea"><center><h2>Salon Riverdale</h2></center></div>
					<div class="con">
						<div class="wrapper">
							<h2 id="center">Administrator</h2><br>
					</div>



					<!---------------------- CONTENT ----------------------------->

<center>  <table border="0" class="tbale1">
<tr>
	<td>
<table class="table2">
	<tr><h3 class="empal">Insert Employee Data<br><br></h3></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    
	<form action="insert.php" method="POST">
	<tr>
        <td><p class="fname">Full-Name</p></td>
		<td><input type="text" name="name" required></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">T.P. NO. </p></td>
		<td><input type="number" name="tp" required></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">Home-Town</p></td>
		<td><input type="text" name="ht" required><br></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">Salary </p></td>
		<td><input  type="number" name="salary" required></td>
	</tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
        <td colspan="2" align="center"><input class="subm" type = "submit" name = "submit" value = "Submit"></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</form>
</table>
</td>
<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
<td>



	<table border='0' class="table3">
        
	<tr><h3 class="empal">Update Employee Data<br><br></h3></tr><tr></tr><tr></tr>
	<form action="update.php" method="POST">
		<tr>
            <td><p class="fname">Emp-ID</p></td>
		<td><input type="text" name="id" required></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">Full-Name</p></td>
		<td><input type="text" name="name" required></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">T.P. NO.</p> </td>
		<td><input type="number" name="tp" required></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">Home-Town</p></td>
		<td><input type="text" name="ht" required><br></td>
	</tr><tr></tr><tr></tr>
	<tr>
        <td><p class="fname">Salary </p></td>
		<td><input type="number" name="salary" required></td>
	</tr><tr></tr><tr></tr>
	<tr>
		<td colspan="2" align="center"><input input class="subm" type = "submit" name = "update" value = "submit"></td>
</form>
</table>
</td>
</tr>
</table>















<br><br>
<table class="tbale1"border="0">
<tr>
	<td>
<h3 class="empal">Employee Info</h3>
<br><?php
require("config.php");
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "
<table class='table3' border=1>
<tr><th>ID</th>
<th>Name</th>
<th>T.P.</th>
<th>Home-Town</th>
<th>Salary</th>
</tr>
";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>
		<td>".$row["emp_id"]."</td>
		<td>".$row["emp_name"]."</td>
		<td>".$row["emp_tp"]."</td>
		<td>".$row["emp_home_town"]."</td>
		<td>".$row["emp_salary"]."</td>
		<td class='dele'><a href='delete.php?id=".$row["emp_id"]."'"."><button class='dele'>Delete</button></a></td>
";
}
echo "</table>";
} else {
echo "0 results";
}
?>
</td>
<tr><tr></tr></tr>
<tr><td>
	<h3 class="empal">
		<br>Search Employee Info
    </h3><center>
	<table class="table3" border="0"><br>
	<form action="index.php" method="POST">
		<tr>
            <td><p class="fname">Search</p></td>
		<td><input type="text" name="sr" required></td>
	</tr><tr></tr>
		<td colspan="2" align="center"><input input class="subm" type = "submit" name = "search" value = "Search"></td>
        </form></center>
    
<?php
require("config.php");
if( isset( $_POST['search'])) {
$sr = $_POST["sr"];
$sql = "SELECT * FROM `employee` WHERE `emp_id` LIKE '%".$sr."%' OR `emp_name` LIKE '%".$sr."%' OR `emp_tp` LIKE '%".$sr."%' OR `emp_home_town` LIKE '%".$sr."%' OR `emp_salary` LIKE '%".$sr."%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
echo "
<table class='table3' border=1>
<tr>
<th>ID</th>
<th>Name</th>
<th>T.P.</th>
<th>Home-Town</th>
<th>Salary</th>
</tr>
";
while($row = mysqli_fetch_assoc($result)) {
echo"<br><br>";echo "<tr>
		<td>".$row["emp_id"]."</td>
		<td>".$row["emp_name"]."</td>
		<td>".$row["emp_tp"]."</td>
		<td>".$row["emp_home_town"]."</td>
		<td>".$row["emp_salary"]."</td>
		<td class='dele'><a href='delete.php?id=".$row["emp_id"]."'"."><button class='dele'>Delete</button></a></td>
";
}
echo "</table>";
} else {
echo "0 results";
}
}
?>
    </table>
    </td></tr>		
</tr>
                         </table> </center>
                        
                        
     <br><br>
            <center><button class="signout"><a class="so" href="../html/admin-user-login.html"> Sign Out</a></button></center>      <br><br>
   
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
					
	<!------------------------------ FOOTER ------------------------------>
                        
                        
                  <fieldset class="ft">
		<table border="0">
		<tr>
			<td class="edit"><img class="image2" src = "../Images/salon.png" style="width:300px; height: 200px; "></td>
			<td class="edit1"><b><u>HQ</u> </b> 
			<br/>
			NO:12/A,<br/>
			Rockland Place<br/>
			5th Lane,<br/>
			Colombo 6.<br/>
			(+94) 77 2121 889
			</td>
			
			<td class="edit2">
			<b><u> Branches </u></b><br/><br/>
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