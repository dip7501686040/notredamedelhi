<?php
require_once('connect.php');
if(isset($_POST['check'])){
if (isset($_POST['notice_upload'])) {

    if (!empty($_POST['notice_purpose']) && !empty($_FILES['notice_file'])) {
        $filename = $_FILES['notice_file']['name'];
        $tmpname = $_FILES['notice_file']['tmp_name'];
        $msg='error';
        $path = "notice_uploads/" . $filename;
        $query = "insert into notices ( notice, date, file,new) values ('" . trim($_POST['notice_purpose']) . "', CURDATE(), '" . $filename . "','".$_POST['new']."')";
        $result = mysqli_query($conn,$query);

        if ($result) {
            if (move_uploaded_file($tmpname, $path)) {
                $msg='done';
                $text="Notice Succesfully Uploaded";
                header("location:upload_notice.php?msg=".$msg."&data=".$text);
            } else {
                $text="Sorry can't Upload Notice1";
                header("location:upload_notice.php?msg=".$msg."&data=".$text);
            }
             
        } else {
                $text="Sorry can't Upload Notice1";
                header("location:upload_notice.php?msg=".$msg."&data=".$text);
        }
    } else {
         $text="Sorry can't Upload Notice1";
                header("location:upload_notice.php?msg=".$msg."&data=".$text);
        
    }
}
}
else{
    if (isset($_POST['notice_upload'])) {
    $query = "insert into notices ( notice, date,new) values ('" . trim($_POST['notice_purpose']) . "', CURDATE(),'".$_POST['new']."')";
        $result = mysqli_query($conn,$query);

        if ($result) {
            $msg='done';
                $text="Notice Succesfully Uploaded";
                header("location:upload_notice.php?msg=".$msg."&data=".$text);
            }
        }
}

?>