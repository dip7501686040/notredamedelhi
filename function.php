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

function admission_doc($conn){
	$result = mysqli_query($conn,"SELECT * FROM admission_doc where id =1" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}

function principal($conn){
	$result = mysqli_query($conn,"SELECT * FROM current_principle WHERE id=(SELECT max(id) FROM current_principle);" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}
function old_principal($conn){
	$result = mysqli_query($conn,"SELECT * FROM current_principle where id !=(SELECT max(id) from current_principle) order by id asc;" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}
function join_date($conn,$id){
	$result = mysqli_query($conn,"SELECT start from current_principle  WHERE  id != (SELECT Max(id) from current_principle);" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return 1;
   }  
}
 
 function event_date($conn){
	$result = mysqli_query($conn,"SELECT * FROM events order by id desc" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}
function school_info($conn){
	$result = mysqli_query($conn,"SELECT * from school_info  WHERE  id = (SELECT Max(id) from school_info);" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return 1;
   }  
}
 

 function getobjectives($conn){
	$result = mysqli_query($conn,"SELECT * FROM objectives" );
	if(mysqli_num_rows($result) > 0){
		return $result;

	}
   else{
   	return "no Data";
   }  
}  
?>
