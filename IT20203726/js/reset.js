function validate()
{
	
var em,ow,cw,nw

em=document.getElementById("email").value;
ow=document.getElementById("oldP").value;
nw=document.getElementById("newP").value;
cw=document.getElementById("confirmP").value;

if(em.length==0){
	alert("fill up the email field!");
}else if((ow.length==0)|| (nw.length==0)||(cw.length==0)){
	
	alert("fill up the password field!");
	
	}else{
		
		alert("Success");
		
	}

}