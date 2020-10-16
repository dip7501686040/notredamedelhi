<?php
include"connect.php"; 
include"function.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=1">
	<title>junior photos</title>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
	<?php   require_once('header.php');?>
</head>
<body>

	<div>
<div class="gallery-wrap">
	<?php
    $result=getjuniorPhotos($conn);    
   while($row = mysqli_fetch_array($result)) {
   	$imageURL = 'uploads/'.$row["file_name"];
?>
	<div class="gallery-box">
		<a href="<?php echo 'uploads/'.$row['file_name'] ?>"><img src="<?php echo 'uploads/'.$row['file_name'] ?>"></a>

	</div>
	<?php
}

?>
	


	
</div>



</div>
<script type="text/javascript" src="script/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="script/gallery.js"></script>
<?php require_once('footer.php'); ?>
</body>
</html>