

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
  height: auto;
}
</style>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
a, a:hover, a:focus, a:active {
text-decoration: none;
color: inherit;
}

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:1556px;padding-top:0px;padding-bottom: 0px;height:72px;opacity:0.9;">
  <a class="navbar-header" href="login.html">
    <div class="logo-image">
    <img src="images/logo1_round1.jpeg" width="60" height="60" class="img-fluid" alt="">
  </div>
  </a>
  <pre style="font-size: 0px;padding-bottom: -5px;">

    <h1 style="color:white;font-family: Georgia, serif;font-size:23px; ">      
        <a href="login.html" style="color:white;" id="line">Tasty
              Touch</a></h1>
  </pre>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="adminMenu.php" style="font-family: Georgia, serif;font-size:18px; ">MENU <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminOrderRequestsDB.php" style="font-family: Georgia, serif;font-size:18px; ">VIEW ORDERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html" style="font-family: Georgia, serif;font-size:18px; "><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>

</nav>
 
  <div class="row" style="padding-top:25px;padding-right:150px;padding-left:200px;width:2000px;height:300px;">
      <div class="col-md-3">
      <a href="adminVegView.php">
      <div class="card" style="background-image: url(images/veg3.jpeg); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 250px;width: 300px;">
    
    <h3 style="padding-top:190px;padding-left:20px;"><strong><mark style="color:white;background-color:black;font-size: 22px">Vegetarian</mark></strong></h3>
    </a>
    </div>
    <div class="row">
      <div class="col-md-3">
    <a href="adminVegView.php"><button type="submit" class="btn btn-dark"> <b>View</b> </a> 
    </button>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-4">
    <a href="uploadVeg.php"><button type="submit" class="btn btn-dark"> <b>Upload</b> </a> 
    </button>
  </div>
  </div>
    </div>


    <div class="col-md-3">
      <a href="adminNonVegView.php">
      <div class="card" style="background-image: url(images/nonveg2.jpg); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 250px;width: 300px;">
    
    <h3 style="padding-top:190px;padding-left:20px;"><strong><mark style="color:white;background-color:black;font-size: 22px">Non-Vegetarian</mark></strong></h3>
    </a>
    </div>
    <div class="row">
      <div class="col-md-3">
    <a href="adminNonVegView.php"><button type="submit" class="btn btn-dark"> <b>View</b> </a> 
    </button>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-4">
    <a href="uploadNonVeg.php"><button type="submit" class="btn btn-dark"> <b>Upload</b> </a> 
    </button>
  </div>
  </div>
    </div>


    <div class="col-md-3">
      <a href="adminStartersView.php">
      <div class="card" style="background-image: url(images/starter.jpg); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 250px;width: 300px;">
    
    <h3 style="padding-top:190px;padding-left:20px;"><strong><mark style="color:white;background-color:black;font-size: 22px">Starters</mark></strong></h3>
    </a>
    </div>
    <div class="row">
      <div class="col-md-3">
    <a href="adminStartersView.php"><button type="submit" class="btn btn-dark"> <b>View</b> </a> 
    </button>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-4">
    <a href="uploadStarters.php"><button type="submit" class="btn btn-dark"> <b>Upload</b> </a> 
    </button>
  </div>
  </div>
    </div>

    
    </div>
    <div class="row" style="padding-top:45px;padding-right:150px;padding-left:200px;padding-bottom:-10px;width:2000px;height:300px">

      <div class="col-md-3">
      <a href="adminMilkShakesView.php">
      <div class="card" style="background-image: url(images/milkshake1.jpeg); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 250px;width: 300px;">
    
    <h3 style="padding-top:190px;padding-left:20px;"><strong><mark style="color:white;background-color:black;font-size: 22px">MilkShakes</mark></strong></h3>
    </a>
    </div>
    <div class="row">
      <div class="col-md-3">
    <a href="adminMilkShakesView.php"><button type="submit" class="btn btn-dark"> <b>View</b> </a> 
    </button>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-4">
    <a href="uploadMilkShakes.php"><button type="submit" class="btn btn-dark"> <b>Upload</b> </a> 
    </button>
  </div>
  </div>
    </div>


<div class="col-md-3">
      <a href="adminIcecreamView.php">
      <div class="card" style="background-image: url(images/icecreams2.jpeg); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 250px;width: 300px;">
    
    <h3 style="padding-top:190px;padding-left:20px;"><strong><mark style="color:white;background-color:black;font-size: 22px">IceCreams</mark></strong></h3>
    </a>
    </div>
    <div class="row">
      <div class="col-md-3">
    <a href="adminIcecreamView.php"><button type="submit" class="btn btn-dark"> <b>View</b> </a> 
    </button>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-4">
    <a href="uploadIcecream.php"><button type="submit" class="btn btn-dark"> <b>Upload</b> </a> 
    </button>
  </div>
  </div>
    </div>


    
    <!-- <div class="col-md-2"></div> -->
    <div class="col-md-3">
      <a href="displayTodaySpecials.php">
      <div class="card" style="background-image: url(images/tdaySpecials.jfif); color:white;background-repeat: no-repeat;background-position: center;background-size: cover;height: 250px;width: 300px;">
    
    <h3 style="padding-top:190px;padding-left:20px;"><strong><mark style="color:white;background-color:black;font-size: 22px">Todays Specials</mark></strong></h3>
    </a>
    </div>
    <div class="row">
      <div class="col-md-3">
    <a href="adminTodaySpecialsView.php"><button type="submit" class="btn btn-dark"> <b>View</b> </a> 
    </button>
  </div>
  <div class="col-md-3"></div>
  <div class="col-md-4">
    <a href="uploadTodaySpecials.php"><button type="submit" class="btn btn-dark"> <b>Upload</b> </a> 
    </button>
  </div>
  </div>
    </div>

    </div>

</body>
</html>

 