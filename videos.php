<?php
require('header.php');
?>
<div class="card admin_dashboard">
    <div class="card-header">
        VIDEOS
    </div>


    <h1><a href="videos_list.php">VIDEOS</a> </h1>

    <form method="POST" action="videos.php" enctype="multipart/form-data">
        <input type="text" name="link">
        <input type="submit" name="upload" value="UPLOAD">
    </form>

</div>
<?php

if (isset($_POST['upload']))
{
    $name = urlencode($_POST['link']);


    $sql= "INSERT INTO video (name) VALUES('$name')";

    $res = $db_handler->runQuery($sql);

    if($res == 1){
        echo "<script>
         {
          alert('Successfully Inserted!!');
          window.location.href = 'admin.php'; 
        }
        </script>";
    }
}
?>

<?php
require('footer.php');
?>
