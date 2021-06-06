<?php
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


if(isset($_POST['submit'])){
	foreach ($_FILES['myImages']['tmp_name'] as $key=>$image) {
		$itemName=$_POST['itemName'];
		$cost=$_POST['cost'];
		$imageName=$_FILES['myImages']['name'][$key];
		$imageTmpName=$_FILES['myImages']['tmp_name'][$key];
		$directory='images/';
		$result=move_uploaded_file($imageTmpName, $directory.$imageName);
		if($con->query("insert into todayspecials(id,itemName,cost,imageName) values(NULL,'$itemName',$cost,'$imageName')") === TRUE){
	echo "Inserted Successfully";
	header("Location:http://localhost/TastyTouch/uploadTodaySpecials.php");
}
else{
	echo "Insert failed";
}
	}
	if($result){
		echo "Image Uploaded SuccessFully";
	}
}
?>




