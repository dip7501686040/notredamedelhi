<?php require_once('header.php'); 

 ?>

<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
	<?php

       if(isset($_GET['msg'])){
       	if($_GET['msg']=="done"){
       		$name=$_GET['title'];
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
<form action="home_link.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Title </label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="title" placeholder="Enter Title to Display" required="Enter title">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Link </label>
      </div>
      <div class="col-75">
        <input type="text" id="des" name="link" placeholder="Enter link" required="Enter Link">
      </div>
    </div>
    
     
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>

<div class="container" style="margin-bottom: 100px;">
  <h2 align="center">Home Links</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Title</th>
        <th>Link</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= gethomelink($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><a href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a></td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="home_links">
      <input type="hidden" name="loc" value="add_home_link.php">
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

<?php  require_once('footer.php'); ?>