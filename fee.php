<?php include"connect.php"; 

$session=$_POST['session'];
$one=$_POST['one'];
$two=$_POST['two'];
$three=$_POST['three'];
$four=$_POST['four'];
$five=$_POST['five'];
$six=$_POST['six'];
$seven=$_POST['seven'];
$eight=$_POST['eight'];
$nine=$_POST['nine'];


$insert = mysqli_query($conn,"UPDATE new_fee set `session`='$session', `one`=$one,`two`=$two,`three`='$three',`four`='$four',`five`='$five',`six`='$six',`seven`='$seven',`eight`='$eight',`nine`='$nine' where id=1 ");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
header("location:update_fee.php?msg=".$msg."&name=updated");

?>
