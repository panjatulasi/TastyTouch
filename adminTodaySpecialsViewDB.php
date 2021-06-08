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
	$res = $con->query("delete from cart where itemName='$itemName' ");
	}
	$re = $con->query("delete from todayspecials where id=$id");

	header("Location:http://localhost/TastyTouch/adminTodaySpecialsView.php");

?>