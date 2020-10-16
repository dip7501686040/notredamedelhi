<?php require_once('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">File </label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="Category">Category</label>
      </div>
      <div class="col-75">
        <select id="Cateegory" name="category">
          <option value="defult">Choose category</option>
          <option value="Senior">Senior</option>
          <option value="Junior">Junior</option>
        </select>
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="country">Type</label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
          <option value="Defult">Choose Type</option>
          <option value="Photo">Photo</option>
          <option value="Video">Video</option>
        </select>
      </div>
    </div>
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>
<div style="margin-top: 200px;">
<?php require_once('footer.php'); ?>
</div>