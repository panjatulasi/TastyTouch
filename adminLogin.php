<?php
error_reporting(0);
$emailId =$_POST['emailId'];
$password = $_POST['password'];
if($emailId == "admin" && $password == "admin"){
	echo "Login Success";
	header("Location:http://localhost/TastyTouch/adminMenu.html");
}
else{
	echo "Login Fail";
	header("Location:http://localhost/TastyTouch/launchPage.html");
}

?>