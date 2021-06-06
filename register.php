<?php
session_start();
?>

<?php
// remove all session variables
session_unset();
?>


<?php
error_reporting(0);

$name =$_POST['name'];
$phone = $_POST['phone'];
$emailId =$_POST['emailId'];
$address = $_POST['address'];
$city =$_POST['city'];
$pincode = $_POST['pincode'];
$district =$_POST['district'];
$state =$_POST['state'];
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

if($con->query("insert into customer(name,phone,emailId,address,city,pincode,district,state,password) values('$name',$phone,'$emailId','$addresss','$city',$pincode,'$district','$state','$password')") === TRUE){
	echo "Inserted Successfully";
	header("Location:http://localhost/TastyTouch/login.html")
}
else{
	echo "Insert failed";
}

?>