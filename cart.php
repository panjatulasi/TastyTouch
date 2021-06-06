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
$result = $con->query("select * from todayspecials where id=$id");
if(($row = mysqli_fetch_assoc($result)) !== null){
	$itemName=$row['itemName'];
	$cost=$row['cost'];
	$res = $con->query("select * from cart where itemName='$itemName' and cost=$cost");
	if($r1 = mysqli_fetch_assoc($res)){
		$quantity = $r1['quantity'];
		$quantity++;
		$id = $r1['id'];
		if($con->query("update cart set quantity=$quantity where id=$id") === TRUE){
			echo "Update Done";
		}
		else{
			echo "Update Failed";
		}

	}
	else {

		if($con->query("insert into cart(id,itemName,cost,quantity) values(NULL,'$itemName',$cost,1)") === TRUE){
			echo "Inserted Successfully";
		}
		else{
			echo "Insert failed";
		}
	}
}

?>