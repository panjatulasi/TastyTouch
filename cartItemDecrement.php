<?php
session_start();
?>


<?php
$id=$_GET["id"];
$host = "localhost";
$dbUsername="root";
$dbPassword="root";
$dbName="food";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error()){
	die("connect error");
}
else{
	echo "Connected";
}
$email = $_SESSION["loginId"];
$result = $con->query("select * from cart where id=$id and emailId='$email' ");
if(($row = mysqli_fetch_assoc($result)) !== null){
	$quantity=$row['quantity'];
	$quantity--;
	if($quantity>0){
		if($con->query("update cart set quantity=$quantity where id=$id and emailId='$email' ") === TRUE){
			echo "Update Done";
		}
		else{
			echo "Update Failed";
		}
	}
	else{
		$re = $con->query("delete from cart where id=$id and emailId='$email' ");
	}

	}

?>