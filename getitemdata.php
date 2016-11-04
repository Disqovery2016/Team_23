<?php

$c = $_SESSION["c"];

if($c == 1){
	getitemdata();
}

function getitemdata(){
	include 'db.php';
	$conn = mysqli_connect($host, $user, $pass, $database);
	if($conn){
		$sql = "SELECT * FROM commodity"; $retval=mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($retval)){
			if($row["product_type"] == "t_shirt"){
				
			}
		}
	}else{
		echo "conn error";
	}
}