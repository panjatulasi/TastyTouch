<!DOCTYPE html>
<html>
<head>
	<title>Upload images</title>
	<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">


<link rel="stylesheet" href="css/style.css">

</head>
<body>

<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner"
		 style="background-image: url(images/bg5.jpg);opacity:0.8">
		<div class="overlay">
			<img src="images/logo1.png" style="width: 220px; margin-top:-30px;height: 220px;padding-top: 5px;padding-right: 5px;opacity: 10;padding-left: 15px" />
			<h1 style="color:white;padding-right: 35px;margin-top:-85px;padding-left: 89px;font-family: Georgia, serif;font-size:45px; ">Tasty</h1>
			<h1 style="color:white;padding-right: 20px;margin-top:-15px;padding-left: 160px;font-size:45px;font-family: Georgia, serif;">Touch</h1>
		</div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-14 col-md-offset-0 text-left">

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box"
							data-animate-effect="fadeInUp" >
						</div>
						<div class="col-md-4 col-md-push-1 animate-box"
							data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content" style="background-color: black;opacity:0.9;font-family: Georgia,serif;">
										<div class="tab-content-inner active" data-content="signup" style="color:white">
											<h3 style="color:#f97212;font-family: Georgia, serif;">Upload Veg</h3>
											<form action="uploadVegDB.php" method="POST" enctype="multipart/form-data">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="itemName">Item Name</label> <input type="text"
															name="itemName"  required="required" class="form-control" style="color:white">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="cost">COST</label> <input
															type="text"  name="cost"  required="required" class="form-control" style="color:white">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label >Upload Image</label>
														<input type="file" name="myImages[]" required="required"  style="color:white"/>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="submit" value="Upload Images" class="btn btn-warning btn-block"
															style="background-color:#f97212">
													</diV>
												</div>
												<a href="adminMenu.php" style="color:#f97212;font-family: Georgia, serif;font-size:17px;padding-left:165px"><b>Go to menu</b></a>
										</form>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</header>
</body>
</html>