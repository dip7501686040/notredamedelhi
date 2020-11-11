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
function getfaculty($conn){
	$result = mysqli_query($conn,"SELECT * FROM faculty" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}  

function getfeestructure($conn){
	$result = mysqli_query($conn,"SELECT * FROM fees" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}

function gethomelink($conn){
	$result = mysqli_query($conn,"SELECT * FROM home_links" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
} 

function homelink($conn){
	$result = mysqli_query($conn,"SELECT * FROM home_links WHERE id=(SELECT max(id) FROM home_links);" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}

function homeimage($conn){
	$result = mysqli_query($conn,"SELECT * FROM homeimage ORDER BY id DESC LIMIT 4" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}
?>
