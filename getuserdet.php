<?php  

$c = $_REQUEST["c"]; 

if($c == 1){
	returndet();
}
if($c == 2){
	ordernow();
}

function returndet(){
	session_start(); 
	if(isset($_SESSION["cid"])){
		$cid = $_SESSION["cid"]; $cname = $_SESSION["cname"]; $cemail = $_SESSION["cemail"]; $cpassword = $_SESSION["cpassword"]; $caddress = $_SESSION["caddress"];
		echo $cname;
	}else{
		if(isset($_SESSION["aid"])){
			$aid = $_SESSION["aid"]; $aname = $_SESSION["aname"]; $aaddress = $_SESSION["aaddress"]; $apassword = $_SESSION["apassword"]; $aemail = $_SESSION["aemail"];
			echo $aname;		
		}
	}
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