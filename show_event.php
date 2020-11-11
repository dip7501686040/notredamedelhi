<?php  require_once('header.php'); 
require_once('function.php');
$id=$_GET['n'];
 $result = mysqli_query($conn,"SELECT * FROM events where id=$id" );
 while($row = mysqli_fetch_array($result)){
 ?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
 <img src="uploads/<?php echo $row['img']?>" width="100%" >
 <h2 align="center"><?php echo $row['title'];  ?></h2>
 <p align="center"><?php echo $row['content'];  ?></p>	
</div>
<?php } ?>

<div style="margin-top: 400px;">
<?php   require_once('footer.php'); ?>
</div>