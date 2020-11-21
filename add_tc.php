<?php
// Include the database configuration file
include 'connect.php';
$msg="nodata";
$statusMsg="nodata";
if(isset($_POST['submit'])){
    $statusMsg = '';
// File upload path
$targetDir = "TCs/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$r_num=$_POST['r_number'];
$a_num=$_POST['a_number'];
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','JPG','png','jpeg','pdf','JPEG','PDF');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conn,"INSERT into tc_issued(file,r_number,a_number) VALUES ('".$fileName."','".$r_num."','".$a_num."')");
            if($insert){
                $msg="done";
                $statusMsg = "The Registration no ".$r_num. " has been uploaded successfully.";
            }else{
                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG  & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
}

// Display status message
if($_POST['tsubmit']){
    $statusMsg = '';
    $data=$_POST['data'];
    $col=$_POST['col'];
    $id=$_POST['id'];
    $msg="error";
    $insert = mysqli_query($conn,"UPDATE tc_issued set `$col`='$data' where id=".$id);
    if($insert){
                $msg="done";
                $statusMsg = "The number ".$data." has been updated successfully.";
            }else{
                $statusMsg = "Error: " . $insert . "<br>" . mysqli_error($conn);;
            } 
}

                header("location:tc_issued.php?msg=".$msg."&name=".$statusMsg);

echo $statusMsg;
?>