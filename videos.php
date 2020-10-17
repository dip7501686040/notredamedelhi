<?php
require('header.php');
?>
<div class="card admin_dashboard">
    <div class="card-header">
        VIDEOS
    </div>
    <div class="card-body d-flex flex-column align-items-center admin_youtube_video">
        <form method="POST" class="w-75" action="videos.php" enctype="multipart/form-data">
            <div class="form-group d-flex">
                <input class="form-control w-75" type="text" name="link">
                <input class="form-control w-25 ml-2" type="submit" name="upload" value="ADD VIDEO">
            </div>
        </form>
    </div>
</div>
<?php
require('footer.php');
?>
<?php

if (isset($_POST['upload'])) {
    $name = urlencode($_POST['link']);


    $sql = "INSERT INTO video (name) VALUES('$name')";

    $res = $db_handler->runQuery($sql);

    if ($res == 1) {
        echo "<script>
         {
          alert('Successfully Inserted!!');
          window.location.href = 'admin.php'; 
        }
        </script>";
    }
}
?>