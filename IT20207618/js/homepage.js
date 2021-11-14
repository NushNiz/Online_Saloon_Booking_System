var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString();
}


var imageArray = ["../images/sl2.jpg","../images/sl3.jpg","../images/s2.jfif","../images/s4.jfif","../images/s5.jfif","../images/s6.jfif","../images/s9.jfif","../images/s12.jfif","../images/s14.jfif","../images/s16.jfif","../images/s17.jfif","../images/s19.jfif"];
	var x = 0;
	var time = 2000;
function changeImg(){
	document.slide.src = imageArray[x];
	if(x < imageArray.length -1){
		x = x + 1;
	}
	else{
		x = 0;
	}
	setTimeout("changeImg()",time);
}
window.onload = changeImg;
