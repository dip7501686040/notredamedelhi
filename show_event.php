<?php  require_once('header.php'); 
require_once('function.php');
$id=$_GET['n'];
 $result = mysqli_query($conn,"SELECT * FROM eventsindex where id=$id" );
 while($row = mysqli_fetch_array($result)){
 ?>

<div class="container">
 <img src="uploads/<?php echo $row['img']?>" width="100%" >
 <h2 align="center"><?php echo $row['title'];  ?></h2>
 <p align="center"><?php echo $row['content'];  ?></p>	
</div>
<?php } ?>

<div>
<?php   require_once('footer.php'); ?>
</div>