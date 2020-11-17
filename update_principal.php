<?php  
require_once('connect.php');
if($_POST['psubmit']){
	$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$col=$_POST['col'];
$id=$_POST['id'];
$msg="error";
if(isset($_POST["psubmit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conn,"UPDATE current_principle set `$col`='$fileName' where id=".$id);

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
	$id=$_POST['id'];
	$msg="error";
    $insert = mysqli_query($conn,"UPDATE current_principle set `$col`='$data' where id=".$id);
    if($insert){
            	$msg="done";
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);
            } 
}
// Display status message


header("location:new_principals.php?msg=".$msg."&name=".$statusMsg);
?>