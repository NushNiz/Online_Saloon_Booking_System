

var imageArray = ["../Images/s1.jfif","../Images/s2.jfif","../Images/s3.jpg","../Images/s4.jfif","../Images/s5.jfif","../Images/s6.jfif","../Images/s7.png","../Images/s8.jfif","../Images/s9.jfif","../Images/s10.jfif",
					"../Images/s11.png"];
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