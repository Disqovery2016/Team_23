<?php  

include 'db.php'; $isartist = $_POST["isartist"]; echo "$isartist";

if(isset($_POST["email"],$_POST["password"],$_POST["address"],$_POST["name"],$_POST["contact"])){

$conn = mysqli_connect($host, $user, $pass, $database);  
if ($conn) {
$cemail=mysqli_real_escape_string($conn, $_POST["email"]);
$cpassword=mysqli_real_escape_string($conn, $_POST["password"]);

if($isartist == 1){
	$sql = 'SELECT * FROM customers';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){
  $i=0; 
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['emailid']==$cemail && $row['password']==$cpassword){
	        $i=1; $id=$row['cid']; $cname=$row['name'];
			break;
		}	
	}
if($i==1){
	session_start();
	$_SESSION["cname"]=$cname; $_SESSION["cemail"]=$cemail; $_SESSION["pid"]=$id; $_SESSION["cpassword"]=$cpassword; $_SESSION["caddress"]=$caddress; 
	header("Location: user_home.php"); 
} 
else{echo "Either emailid or password is incorrect. Go back and try again!" ; }

}
else{  
echo "No Such User !";  
}
}
/* ------------------###############-----------------ARTISTS------------######################################*/

else{
	$sql = 'SELECT * FROM artists';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){
  $i=0; 
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['aemail']==$cemail && $row['apassword']==$cpassword){
	        $i=1; $id=$row['aid']; $cname=$row['aname']; $aaddress=$row['aaddress']; $areview=$row['areview']; $arating=$row['arating'];
			break;
		}	
	}
if($i==1){
	session_start();
	$_SESSION["aname"]=$cname; $_SESSION["aemail"]=$cemail; $_SESSION["aid"]=$id; $_SESSION["apassword"]=$cpassword; $_SESSION["aaddress"]=$caddress;
	$_SESSION["areview"]=$areview; $_SESSION["arating"]=$arating; 
	header("Location: artist_home.php"); 
} 
else{echo "Either emailid or password is incorrect. Go back and try again!" ; }

}
else{  
echo "No Such User !";  
} 
}

}else{
	echo "Connection error";
}

}else{
	echo "All Details Not Entered";
}

?>  