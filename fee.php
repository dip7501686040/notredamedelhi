<?php include"connect.php"; 

$name=$_POST['fees'];
$NTPC=$_POST['NTPC'];
$amount=$_POST['Amount'];

$insert = mysqli_query($conn,"INSERT into fees (Fee_name,Amount,NTPC,dop) VALUES ('$name','$amount','$NTPC', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:add_fees.php?msg=".$msg."&name=".$name."&amount=".$amount);

?>
