<?php
require_once('connect.php');
$statusMsg = '';
if($_POST["submit"]){
// File upload path
$targetDir = "documents/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$col=$_POST['col'];
$msg="error";
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conn,"UPDATE admission_doc set `$col`='$fileName' where id=1");

            if($insert){
            	$msg="done";
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
}

if($_POST['tsubmit']){
	$data=$_POST['data'];
	$col=$_POST['col'];
	$msg="error";
    $insert = mysqli_query($conn,"UPDATE admission_doc set `$col`='$data' where id=1");
    if($insert){
            	$msg="done";
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
}
// Display status message
header("location:update_admission.php?msg=".$msg."&name=".$statusMsg);
?>