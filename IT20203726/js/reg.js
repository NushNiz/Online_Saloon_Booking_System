function checkPassword(){
	var pawd,repwd
	
	pawd=document.getElementById("pwd").value
	repd=document.getElementById("repwd").value
	
	if( pawd!=repd )
		{alert("Password Mismatch!");
		return false;
		}
	else
		{alert("Success!");
		return true;
		}
}


function enableButton()
{	
	if(document.getElementById("policy").checked)
	{
		document.getElementById("btnSub").disabled = false;
	}
	else
	{
		document.getElementById("btnSub").disabled = true;
      } 
}

