<?php include"connect.php"; 

$title=$_POST['title'];
$link=$_POST['link'];
$insert = mysqli_query($conn,"INSERT into home_links (title,link,dop) VALUES ('$title','$link', NOW())");
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_home_link.php?msg=".$msg."&title=".$title);

?>