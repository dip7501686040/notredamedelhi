<?php include"connect.php"; 

$r_num=$_GET['check'];
$select = mysqli_query($conn,"SELECT file from tc_issued WHERE r_number='$r_num' OR a_number='$r_num' limit 1");
$row = mysqli_fetch_array($select);
if($row>0){
	$msg="done";
	$name=$row['file'];
	
}
else{
	$msg="error";
	$name="error";
}
header("location:index.php?status=".$msg."&tc=".$name);

?>