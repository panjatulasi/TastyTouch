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
	$res = $con->query("select * from cart");

	
	echo "<div style=\"padding-top:150px;padding-right:1000px;padding-left:10px\">
        <table class=\"table table-bordered table-hover table-sm text-center table_legenda\" style=\"width:1500px;padding-top:150px;margin-left:auto;margin-right:auto\">
            <thead>
                <tr class=\"text-white\" style=\"background-color: hsl(36, 93%, 61%);\">
                    <th style=\"text-align:center;\">Item Name</th>
                    <th style=\"text-align:center;\">Cost</th>
                    <th style=\"text-align:center;\">Quantity</th>
                </tr>
            </thead>
            <tbody>
	";

	while($row = mysqli_fetch_assoc($res)){
		$cost = $row['cost'];
		$itemName=$row['itemName'];	
		$quantity=$row['quantity'];
		$id = $row['id'];
		echo "
		
                <tr style=\"background-color: rgba(0,0,0,0.5);\">
                    <td style=\"text-align:center;color:whitesmoke\">$itemName</td>
                    
                    <td style=\"text-align:center;color:whitesmoke\">$cost</td>
                    <td style=\"text-align:center;color:whitesmoke\">$quantity</td>
    </tr>
    ";
		
	}
	


	?>
	</tbody>
    </table>
<center style="padding-left: 1300px;padding-top:30px">
    <button type="submit" onclick="getMarks()" name="button1" class="btn btn-dark">  
		  
		<b>Check Out</b>  
		</button>
	</center>


</body>
</html>
