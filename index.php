<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylesheet1.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
	<script src="jquery-3.1.1.js"></script>
</head>
<title>FairArt</title>
<style>
.mySlides {display:none;}
</style>
<body bgcolor="#f4f4f4">
	<div id="header">
		<p class="logo">FairArt</p>
		<!--<a class="menu_head" href="login.html">Login / Register</a>	
		<a class="menu_head" href="index.php">Home</a>-->
	</div>
	<div style="position:absolute; top:5%; left:0%; width:100%; height:95%;">
		<div class="mySlides">
			<img src="images/5.jpg" style="width:100%; height:100%; filter: brightness(70%);"/>
			<!--<p style="position:absolute; top:70%; left:20%; font-size:25px; font-weight:bold; color:white;">Artifact the ..</p>-->
		</div>
		<div class="mySlides">
			<img src="images/4.jpg" style="width:100%; height:100%; filter: brightness(70%);"/>
			<!--<p style="position:absolute; top:20%; left:20%; font-size:25px; font-weight:bold; color:white;">Glory in india</p>
			<p style="position:absolute; top:70%; left:20%; font-size:25px; font-weight:bold; color:white;">Tagline 2</p>-->
		</div>
		<div style="position:absolute; top:40%; left:30%; color:white; font-weight:bold; cursor:pointer; font-size:40px; display:block; border-radius:5px; border: 2px solid white;" onclick="artist()">I AM AN ARTIST</div>
		<div style="position:absolute; top:40%; left:60%; color:white; font-weight:bold; cursor:pointer; font-size:40px; display:block; border-radius:5px; border: 2px solid white;" onclick="customer()">I AM A CUSTOMER</div>
	</div>
</body>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}

function artist(){
	window.location = "login/artist_login.html";
}

function customer(){
	window.location = "cust_init_home.php"
}
</script>

</html>