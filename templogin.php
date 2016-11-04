<?php

$c = $_REQUEST["c"];

if($c == 1){
	login_cust();
}
if($c == 2){
	login_artist();
}


function login_cust(){
	$cemail = $_REQUEST["cemail"]; $cpass = $_REQUEST["cpass"]; $ok = 0;

	include 'db.php';
	$mysqli = new mysqli($host, $user, $pass, $database);
	if(mysqli_connect_errno()){
		die("Connection Failed".mysqli_connect_error());
	}else{
		if ($stmt = $mysqli->prepare("SELECT * FROM `customers` WHERE emailid=? AND password=?")) {
			$stmt->bind_param("ss", $cemail , $cpass);
			$stmt->execute();
			$result = $stmt->get_result();
			while ($row = $result->fetch_assoc()) {
				$cid = $row["cid"]; $ok = 1; break;
			}
			//$stmt->bind_result($uid);
			//$stmt->fetch();
			//$stmt->store_result();
			if($ok == 0){
				echo "No Such User Found";
			}else{
				echo "Login Successfull"; $_SESSION["cid"] = $cid;
			}
			$stmt->close();
		}
  		$mysqli->close();
	}

}

function login_artist(){
	$aemail = $_REQUEST["aemail"]; $apass = $_REQUEST["apass"]; $ok = 0;

	include 'db.php';
	$mysqli = new mysqli($host, $user, $pass, $database);
	if(mysqli_connect_errno()){
		die("Connection Failed".mysqli_connect_error());
	}else{
		if ($stmt = $mysqli->prepare("SELECT * FROM `artists` WHERE aemail=? AND apassword=?")) {
			$stmt->bind_param("ss", $aemail , $apassword);
			$stmt->execute();
			$result = $stmt->get_result();
			while ($row = $result->fetch_assoc()) {
				$aid = $row["aid"]; $ok = 1; break;
			}
			//$stmt->bind_result($uid);
			//$stmt->fetch();
			//$stmt->store_result();
			if($ok == 0){
				echo "No Such User Found";
			}else{
				echo "Login Successfull"; $_SESSION["aid"] == $aid;
			}
			$stmt->close();
		}
  		$mysqli->close();
	}

}

?>