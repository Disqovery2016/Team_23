<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | FairArt</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<style type="text/css">
	p{cursor:pointer;}
</style>
<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><p style="font-size:25px;">FairArt</p></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li id="acc"><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li id="login"><a href="login.html"><i class="fa fa-lock"></i> Login / Signup</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Find Artists<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">By Name</a></li>
										<li><a href="product-details.html">By Art</a></li> 
                                    </ul>
                                </li> 
								<li><a href="">Contact Us</a></li>
								<li><a href="">About Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>thnic</h1>
									<h2></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/home1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>thnic</h1>
									<h2></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/home2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>thnic</h1>
									<h2></h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/home3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>

					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Clothing
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="itemselect.php">T - Shirts </a></li>
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Pants </a></li>
											<li><a href="#">Jeans</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Colour
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Bed Sheets</a></li>
											<li><a href="#">Blankets</a></li>
											<li><a href="#">Curtain</a></li>
											<li><a href="#">Paints</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Accessories
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Mobile Covers</a></li>
											<li><a href="#">Laptop</a></li>
											<li><a href="#">Sunglass</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!--<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>-->
						</div><!--/category-products-->

						<div class="price-range" id="pricerange"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->					
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Featured Items</h2>

<?php

	include 'db.php';
	$conn = mysqli_connect($host, $user, $pass, $database);
	if($conn){
		$sql = "SELECT * FROM commodity"; $retval=mysqli_query($conn, $sql); $items = "";
		while($row = mysqli_fetch_assoc($retval)){
			if($row["product_type"] != "product_type"){
				
				$last_id = $row["commid"]; $price = $row["price"];
				$sql2 = "SELECT * FROM income WHERE design_id IN (SELECT designid FROM commodityartifact WHERE commid=$last_id)";
				$retval2 = mysqli_query($conn,$sql2); $row2 = mysqli_fetch_array($retval2); 
				$descrp = $row2["description"]; $designid2 = $row2["design_id"]; $imglink = "images/" . $designid2 . ".jpg";

				echo "<div class=\"col-sm-4\"><div class=\"product-image-wrapper\"><div class=\"single-products\"><div class=\"productinfo text-center\">";
				echo "<img src=\"$imglink\" alt=\"\" style=\"height:60%; width:90%;\"/><h2>$price $</h2>";
				echo "<p>$descrp</p>";
				echo "<a onclick=\"\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>View</a>";
				echo "</div><div class=\"product-overlay\"><div class=\"overlay-content\">";
				echo "<h2></h2><p>$descrp</p><p onclick=\"popupitem($designid2)\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Order Now</a>";
				echo "</div></div></div><div class=\"choose\"><ul class=\"nav nav-pills nav-justified\">";
				echo "</ul></div></div></div></div>";

			}
		}
	}else{
		echo "connection error";
	}

?>						
						
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

		<div style="position:fixed; top:10%; left:20%; width:40%; height:80%; display:none; z-index:10" id="itempop">
			<img src="" id="itempopimg" style="width:100%; height:100%;"/> 
			<p id="addtocart" onclick="addtocart()" style="display:block; font-size:20px; cursor:pointer; background:#FE980F; text-align:center;">Order Now</p>
			<p id="result1" style="display:none;"></p>
		</div>
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    	var item_id = 1;

    	window.onload = function(){
    		init();
    		document.getElementById("pricerange").style.display="none";
    	}

    	function init(){
    		$.post("getuserdet.php", {c: 1},
            function(data){
              if(!data){
              	document.getElementById("acc").style.display = "none"; document.getElementById("wish").style.display = "none";
              	document.getElementById("checkout").style.display = "none"; document.getElementById("cart").style.display = "none";
              	document.getElementById("login").style.display = "block"; document.getElementById("logname").style.display = "none";  
              }else{
               	document.getElementById("acc").style.display = "block"; document.getElementById("wish").style.display = "block";
              	document.getElementById("checkout").style.display = "block"; document.getElementById("cart").style.display = "block";
              	document.getElementById("login").style.display = "none"; 
              	document.getElementById("logname").style.display = "block"; document.getElementById("logname").innerHTML(data);            	
              }
          	})
    	}

    	function popupitem(imgid){
    		document.getElementById("itempop").style.display = "block";
    		document.getElementById("itempopimg").src = "images/"+imgid+".jpg";
    	}

    	function addtocart(){
			$.post("getuserdet.php", { itemid: item_id , c: 2 },
   			function(data) {
 				$('#result1').html(data);
   			});	
    	}
    </script>
</body>
</html>