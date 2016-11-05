<?php

$c = $_REQUEST["c"];

if($c == 1){
	login_cust();
}
if($c == 2){
	login_artist();
}
if($c == 3){
	signup_cust();
}
if($c == 4){
	signup_artist();
}


function login_cust(){
	$cemail = $_REQUEST["cemail"]; $cpass = $_REQUEST["cpass"]; $ok = 0;

	include 'db.php';
	$mysqli = new mysqli($host, $user, $pass, $database);
	if(mysqli_connect_errno()){
		die("Connection Failed".mysqli_connect_error());
	}else{
		if ($stmt = $mysqli->prepare("SELECT cid FROM `customers` WHERE emailid=? AND password=?")) {
			$stmt->bind_param("ss", $cemail , $cpass);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$stmt->bind_result($cid);
				$stmt->fetch();
				$stmt->store_result();

				session_start(); $_SESSION["cid"] = $cid;
			}else{
				echo "No Such User Found";
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
		if ($stmt = $mysqli->prepare("SELECT cid FROM `artists` WHERE aemail=? AND apassword=?")) {
			$stmt->bind_param("ss", $aemail , $apassword);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$stmt->bind_result($cid);
				$stmt->fetch();
				$stmt->store_result();

				session_start(); $_SESSION["aid"] = $aid;
			}else{
				echo "No Such User Found";
			}
			$stmt->close();
		}
  		$mysqli->close();
	}

}

function signup_cust(){
	$cemail = $_REQUEST["cemail"]; $cpass = $_REQUEST["cpass"]; $ok = 0;
	$cname = $_REQUEST["cname"]; $caddr = $_REQUEST["caddr"]; $ccontact = $_REQUEST["ccontact"];
	$cpass = hash('sha512',$cpass);

	include 'db.php';
	$mysqli = new mysqli($host, $user, $pass, $database);
	if(mysqli_connect_errno()){
		die("Connection Failed".mysqli_connect_error());
	}else{
		if ($stmt = $mysqli->prepare("SELECT cid FROM `customers` WHERE emailid=? AND password=?")) {
			$stmt->bind_param("ss", $cemail , $cpass);
			if(!$stmt->execute()){
				if ($stmt2 = $mysqli->prepare("INSERT INTO `customers` VALUES (?,?,?,?,?)")) {
					$stmt2->bind_param("sssss", $cemail, $cpass, $cpass , $caddr, $ccontact);
					if($stmt2->execute()){
						echo "Registered Successfully. Please Login";
					}else{
						echo "Error Entering Details";
					}
					$stmt2->close();
				}else{
					echo "Error Preparing.";
				}
			}else{
				echo "User Already Registered";
			}
			$stmt->close();
		}
  		$mysqli->close();
	}	
}

function signup_artist(){
	$aemail = $_REQUEST["aemail"]; $apass = $_REQUEST["apass"]; $ok = 0;
	$aname = $_REQUEST["aname"]; $aaddr = $_REQUEST["aaddr"]; $acontact = $_REQUEST["acontact"];
	$apass = hash('sha512',$apass);

	include 'db.php';
	$mysqli = new mysqli($host, $user, $pass, $database);
	if(mysqli_connect_errno()){
		die("Connection Failed".mysqli_connect_error());
	}else{
		if ($stmt = $mysqli->prepare("SELECT aid FROM `artists` WHERE aemail=? AND apassword=?")) {
			$stmt->bind_param("ss", $cemail , $cpass);
			if(!$stmt->execute()){
				if ($stmt2 = $mysqli->prepare("INSERT INTO `artists` VALUES (?,?,?,?,?)")) {
					$stmt2->bind_param("sssss", $aemail, $apass, $aname , $aaddr, $acontact);
					if($stmt2->execute()){
						//echo "Registered Successfully. You Will Be Evaluated And Notified By Us.";
					}else{
						echo "Error Entering Details";
					}
					$stmt2->close();
				}else{
					echo "Error Preparing.";
				}
			}else{
				echo "User Already Registered";
			}
			$stmt->close();
		}
  		$mysqli->close();
	}	
}

?>