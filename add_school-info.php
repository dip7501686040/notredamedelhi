<?php
// Include the database configuration file
include 'connect.php';
$statusMsg = '';
if(isset($_POST['submit'])){
// File upload path
$targetDir = "school_information/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = mysqli_query($conn,"INSERT into school_info(file,date) VALUES ('".$fileName."',NOW())");
            if($insert){
                $statusMsg = "The File has been added successfully.";
                header("location:update_school-info.php?msg=done&name=".$statusMsg);
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
if(isset($_POST['tsubmit'])){
   $id= $_POST['id'];
   $head=$_POST['head'];
   $info=$_POST['info'];
    $update = mysqli_query($conn,"UPDATE school_info2 set `heading`='$head',`info`='$info' where id='$id' ");
    if($update){
        $statusMsg="successfully done";
                header("location:update_school-info.php?msg=done&name=".$statusMsg);

    }
}

if($_POST['upload']){
    $head=$_POST['head'];
    $info=$_POST['info'];
    $insert=mysqli_query($conn,"INSERT INTO school_info2 (heading,info) VALUES('$head','$info')");
    if($insert){
         $statusMsg="successfully insert";
                header("location:update_school-info.php?msg=done&name=".$statusMsg);

    }
}
// Display status message
echo $statusMsg;
?>