<?php  

$isartist = $_GET["isartist"]; include 'db.php';

if($isartist == 0){
	$conn = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST["email"],$_POST["password"],$_POST["address"],$_POST["name"],$_POST["contact"],$_POST["passwordcnfrm"])){
if($conn){
$cemail=mysqli_real_escape_string($conn, $_POST["email"]);
$cpassword=mysqli_real_escape_string($conn, $_POST["password"]);
$cname=mysqli_real_escape_string($conn, $_POST["address"]);
$caddress=mysqli_real_escape_string($conn, $_POST["name"]);
$ccontact=mysqli_real_escape_string($conn, $_POST["contact"]);
}
if($password!=$passwordcnfrm){
	echo "passwords dont match. Please retry!"; 
}
else{

if (!$conn) {
	print "Server down !";
}
else {

$sql2 = 'SELECT * FROM customers';  
$retval=mysqli_query($conn, $sql2);  $i=0;
  
if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['emailid']==$cemail){
			$i=2; mysqli_close($conn); echo"email already registered!";			
			break;
		}	
	}
} 
	 
if($i==0){
mysqli_autocommit($conn, FALSE);
$sql = 'INSERT INTO customers(name,emailid,password,address,contact) VALUES ("'.$cname.'","'.$cemail.'","'.$cpassword.'","'.$caddress.'","'.$ccontact.'")';  
mysqli_query($conn, $sql);
 mysqli_commit($conn);
if( mysqli_commit($conn)){  
 
 echo "User Created Successfully !";   header("Location: index.php");

}else{  
echo "Could not insert record : Server error";  
}  
  
mysqli_close($conn); 
        }
}
}
}else{ echo "All details not entered !"; }
}

/*------------#####################---------------------------ARTISANS-------------###########################---------------------------*/

else{
	$conn = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST["aname"],$_POST["acontact"],$_POST["aemail"],$_POST["areview"],$_POST["arating"],$_POST["apassword"],$_POST["apasswordcnfrm"])){
if($conn){
$aemail=mysqli_real_escape_string($conn, $_POST["aemail"]);
$apassword=mysqli_real_escape_string($conn, $_POST["apassword"]);
$apasswordcnfrm=mysqli_real_escape_string($conn, $_POST["apasswordcnfrm"]);
$aname=mysqli_real_escape_string($conn, $_POST["aname"]);
$aaddress=mysqli_real_escape_string($conn, $_POST["aaddress"]);
$acontact=mysqli_real_escape_string($conn, $_POST["aontact"]);
$areview=mysqli_real_escape_string($conn, $_POST["areview"]);
$arating=mysqli_real_escape_string($conn, $_POST["arating"]);
}
if($apassword!=$apasswordcnfrm){
	echo "passwords dont match. Please retry!"; 
}
else{

if (!$conn) {
	print "Server down !";
}
else {

$sql2 = 'SELECT * FROM artists';  
$retval=mysqli_query($conn, $sql2);  $i=0;
  
if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['aemail']==$cemail){
			$i=2; mysqli_close($conn); echo"email already registered!";			
			break;
		}	
	}
} 
	 
if($i==0){
mysqli_autocommit($conn, FALSE);
$sql = 'INSERT INTO customers(aname,aemail,apassword,aaddress,acontact) VALUES ("'.$aname.'","'.$aemail.'","'.$apassword.'","'.$aaddress.'","'.$acontact.'")';  
mysqli_query($conn, $sql);
 mysqli_commit($conn);
if( mysqli_commit($conn)){  
 
 echo "User Created Successfully !";   header("Location: index.php");

}else{  
echo "Could not insert record : Server error";  
}  
  
mysqli_close($conn); 
        }
}
}
}else{ echo "All details not entered !"; }
}

?>  