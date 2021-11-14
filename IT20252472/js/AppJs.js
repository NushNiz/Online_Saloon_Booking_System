function loadData(data){
	if(data == 'btn2'){
		document.getElementById("ddown").hidden=false;
		
	}
	if(data == 'btn3'){
		document.getElementById("ddown2").hidden=false;
		
	}
		if(data == 'btn4'){
		document.getElementById("date").hidden=false;
		
	}
	
	if(data == 'btn5'){
		document.getElementById("DIV").hidden=false;
		
	}
	if(data == 'btn7'){
		document.getElementById("time").hidden=false;
		
	}
}
function enablebtn(){
	if(document.getElementById("check").checked) {
		document.getElementById("btn6").disabled=false;
	}
	else{
		document.getElementById("btn6").disabled=true;
	}
}
