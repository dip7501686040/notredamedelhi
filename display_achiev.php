<?php  require_once('header.php'); 
require_once('function.php');
$id=$_GET['n'];
$type=$_GET['type'];
 $result = mysqli_query($conn,"SELECT * FROM achievement where id=$id" );
 while($row = mysqli_fetch_array($result)){
 ?>
<br>
<div class="container">
<div class="row">
    <div class="col-sm-8">
    <div class="card">
  <div class="card-header">
                        <?php echo date('d M Y', strtotime($row['date'])); ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo ucwords($row['title']);  ?></h5>
    
    <img src="achiev/<?php echo $row['img']?>" alt="main" class="img-thumbnail" style="height: 15em;float:right;">
    <p class="card-text"><?php echo ucwords($row['content']);?></p>
    
  </div>
</div>
    </div>
<?php  
 $sql=mysqli_query($conn,"SELECT * FROM achievement where type='$type' ORDER BY id DESC" );
?>

    <div class="col-sm-4">
    <ul class="list-group">
  <li class="list-group-item active" style="background-color: #13355e;color:white;"><b>Archives</b></li>
  <?php while($lrow = mysqli_fetch_array($sql)){{
  	# code...
  } ?>
 <li class="list-group-item"><a href="display_achiev.php?n=<?php echo $lrow['id'] ?>&type=<?php echo $type; ?>" style="color:black;"><?php echo $lrow['title'];  ?></a></li>
  <?php
}
?>
</ul>
    </div>
  </div>
</div>



<?php } ?>

<div>
  <br><br>
<?php   require_once('footer.php'); ?>
</div>