<?php
require('header.php');
?>
<br><br>
<div class="container">
  <?php

  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "done") {
      $name = $_GET['name'];
      echo '<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success!</strong>.' . $name . ' Your TC is successfully Added.
</div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Danger!</strong> You Failed to add TC .
</div>';
    }
  }

?>
<div class="card">
  <div class="card-body">
  <form action="add_tc.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Registration Number</label>
    <input type="text" name="r_number" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Admission Number</label>
    <input type="text" name="a_number" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload TC (pdf,jpg,jpeg,doc)</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

        <button type="submit" name="submit" class="btn" style="background-color: #212529;color:white;">Approved</button>
      </form>
    </div>
  </div>

</div>
<br> <br>
<?php
require('footer.php');
?>