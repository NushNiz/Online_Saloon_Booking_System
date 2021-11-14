var imageArray = ["../images/ff1.jpg","../images/ff2.jpg","../images/br1.jpg","../images/bw1.jpg","../images/cl1.jpg","../images/drr1.jpg","../images/fc1.jpg","../images/hd1.jpg","../images/hr1.jpg", "../images/sll1.jpg"];
	var x = 0;
	var time = 2000;
function changeImg(){
	document.slid22.src = imageArray[x];
	if(x < imageArray.length -1){
		x = x + 1;
	}
	else{
		x = 0;
	}
	setTimeout("changeImg()",time);
}
window.onload = changeImg;


function loaddata(name){
	if(name == "b1"){
		document.getElementById("facial1").innerHTML="<p><br><br><a>Classic Facial</a> <br><a> Lymphatic massege facial</a> <br><a> Microcurrent Facial</a> <br><a>  Galvanic Facial</a><br><a>High Frequency Facial</a><br><a> Antiging Facial</a><br> <a> Golden Facial </a><br><a> Aroma Facial</a><br><a> Normal Facial</a><br><a>Cleanup</a><br><a> Pimple Treatments</a><br></p>";
		}
	else if(name == "b2"){
		document.getElementById("facial2").innerHTML="<p> <a>Hair styles and blowdry</a><br><a> Keratin oil treatments </a><br> <a>Argon oil treatments</a><br><a> Rebonding</a><br><a> Soft bonding</a><br><a> Relaxing</a> <br><a> Straightening</a><br><a>Perming</a><br> </p>";
	}
	else if(name == "b3"){
		document.getElementById("facial3").innerHTML="<p> <a>Bridal dressing </a><br> <a>Normal dressing</a><br><a> Saree drapping</a><br><a > Makeup</a><br></p>";

		}
	else if(name == "b4"){
		document.getElementById("facial4").innerHTML="<p> <a>Soft wax</a> <br><a>Hard wax</a> <br><a>Fruit wax</a> <br><a>Sugar wax</a> <br><a> Chocolate wax</a> <br></p>";
	}
	else if(name == "b5"){
		document.getElementById("facial5").innerHTML="<p><a>Eyebrow threading </a><br><a>Full face threading</a> </p>";
	}
	else if(name == "b6"){
		document.getElementById("facial6").innerHTML="<p><a>Long hair </a><br><a>Short Hair</a><br><a>Layered Haircuts</a><br><a>Curly Haircuts</a><br><a>Bowl Cut</a> <br><a>Crew Cut</a>   <br><a>Short Caesar Cut</a>  <br><a>Short Side Part Style</a> <br><a>Structured Quiff</a>    </p>";
	}
	else if(name == "b7"){
		document.getElementById("facial7").innerHTML="<p> <a> Hair colours</a><br><a>Fashion color</a><br> <a>Highlights</a><br> <a>Sombre</a><br> <a>SplashLight</a><br> <a>Gray Hair Color</a><br> <a>Burgundy Hair Color</a><br> <a>Red Hair Color</a><br> <a>Winter Hair Color</a><br>       </p>";
	}
	else if(name == "b8"){
		document.getElementById("facial8").innerHTML="<p> <a> Midi Dress styling </a><br><a>Off the Shoulder styling </a><br> <a>Bodycon Dress styling </a><br> <a>A-Line Dress styling </a><br> <a>Maxi Dress styling</a><br> <a>Wrap Dress styling </a><br> <a>High-Low Dress styling</a><br> <a>Ballgown styling</a><br> <a>Qipao Dress styling</a><br>      </p>";
	}

}


