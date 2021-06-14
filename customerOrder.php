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
	<style>
    .table_legenda {
  table-layout: fixed;
}
.table_legenda td {
  overflow-wrap: break-word;
  overflow-y:auto;
  overflow-x:hidden;
  
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
	text-decoration: none;
}

  </style>
  <script type="text/javascript">
	function itemDecrease(a){
		try{
req = new XMLHttpRequest();
}
catch(e1){
alert("Ajax not supported");
}
req.onreadystatechange=function (){
	if(req.readyState == 4){
		location.reload();
		//alert("Added to Cart Successfully :-)");
		// document.getElementById("result").innerHTML ="Added to Cart Successfully :-)" ;
		
	}
}
url="cartItemDecrement.php?id="+a;
req.open("GET",url,true);
req.send(null);
	}


	function itemIncrease(a){
		try{
req = new XMLHttpRequest();
}
catch(e1){
alert("Ajax not supported");
}
req.onreadystatechange=function (){
	if(req.readyState == 4){
		location.reload();
		//alert("Added to Cart Successfully :-)");
		// document.getElementById("result").innerHTML ="Added to Cart Successfully :-)" ;
		
	}
}
url="cartItemIncrement.php?id="+a;
req.open("GET",url,true);
req.send(null);
	}
</script>


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:1536px;padding-top:0px;padding-bottom: 0px;height:72px;opacity:0.9;">
  <a class="navbar-header" href="login.html">
    <div class="logo-image">
    <img src="images/logo1_round1.jpeg" width="60" height="60" class="img-fluid" alt="">
  </div>
  </a>
  <pre style="font-size: 0px;padding-bottom: -5px;border:0px;background-color: transparent;">

    <h1 style="color:white;font-family: Georgia, serif;font-size:23px; ">      <a href="login.html" style="color:white;" id="line">Tasty
              Touch</a></h1>
  </pre>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="menu.html" style="font-family: Georgia, serif;font-size:18px; ">MENU <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewCart.php" style="font-family: Georgia, serif;font-size:18px; ">VIEW CART</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="launchPage.html" style="font-family: Georgia, serif;font-size:18px; "><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>

</nav>



	<?php
	$host = "localhost";
	$dbUsername="root";
	$dbPassword="root";
	$dbName="food";
	$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
  $email = $_SESSION["loginId"];
	$res = $con->query("select * from cart where emailId='$email' ");
	$total = 0;

	
	echo "
  <div style=\"padding-top:150px;padding-right:300px;padding-left:360px\">
        <table class=\"table table-bordered table-hover table-sm text-center table_legenda\" style=\"width:1500px;padding-top:150px;margin-left:auto;margin-right:auto\">
            <thead>
                <tr class=\"text-white\" style=\"background-color: hsl(36, 93%, 61%);\">
                    <th style=\"text-align:center;\">Item Name</th>
                    <th style=\"text-align:center;\">Cost</th>
                    <th style=\"width:55px\"></th>
                    <th style=\"text-align:center;width:100px;\">Quantity</th>
                    <th style=\"width:55px\"></th>
                </tr>
            </thead>
            <tbody>
	";

	while($row = mysqli_fetch_assoc($res)){
		$cost = $row['cost'];
		$itemName=$row['itemName'];	
		$quantity=$row['quantity'];
		$id = $row['id'];
		$total += $cost*$quantity;
		echo "
		
                <tr style=\"background-color: rgba(0,0,0,0.5);\">
                    <td style=\"text-align:center;color:whitesmoke\"><b>$itemName</b></td>
                    
                    <td style=\"text-align:center;color:whitesmoke\"><b>$cost</b></td>
                    <td><button onclick=\"itemIncrease($id)\" type=\"submit\" name=\"plus\" class=\"fas fa-plus\" style=\"background-color:transparent;color:white\"></button></td>
                    <td style=\"text-align:center;color:whitesmoke\"><b>$quantity</b></td>
                    <td><button type=\"submit\" name=\"minus\" class=\"fas fa-minus\" style=\"background-color:transparent;color:white\" onclick=\"itemDecrease($id)\"></button></td>
    </tr>
    
		";
	}
	
	echo "
	</tbody>
    </table>
    <h1 style=\"padding-left: 700px;color:white;\">Total:$total</h1>
<center style=\"padding-left: 700px;padding-top:25px\">
    <button type=\"submit\" onclick=\"orderPlaced($total)\" name=\"button1\" class=\"btn btn-dark\">  
		  
		<b>Place Order</b>
		</button>
	</center> ";
	
	?>
	


</body>
<script type="text/javascript">
	function orderPlaced(a){
		try{
req = new XMLHttpRequest();
}
catch(e1){
alert("Ajax not supported");
}
req.onreadystatechange=function (){
	if(req.readyState == 4){
		//location.reload();
		window.location.replace("menu.html");
		//alert("Added to Cart Successfully :-)");
		// document.getElementById("result").innerHTML ="Added to Cart Successfully :-)" ;
		
	}
}
url="customerOrderDB.php?amount="+a;
req.open("GET",url,true);
req.send(null);
	}
</script>
</html>

