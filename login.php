<?php
error_reporting(0);
$emailId =$_POST['emailId'];
$password = $_POST['password'];
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
$result = $con->query("select * from customer where emailId='$emailId' and password='$password' ");
if(($row = mysqli_fetch_assoc($result)) !== null){
if($row['emailId'] == $emailId && $row['password'] == $password){
	echo "Login Success";
	header("Location:http://localhost/TastyTouch/menu.html");
}
}
else{
	echo "Login Fail";
}
?>