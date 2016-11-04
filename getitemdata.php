<?php

$c = $_SESSION["c"];

if($c == 1){
	getitemdata();
}

function getitemdata(){
	include 'db.php';
	$color = $_REQUEST["color"]; $size = $_REQUEST["size"];
	$conn = mysqli_connect($host, $user, $pass, $database);
	if($conn){
		$sql = "SELECT * FROM commodity"; $retval=mysqli_query($conn, $sql); $items = "";
		while($row = mysqli_fetch_assoc($retval)){
			if($row["product_type"] == "t_shirt" && $row["size"] == $size && $row["colour"] == $color){
				$temp = $price . "%" . $commid;
				
				$last_id = $row["commid"];
				$sql1 = "SELECT description FROM income WHERE design_id IN (SELECt * FROM commodityartifact WHERE commid=$last_id)";
				$retval2 = mysqli_query($conn,$sql); $row2 = mysqli_fetch_array($retval2); $descrp = $row2["description"];
				$temp = $temp . "%" . $descrp;

				$items = $items . "!" . $temp;
			}
		}
		echo $items;
	}else{
		echo "conn error";
	}
}