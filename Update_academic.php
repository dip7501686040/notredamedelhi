<?php include"connect.php"; 

$cur=$_POST['cur'];
$sam10=$_POST['sam10'];
$epath=$_POST['epath'];
$diksha=$_POST['dik'];
$cbse=$_POST['cbse'];
$hpe=$_POST['hpe'];
$facebook=$_POST['facebook'];
$alumni=$_POST['alumni'];
$insert = mysqli_query($conn,"UPDATE Academic_link set `curriculum`='$cur',`Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam`='$sam10',`E-Pathshala`='$epath',`Diksha`='$diksha',`CBSE_Sample_paper`='$cbse',`hpe`='$hpe',`facebook`='$facebook',`alumni`='$alumni' where id=1");

if($insert){
	$msg="done";
	
	
}
else{
	$msg=" error";
}
header("location:Academic.php?msg=".$msg."&name=links");

?>