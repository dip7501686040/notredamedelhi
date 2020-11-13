<?php include"connect.php"; 

$r_num=$_POST['r_number'];
$select = mysqli_query($conn,"SELECT file from tc_issued WHERE r_number=$r_num");
$row = mysqli_fetch_array($result);
if($select){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_faculty.php?msg=".$msg."&name=".$name);

?>