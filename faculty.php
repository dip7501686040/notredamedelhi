<?php include"connect.php"; 
if($_POST['submit']){
$name=$_POST['name'];
$des=$_POST['des'];
$insert = mysqli_query($conn,"INSERT into faculty (name,Designation,dop) VALUES ('$name','$des', NOW())");
echo"shubham";
if($insert){
	$msg="done";
	
	
}
else{
	$msg="error";
}
}
if($_POST['tsubmit']){
    $data=$_POST['data'];
    $col=$_POST['col'];
    $id=$_POST['id'];
    $msg="error";
    $insert = mysqli_query($conn,"UPDATE faculty set `$col`='$data' where id=".$id);
    if($insert){
                $msg="done";
                $text="Updated";
                $statusMsg = "The faculty updated  successfully.";
            }else{

                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
}
if($_POST['csubmit']){
    $subject=$_POST['subject'];
$con=$_POST['con'];
$insert = mysqli_query($conn,"INSERT into sub_co (subject,co_ordinator) VALUES ('$subject','$con')");
echo"shubham";
if($insert){
    $msg="done";
    
    
}
else{
    $msg="error";
}
}
if($_POST['ctsubmit']){
    $data=$_POST['data'];
    $col=$_POST['col'];
    $id=$_POST['id'];
    $msg="error";
    $insert = mysqli_query($conn,"UPDATE sub_co set `$col`='$data' where id=".$id);
    if($insert){
                $msg="done";
                $text="Updated";
                $statusMsg = "The faculty updated  successfully.";
            }else{

                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
}
header("location:add_faculty.php?msg=".$msg."&name=".$name);

?>