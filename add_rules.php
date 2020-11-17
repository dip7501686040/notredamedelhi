<?php require_once('header.php'); 

 ?>

<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container" class="con">
	<?php

       if(isset($_GET['msg'])){
       	if($_GET['msg']=="done"){
       		$name=$_GET['name'];
       		echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' Rules are added successfully .
  </div>';
       	}
       	else{
       		echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> Rule is not added .
  </div>';
       	}
       }

	?>
<form action="new_rule.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">

        <label for="fname">Heading </label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Give your Rules" required="Enter Heading">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Content </label>
      </div>
      <div class="col-75">
        <textarea id=des name="des" rows="3"></textarea>
      </div>
    </div>
    
     
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>

<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> RULES AND REGULATIONS</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Heading</th>
        <th>content</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getrules($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td>
          <form action="new_rule.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="heading">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;"  value="<?php echo $row['heading'] ?>">
            <input type="submit" name="tsubmit" value="update" style=" ">
            </form>
        </td>
        <td>
          <form action="new_rule.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="content">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <textarea type="text" name="data"  style="border:none;display:;" rows="4"><?php echo nl2br($row['content']); ?></textarea>
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form>
        </td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="rules">
      <input type="hidden" name="loc" value="add_rules.php">
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