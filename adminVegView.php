<?php
session_start();
?>

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
	<style >
  .navbar-nav {
    margin-left: auto;
  }
  .navbar-brand{
    color: "orange";
  }
  .logo-image{
    width: 51px;
    height: 49px;
    border-radius: 50%;
    overflow: hidden;
    opacity: 1;
}
#line{
	text-decoration:none; 
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
url="adminVegViewDB.php?id="+a;
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:1536px;padding-top:0px;padding-bottom: 0px;height:72px;opacity:0.9;">
  <a class="navbar-header" href="login.html">
    <div class="logo-image">
    <img src="images/logo1_round1.jpeg" width="60" height="60" class="img-fluid" alt="">
  </div>
  </a>
  <pre style="font-size: 0px;padding-bottom: -5px;border:0px;background-color: transparent;padding-right:960px;">

    <h1 style="color:white;font-family: Georgia, serif;font-size:23px; ">      <a href="login.html" style="color:white;" id="line">Tasty
              Touch</a>           </h1>
  </pre>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="adminMenu.php" style="font-family: Georgia, serif;font-size:18px; ">MENU <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminOrderRequests.php" style="font-family: Georgia, serif;font-size:18px; " >VIEW Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="login.html" style="font-family: Georgia, serif;font-size:18px; "><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>

</nav>

	<?php
	$host = "localhost";
	$dbUsername="root";
	$dbPassword="root";
	$dbName="food";
	$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
	$res = $con->query("select * from veg");

	
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
		<button type=\"submit\" onclick=\"getMarks($id)\" name=\"button1\" class=\"btn btn-dark\" style=\"height:38px;\">  
		<span class=\"glyphicon glyphicon-trash\">  
		</span> <b>Delete</b>  
		</button>
		</div>
		</form>
		</div>
		</div>";
	}

	?>

</body>
</html>
