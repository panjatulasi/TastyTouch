<?php
session_start();
?>


<?php
$amount=$_GET["amount"];
//$amount=0;
$host = "localhost";
$dbUsername="root";
$dbPassword="root";
$dbName="food";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
$itemName='';
$quantity='';
if(mysqli_connect_error()){
	die("connect error");
}
else{
	echo "Connected";
}
$email = $_SESSION["loginId"];
$res = $con->query("select * from cart where emailId='$email' ");
while($row = mysqli_fetch_assoc($res)){
		$itemName=$itemName.",".$row['itemName'];	
		$quantity=$quantity.",".$row['quantity'];
	}
	if($con->query("insert into orderdetails(id,itemName,quantity,total,emailId) values(NULL,'$itemName','$quantity',$amount,'$email')") === TRUE){
	echo "Inserted Successfully";
	header("Location:http://localhost/TastyTouch/menu.html");
}
else{
	echo "Insert failed";
}

?>