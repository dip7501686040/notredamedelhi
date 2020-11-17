<?php include"connect.php"; 
if($_POST['submit']){
$name=$_POST['name'];
$des=$_POST['des'];
$insert = mysqli_query($conn,"INSERT into objectives (heading,content,dop) VALUES ('$name','$des', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}}
if($_POST['tsubmit']){
	$data=$_POST['data'];
    $col=$_POST['col'];
    $id=$_POST['id'];
    $msg="error";
    $insert = mysqli_query($conn,"UPDATE objectives set `$col`='$data' where id=".$id);
    if($insert){
                $msg="done";
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
}
header("location:add_objectives.php?msg=".$msg."&name=".$name);

?>