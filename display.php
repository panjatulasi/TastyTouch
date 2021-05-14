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

		}
		input {
border-top-style: hidden;
border-right-style: hidden;
border-left-style: hidden;
border-bottom-style: hidden;
background-color: none;
}



.no-outline:focus {
outline: none;
}
	</style>

	
<script type="text/javascript">
	function getMarks(a){
		try{
req = new XMLHttpRequest();
}
catch(e1){
alert("Ajax not supported");
}
req.onreadystatechange=function (){
	if(req.readyState == 4){
		alert("Added to Cart Successfully :-)");
		document.getElementById("result").innerHTML ="Added to Cart Successfully :-)" ;
		
	}
}
url="cart.php?id="+a;
req.open("GET",url,true);
req.send(null);
	}
</script>

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
	$res = $con->query("select * from todayspecials");

	
	echo "<div class=\"row\">
	";

	while($row = mysqli_fetch_assoc($res)){
		$path = 'images/'.$row['imageName'];
		$cost = $row['cost'];
		$itemName=$row['itemName'];	
		$id = $row['id'];
		echo "
		<div class=\"col-md-3\" style=\"padding-top:70px;padding-right:15px\">
		<div class=\"card\" style=\"background-image: url($path); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 300px;width: 300px;\">
		<div id=\"result\">
			
		</div>
		<form  name=\"result\" method=\"POST\">
		<h3 style=\"padding-top:220px;padding-left:20px;\"><strong><mark style=\"color:white;background-color:black;\">$itemName</mark></strong></h3>
		</div>
		<div class=\"row\">
		<div class=\"col-md-4\" style=\"padding-right:5px\">
		<h3 style=\"color:black\"><strong><mark style=\"color:white;background-color:black\">$cost/- </mark></strong> </h3> 
		</div>
		
		<div class=\"col-md-1\"></div>
		<div class=\"col-md-6\" style=\"padding-top:18px;padding-right:20px\">
		<button type=\"submit\" onclick=\"getMarks($id)\" name=\"button1\" class=\"btn btn-dark\">  
		<span class=\"glyphicon glyphicon-shopping-cart\">  
		</span> <b>Add to Cart</b>  
		</button>
		</div>
		</form>
		</div>
		</div>";
	}

	?>

</body>
</html>
