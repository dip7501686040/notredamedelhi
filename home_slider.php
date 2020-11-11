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

<?php require_once('footer.php');  ?>