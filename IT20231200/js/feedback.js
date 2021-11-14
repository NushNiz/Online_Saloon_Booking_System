	function validation() {
	var name, email;
	name = document.getElementById("name").value;
	email = document.getElementById("email").value;
	
	if(name.length ==0 )
	{
		alert("No blank values allowed");
		return false;
	}
		else if(email.length ==0  )
		{
			alert("No blank values allowed");
			return false;
		}
		else{
			alert("Success");
			true;
		}
}
	
		
	
 
 
 
 

	
 
