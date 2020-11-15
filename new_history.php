<?php include"connect.php"; 

$des=$_POST['des'];
$insert = mysqli_query($conn,"INSERT into history (content,dop) VALUES ('$des', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_history.php?msg=".$msg."&name=".$name);

?>