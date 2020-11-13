<?php
// Include the database configuration file
include 'connect.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$r_num=$_POST['r_number'];
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conn,"INSERT into tc_issued(file,r_number) VALUES ('".$fileName."','".$r_num."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("location:tc_issued.php?msg=done&name=".$statusMsg);
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

// Display status message
echo $statusMsg;
?>