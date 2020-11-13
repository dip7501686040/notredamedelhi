<?php
// Include the database configuration file
include 'connect.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$title=$_POST['title'];
$date=$_POST['date'];
$con=$_POST['dis'];
$msg="error";
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','mp4','MPG','mkv');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conn,"INSERT into eventsindex(img,title,content, date) VALUES ('".$fileName."','".$title."','".$con."', '".$date."')");
            if($insert){
                $msg="done";
                $statusMsg = "The  ".$title. " event has been uploaded successfully.";
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

// Display status message
header("location:add_event.php?msg=".$msg."&name=".$statusMsg);

?>