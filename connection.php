 <html>
 <body>
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
$result = $con->query("select * from customer");
$len = mysqli_num_rows($result);
if($len != 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['emailId'];
        <p>echo $row['emailId'];</p>
    }
}
else{
    echo "No records";
}
?>
        </body>
 </html> 

