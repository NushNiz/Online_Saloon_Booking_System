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