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
	function getMarks(a){
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
		//document.getElementById("result").innerHTML ="Added to Cart Successfully :-)" ;
		
	}
}
url="adminOrderRequestsDB.php?id="+a;
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
        <a class="nav-link" href="adminMenu.php" style="font-family: Georgia, serif;font-size:18px; ">MENU <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminOrderRequests.php" style="font-family: Georgia, serif;font-size:18px; ">VIEW ORDERS</a>
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
	$res = $con->query("select * from orderdetails");
	$total = 0;

	
	echo "
  <div style=\"padding-top:150px;padding-right:300px;padding-left:360px\">
        <table class=\"table table-bordered table-hover table-sm text-center table_legenda\" style=\"width:1500px;padding-top:150px;margin-left:auto;margin-right:auto\">
            <thead>
                <tr class=\"text-white\" style=\"background-color: hsl(36, 93%, 61%);\">
                <th style=\"text-align:center;\">EmailId</th>
                <th style=\"text-align:center;\">Item Name => Quantity</th>
                <th style=\"text-align:center;\">Total Cost</th>
                <th style=\"text-align:center;\">Order Delivered</th>
                </tr>
            </thead>
            <tbody>
	";

	while($row = mysqli_fetch_assoc($res)){
		$total = $row['total'];
		$itemName=$row['itemName'];	
		$itemName=explode(",",$itemName);
		$quantity=$row['quantity'];
		$quantity=explode(",",$quantity);
		$id = $row['id'];
		$email = $row['emailId'];
		echo "
		
                <tr style=\"background-color: rgba(0,0,0,0.5);\">
                    <td style=\"text-align:center;color:whitesmoke\"><b>$email</b></td> <td style=\"text-align:center;color:whitesmoke\"> ";
                    for($i=1;$i<sizeof($itemName);$i++){
                   echo " 
                    <b>$itemName[$i] => $quantity[$i]</b><br>";
                  }
                  echo "
                  </td>
                    <td style=\"text-align:center;color:whitesmoke\"><b>$total</b></td>
                    <td style=\"text-align:center;color:whitesmoke\">
                    <button type=\"submit\" onclick=\"getMarks($id)\" name=\"button1\" class=\"btn btn-dark\" style=\"height:38px;background-color:transparent;\">  
		<span class=\"glyphicon glyphicon-trash\">  
		</span>
		</button></td>
                    
    </tr>
    ";
		
	}
	?>
	
	</tbody>
    </table>
</body>
</html>

