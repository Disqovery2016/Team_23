<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form>
							<input id="cemail" type="email" required="required" autocomplete="off" placeholder="Email Address" />
							<input id="cpass" type="password" required = "required" autocomplete="off" placeholder="Password" />
							<button onclick="login(1)" class="btn btn-default">Login</button> 
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Artist Log In</h2>
						<form>
							<input id="aemail" type="email" required="required" autocomplete="off" placeholder="Email Address"/>
							<input id="apass" type="password" required="required" autocomplete="off" placeholder="Password"/>
							<button onclick="login(2)" class="btn btn-default">Login</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
		<p id="result1" style="text-align:center;"></p>
	</section><!--/form-->
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    	function login(who){
    		if(who == 1){
    			var cemail = document.getElementById("cemail"); var cpass = document.getElementById("cpass");
    			$.post("login.php", {c: 1, cemail: cemail, cpass: cpass},
    				function(data){
    					$('#result1').html(data);
    			})
    		}else{
    			var cemail = document.getElementById("cemail"); var cpass = document.getElementById("cpass");
    			$.post("login.php", {c: 2, aemail: aemail, apass: apass},
    				function(data){
    					$('#result1').html(data);
    			})    			
    		}
    	}
    </script>
</body>
</html>