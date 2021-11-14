	<!DOCTYPE html>
	<html>
	<head>
		<title>Salon Riverdale</title>

		
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" href="../css/bunny.css">
		<link rel="stylesheet" href="../css/footercss.css">
		<script>
			function validation1() {
	var Binfo, Pinfo, fname, lname, number, date, cvc;
	Binfo = document.getElementById("Binfo").value;
	Pinfo = document.getElementById("Pinfo").value;
	fname = document.getElementById("fname").value;
	lname = document.getElementById("lname").value;
	number = document.getElementById("number").value;
	date = document.getElementById("date").value;
	cvc = document.getElementById("cvc").value;
	
	if(Binfo.length ==0 )
	{
		alert("Please fill your bank order number");
		return false;
	}
		else if(Pinfo.length ==0  )
		{
			alert("Please fill your payment amount");
			return false;
		}
			else if(fname.length ==0  )
			{
				alert("Please fill your first name");
				return false;
			}
				else if(lname.length ==0  )
				{
					alert("Please fill your last name");
					return false;
				}
					else if(number.length != 16  )
					{
						alert("Card number must included 16 numbers");
						return false;
					}
						
						else if(cvc.length != 3  )
							{
								alert("CVC number must include 3 numbers");
								return false;
							}
									else{
										alert("Success");
										true;
									}
						}
		
		</script>
		
	</head>
	<body class="bg">
			<div class="box-area">
				<header><!----------------- HEADER ----------------------->
					<div class="wrapper">
						<div class="logo">
							<a href="homepage.html"><img class="image2" src="..\images\salon1.jpg"></a>
							<a href="homepage.html" >Riverdale</a>
						</div>
							<nav>
								<a href="../../IT20207618/html/homepage.html">Home</a>
								<a href="../../IT20207618/html/services.html">Services</a>
								<a href="Feedback%20Page.html">Review</a>
								<a href="../../IT20252472/html/Location.html">Location</a>
								<a href="../../IT20240288/contactus.html">Contact Us</a>
								<a href="../../IT20203726/html/about.html">About</a>
                                <a href="../../IT20207618/html/admin-user-login.html">Login</a>
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
							<h2 id="center">Welcome to Payment Page</h2><br>
					</div>



					<!---------------------- CONTENT ----------------------------->
	<div class="box">
	
	<h1 style="color:white">Riverdale Secure Payment Method</h1>
	
	
	<h4><b>Please provide us with your card details,so that we can process your order.</b></h4>
	
	<fieldset class="box1" class="bg1" >
	<div class="div1"><b>Order Information</b></div><br>
	
	<form action="pay.php" method="POST" onsubmit="return validation1()">
	<b>Bank order NO</b>
	<input type="text" id="Binfo"  name="Binfo" class="info" style="width:500px;"> <br><br>
		
	<b>Payment amount</b>
	<input type="text" id="Pinfo" name="Pinfo" class="info" style="width:500px;"> <br><br>
	
	

	<div class="div1"><b>Card Information</b></div><br>
	
	
	<b>Card type</b><br>
	<input type="radio" id="card" name="card">VISA
	<input type="radio" id="card" name="card">PayPal
	<input type="radio" id="card" name="card">American Express
	<input type="radio" id="card" name="card">Discover
	<br><br>
	<b>First Name</b><br>
	<input type="text" name="fname" id="fname" class="fname" style="width:500px;" placeholder="Enter your first name"><br><br>
	<b>Last Name</b><br>
	<input type="text" name="lname" id="lname" class="lname" style="width:500px;" placeholder="Enter your last name"><br><br>
	<b>Card Number</b><br>
	<input type="text" id="number" name="number" class="number" style="width:500px;" placeholder="Enter your card number" pattern="[0-9]{16}"><br><br>
	<b>Expiry Date</b><br>
	<input type="date" id="date" name="date" style="width:500px;" required><br><br>
	<b>CVC</b><br>
	<input type="text" id="cvc" name="cvc" style="width:500px;" pattern="[0-9]{3}"><br><br>
	
	
	<center>
	<input type="submit" id="btn2" name="btn2" value="Confirm Payment">
	</center>
	</form>
	
	
	</fieldset>
	
	

	
	<fieldset class="box2">
	<p class="font2">Please comfirm the order information and then make a payment operation.<br>
	******************************************************************************************
	</p><br>
	<p class="font2">Pleasee notice that the billing amount might be slghtly different from the amount shown on youe bank statement because of exchange rate flactuation.<br>
	******************************************************************************************
	</p><br>
	<p class="font2">You are now connected to our Riverdale online secure payment method site. Your payment details will be securely transmitted to the bank trasaction authorization.
	</p><br><br><br>
	<center>
	<img src="../images/rrr.png" width="400" height="250"><br>
        
	<a href="My profile page.html">Go to My Account</a>
        
	</center>
	</fieldset>
	</div>
	<!------------------------------ FOOTER ------------------------------>
                        
                        
                  <fieldset class="ft">
		<table border="0">
		<tr>
			<td class="edit"><img class="image2" src = "../images/salon.png" style="width:300px; height: 200px; "></td>
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
			<a href="../../IT20240288/contactus.html"> Contact Us</a><br/><br/>
			<a href="../../IT20203726/html/terms.html"> Terms of use </a><br/><br/>
			<a href=""> Privacy and policy </a><br/><br/>
			<a href=""> Conditions </a><br/><br/>
				</dive>
			</td>
			
			<td class="edit5">
			<h3 class="connect">Connect With Us</h3>
			<hr>
			<table>
				<tr>
			<td class="space"><a href="https://www.facebook.com/"><img id="under3" class="logoo" src="../images/facebook.png"></a></td>

			<td class="space"><a href="https://twitter.com/" ><img id="under3" class="logoo" src="../images/twitter.png"></a></td>

			<td class="space"><a href="https://www.instagram.com/" ><img id="under3" class="logoo" src="../images/instagram.png"></a></td>

			<td class="space1"><a href="https://www.pinterest.com/"><img id="under3" class="logo1" src="../images/pinterest.png"></a><br/><br/></td><br/>
			
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