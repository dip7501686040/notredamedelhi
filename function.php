<?php  include"connect.php";

function getseniorPhotos($conn){
	$result = mysqli_query($conn,"SELECT * FROM files where category='Senior' AND type='Photo'");
if (mysqli_num_rows($result) > 0) {
	
	return $result;
}
else{
	return "no data";
}
}

function getjuniorPhotos($conn){
	$result = mysqli_query($conn,"SELECT * FROM files where category='Junior' AND type='Photo'");
if (mysqli_num_rows($result) > 0) {
	
	return $result;
}
else{
	return "no data";
}
}

function getjuniorVideo($conn){
	$result = mysqli_query($conn,"SELECT * FROM files where category='Junior' AND type='Video'");
if (mysqli_num_rows($result) > 0) {
	
	return $result;
}
else{
	return "no data";
}
}

function getseniorVideo($conn){
	$result = mysqli_query($conn,"SELECT * FROM files where category='Senior' AND type='Video'");
if (mysqli_num_rows($result) > 0) {
	
	return $result;
}
else{
	return "no data";
}
}

?>
