<?php

require_once('header.php');
include"connect.php"; 
$page=$_GET['page'];
if($page=='sp'){
	$result=getseniorPhotos($conn);
}
else if($page=='jp'){
	$result=getJuniorPhotos($conn);
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=1">
	<title>junior photos</title>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>

	<div class="container">
<div class="gallery-wrap">
	<?php
        
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