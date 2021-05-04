<!DOCTYPE html>
<html>
<head>
	<style>
body {
  background-image: url('images/bg6.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  height: 100%;
  overflow: hidden;
  
}
</style>


	<title>Display</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">  
	<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/style.css">
</script>
</head>
<body>

<?php
$host = "localhost";
$dbUsername="root";
$dbPassword="root";
$dbName="food";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
// if(mysqli_connect_error()){
// 	die("connect error");
// }
// else{
// 	echo "Connected";
// }

$res = $con->query("select * from todayspecials");
// echo "<div style=\"padding-top:90px;\"></div>";
echo "<div class=\"row\">
";

while($row = mysqli_fetch_assoc($res)){
	$path = 'images/'.$row['imageName'];
	$cost = $row['cost'];
	$itemName=$row['itemName'];
	// echo $path;
	// echo $path;
	// echo "<img class=\"card\" src=$path >";
	// echo '<img src=$path style="width:500px;height:500px;">';	
	echo "
	<div class=\"col-md-3\" style=\"padding-top:70px;padding-right:15px\">
	<div class=\"card\" style=\"height: 300px;width: 300px;\">
                            <div class=\"card-img-top\" style=\"background-image: url($path); color:white;height: 100%;background-repeat: no-repeat;background-position: center;background-size: cover;\">
                            <h3 style=\"padding-top:220px;padding-left:20px\"><strong><mark style=\"color:white;background-color:black;\">$itemName</mark></strong></h3>
                            </div>
                            <div class=\"row\">
                            <div class=\"col-md-4\" style=\"padding-right:5px\">
                            <h3 style=\"color:black\"><strong><mark style=\"color:white;background-color:black\">$cost/- </mark></strong> </h3> 
                            </div>
                            <div class=\"col-md-1\"></div>
                            <div class=\"col-md-6\" style=\"padding-top:18px;padding-right:20px\">
                            <button type=\"button\" class=\"btn btn-dark btn-sm\">  
          <span class=\"glyphicon glyphicon-shopping-cart\">  
</span> <b>Add to Cart</b>  
        </button>
                            </div>
                            </div>
                            </div>
                            </div>";
}

?>

</body>
</html>