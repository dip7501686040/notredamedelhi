<?php
require('header.php');
if(isset($_SESSION['name']))

{	

?>
<link rel="stylesheet" type="text/css" href="css/form.css">

<br><br>
<div class="container">
  <?php

  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "done") {
      $name = $_GET['name'];
      echo '<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success!</strong>.' . $name . ' Your File is successfully Added.
</div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Danger!</strong> You Failed to add File .
</div>';
    }
  }

  ?>
<div class="container">
  
  <form action="add_school-info.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Heading </label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="head" placeholder="Enter Heading" required="Enter Name">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Information</label>
      </div>
      <div class="col-75">
        <input type="text" id="des" name="info" placeholder="Enter Detail" required="Enter Designation">
      </div>
    </div>
    
     
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="upload">
    </div>
  </form>
</div>




  <div class="card">
    <div class="card-body">
      <form action="add_school-info.php" method="POST" enctype="multipart/form-data">
        <h3>Update School Information</h3>
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload File (pdf,jpg,jpeg,doc)</label>
          <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button type="submit" name="submit" class="btn" style="background-color: #212529;color:white;">Update</button>
      </form>
    </div>
  </div>

</div>


<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> School info</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Heading</th>
        <th>Detail</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getinfo($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><form action="add_school-info.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="head"  style="border:none;display: inline-block;"  value="<?php echo $row['heading'] ?>">
    
            </td>
        <td>
            
            <input type="text" name="info"  style="border:none;display: inline-block;"  value="<?php echo $row['info'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="school_info2">
      <input type="hidden" name="loc" value="update_school-info.php">
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



<br> <br>
<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>