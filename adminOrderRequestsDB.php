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

	$res = $con->query("delete from orderdetails where id=$id ");

	header("Location:http://localhost/TastyTouch/adminOrderRequests.php");

?>