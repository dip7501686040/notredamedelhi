<?php include"connect.php"; 

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$name=$_POST['pname'];
$date=$_POST['yoj'];
$msg=$_POST['message'];
$msg2=$_POST['message2'];
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','mp4','MPG','mkv');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            
$insert = mysqli_query($conn,"INSERT into current_principle (img,name,start,message,message2) VALUES ('$fileName','$name', '$date','$msg','$msg2')");
            if($insert){
                $statusMsg = "The file principal has been upldated successfully.";
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




echo"shubham";
if($insert){
	$msg="done";
	header("location:index.php");
	
}
else{
	$msg="error";
	header("location:new_principals.php?msg=".$statusMsg);
}


?>