<?php  

$c = $_REQUEST["c"];
//session_start(); $_SESSION["cid"] = 1;

if($c == 1){
	returndet();
}
if($c == 2){
	ordernow();
}
if($c == 3){
	temp();
}

function returndet(){
	session_start(); 
	if(isset($_SESSION["cid"])){
		$cid = $_SESSION["cid"]; $cname = $_SESSION["cname"]; $cemail = $_SESSION["cemail"]; $cpassword = $_SESSION["cpassword"]; $caddress = $_SESSION["caddress"];
		echo $cid;
	}else{}
}

function ordernow(){
	include 'db.php';
	$item_id = $_REQUEST["item_id"];

	session_start();
	if(isset($_SESSION["cid"])){
		$id = $cid;
	}else{
		$id = $aid;
	}
	$conn = mysqli_connect($host, $user, $pass, $database);
	if($conn){
		$sql = "INSERT INTO orders VALUES('".$item_id."','".$id."')";
		mysqli_query($conn,$sql);
		if(mysqli_commit($conn)){
			echo "Order Placed Successfully.";
		}
	}else{
		echo "Connection Error";
	}
}

?>