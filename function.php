<?php  include"connect.php";

function getjuniorPhotos($conn){
	$result = mysqli_query($conn,"SELECT * FROM img");
if (mysqli_num_rows($result) > 0) {
	
	return $result;
}
else{
	return "no data";
}
}



?>
