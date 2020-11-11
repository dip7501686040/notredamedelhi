<?php require_once('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
  <?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
          $name=$_GET['name'];
          echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' .
  </div>';
        }
        else{
          echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>'.$name.' .
  </div>';
        }
       }

  ?>
  <form action="new_event.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Event Img</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="Category">Title</label>
      </div>
      <div class="col-75">
        <input type="text" name="title">
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="country">Date</label>
      </div>
      <div class="col-75">
        <input type="Date" name="date">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Discription</label>
      </div>
      <div class="col-75">
        <textarea name="dis" rows="10" >
        </textarea>
      </div>
    </div>
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>
<div style="margin-top: 500px;">
<?php require_once('footer.php'); ?>
</div>