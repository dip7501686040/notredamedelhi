<?php
require('header.php');
?>
<div class="card admin_dashboard">
    <div class="card-header">
        Admin Dashboard
    </div>
    <div class="card-body">
        <form method="post" id="notice_upload_form" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="notice_purpose" class="col-form-label">Notice Purpose</label>
                    <input type="text" placeholder="less than 200 charecter" name="notice_purpose" class="form-control" id="notice_purpose" required>
                </div>
                <div class="form-group">
                    <label for="notice_file" class="col-form-label">Notice File</label>
                    <input type="file" class="form-control" id="notice_file" name="notice_file" required>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" id="notice_upload" class="btn btn-primary" name="notice_upload" value="Save">
            </div>
        </form>
    </div>
</div>

<?php
require('footer.php');
?>
<?php

if (isset($_POST['notice_upload'])) {

    if (!empty($_POST['notice_purpose']) && !empty($_FILES['notice_file'])) {
        $filename = $_FILES['notice_file']['name'];
        $tmpname = $_FILES['notice_file']['tmp_name'];
        $path = "notice_uploads/" . $filename;
        $query = "insert into notices (id, notice, date, file) values (NULL, '" . trim($_POST['notice_purpose']) . "', CURDATE(), '" . $filename . "')";
        $result = $db_handler->runQuery($query);

        if ($result) {
            if (move_uploaded_file($tmpname, $path)) {

                echo "<script>
                alert('Notice Succesfully Uploaded');
                window.location.href='admin.php';
                </script>";
            } else {
                echo "<script>alert('Sorry can't Upload Notice');
                window.location.href='admin.php';
                </script>";
            }
        } else {
            echo "<script>alert('Sorry can't Upload Notice');
                window.location.href='admin.php';
            
            </script>";
        }
    } else {
        echo "<script>alert('Sorry can't Upload Notice');
                window.location.href='admin.php';
        
        </script>";
    }
}
?>
<?php
?>