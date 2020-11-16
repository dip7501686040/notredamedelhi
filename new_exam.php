<?php include"connect.php"; 

$name=$_POST['name'];
$insert = mysqli_query($conn,"INSERT into exam_prom (rule,dop) VALUES ('$name', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_exam&prom.php?msg=".$msg."&name=".$name);

?>