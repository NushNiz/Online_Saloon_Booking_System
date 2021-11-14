function validate()
{
	
var un,pw

un=document.getElementById("first").value;
pw=document.getElementById("pass").value;

if(un.length==0){
	alert("empty firstname");
}else if(pw.length==0){
	
	alert("empty password");
	
	}else{
		
		alert("Success");
		
	}

}