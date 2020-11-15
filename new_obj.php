<?php include"connect.php"; 

$name=$_POST['name'];
$des=$_POST['des'];
$insert = mysqli_query($conn,"INSERT into objectives (heading,content,dop) VALUES ('$name','$des', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_objectives.php?msg=".$msg."&name=".$name);

?>