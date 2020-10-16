<!DOCTYPE html>
<html>
<head>
	<title>img</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<select name="category">
		<option value="junior">junior</option>
		<option value="Senior">Senior</option>
	</select>
	<br>
      <br>
      <select name="type">
		<option value="photo">photo</option>
		<option value="video">video</option>
	</select>
	<br>

	<input type="file" name="file"><br>
	<input type="submit" name="submit">
</form>
</body>
</html>