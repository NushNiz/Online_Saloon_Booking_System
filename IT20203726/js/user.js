function enableButton2()
{	
	if(document.getElementById("policy").checked)
	{
		document.getElementById("btnSub1").disabled = false;
	}
	else
	{
		document.getElementById("btnSub1").disabled = true;
      } 
}