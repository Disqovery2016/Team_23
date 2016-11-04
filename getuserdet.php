<?php  

$c = $_REQUEST["c"]; 

if($c == 1){
	returndet();
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

?>