<?php include"connect.php"; 
if(isset($_POST['check'])){
$title=$_POST['title'];
$link=$_POST['link'];
$insert = mysqli_query($conn,"INSERT into home_links (title,link,dop) VALUES ('$title','$link', NOW())");
if($insert){
	$msg="done";
	$title=$title." with link";	
	
}
else{
	$msg="error";
}
}

else{
	$title=$_POST['title'];
$insert = mysqli_query($conn,"INSERT into home_links (title,dop) VALUES ('$title', NOW())");
if($insert){
	$msg="done";
	$title=$title." without link";
}
else{
	$msg="error";
}

}
header("location:add_home_link.php?msg=".$msg."&title=".$title);

?>