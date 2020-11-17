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

<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Events</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Registration No</th>
        <th>Admission No</th>
        
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result = mysqli_query($conn, "SELECT * FROM tc_issued ORDER BY id desc");
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        


        <td><form action="add_tc.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="r_number">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;"  value="<?php echo $row['r_number'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>




             <td><form action="add_tc.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="a_number">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;"  value="<?php echo $row['a_number'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>



            
        




        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="tc_issued">
      <input type="hidden" name="loc" value="tc_issued.php">
    <input type="hidden" name="delete" value="<?php echo $row['id'] ?>">
    <input type="submit" name="submit" value="Remove" style="align-self: center;">
  </form></td>
       </tr>
    <?php
    $count=$count+1;
  }
      ?>
    </tbody>
  </table>
</div>
<?php
require('footer.php');
?>