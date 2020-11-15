<?php include"connect.php"; 

$name=$_POST['name'];
$des=$_POST['des'];
$insert = mysqli_query($conn,"INSERT into rules (heading,content,dop) VALUES ('$name','$des', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_rules.php?msg=".$msg."&name=".$name);

?>