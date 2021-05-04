<!DOCTYPE html>
<html>
<head>
	<title>Upload images</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		Enter ItemName:<input type="text" name="itemName">
		<br>
		<br>
		<br>
		Enter Cost:<input type="text" name="cost">
		<br>
		<br>
		<br>
		<input type="file" name="myImages[]"/>
		<br>
		<br>
		<input type="submit" name="submit" value="Upload Images">
	</form>

</body>
</html>