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
	input{
		padding:10px; margin:1%;
	}
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
								<!--<li id="login"><a href="signin.php"><i class="fa fa-lock"></i> Login</a></li>
								<li id="register"><a href="signup_artist.html"><i class="fa fa-lock"></i> Register</a></li>-->
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
								<li><a href="" id="mydetails">My Details</a></li>
								<li><a href="design_upload.html" id="upload_design">Upload New Design</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

<div style="text-align:center;">
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<p>UPLOAD</p>
		<input type="file" name="artfile">
							<!--<input type="text" name="" placeholder="Name"/><br>-->
							<input type="text" placeholder="description"><br>
							<input type="number" placeholder="price"><br>
							<select type="text" class="" id="query_typeofarts" placeholder="Select a Type" style="width:20%;">
								<option value="cool">Cool</option>
								<option value="warm">Warm</option>
								<option value="elegant">Elegant</option>
								<option value="festive">Festive</option>
							</select><br>
		<button type="submit" value="submit">SUBMIT</button>
		<?php inputart(); ?>
	</form>
</div>

</body>
</html>

<?php

function inputart(){
	
}

?>
