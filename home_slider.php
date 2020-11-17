<?php  require_once('header.php'); ?>

    <div class="container">
    	<?php

       if(isset($_GET['msg'])){
       	if($_GET['msg']=="done"){
       		$name=$_GET['name'];
       		echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.'.
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
    	<form action="slider.php" method="post" enctype="multipart/form-data" style="align-self: center;">
    		<label>choose Image</label><br>
    		<input type="file" name="img"><br>
    		<br>
             <input type="submit" name="submit" value="upload">
    	</form>
    </div>


<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Events</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Image</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= all_homeimage($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td>
            <form action="slider.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="img">
            <img src="uploads/<?php echo $row['img']; ?>" width='100%' height=100% style="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="file" name="file"  style="border:none;display: inline-block;">
            <input type="submit" name="psubmit" value="update" style="display: inline-block;">
            </form>
           
        </td>

        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="homeimage">
      <input type="hidden" name="loc" value="home_slider.php">
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
<?php require_once('footer.php');  ?>