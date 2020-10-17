<?php require_once('header.php'); 
include"function.php";
 ?>

<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
	<?php

       if(isset($_GET['msg'])){
       	if($_GET['msg']=="done"){
       		$name=$_GET['name'];
       		echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' added successfully as a faculty.
  </div>';
       	}
       	else{
       		echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> faculty is not added .
  </div>';
       	}
       }

	?>
<form action="fee.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Tuition Fees </label>
      </div>
      <div class="col-75">
        <input type="text" id="fee" name="fees" placeholder="Enter Fee  Name" required="Enter Fees Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="NTPC">NTPC</label>
      </div>
      <div class="col-75">
        <select id="NTPC" name="NTPC">
          <option value="NA">No</option>
          <option value="NTPC">Yes</option>
        </select>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Fee  Amount </label>
      </div>
      <div class="col-75">
        <input type="text" id="Amount" name="Amount" placeholder="Enter Fee Amount Ex. Rs.xxxx/month or Annual" required="Enter Designation">
      </div>
    </div>
    
     
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>


<div class="container">
  <h2 align="center">Fee Structure</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Tuition Fees</th>
        <th>NTPC</th>
        <th>NON-NTPC</th>
        <th>DELETE</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getfeestructure($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['Fee_name']; ?></td>
        <td><?php echo $row['NTPC']; ?></td>
        <td><?php echo $row['Amount']; ?></td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="fees">
      <input type="hidden" name="loc" value="add_fees.php">
    <input type="hidden" name="delete" value="<?php echo $row['id'] ?>">
    <input type="submit" name="submit" value="delete" style="align-self: center;">
  </form></td>
       </tr>
    <?php
    $count=$count+1;
  }
      ?>
    </tbody>
  </table>
</div>
</div>
<?php  require_once('footer.php'); ?>