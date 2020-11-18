<?php require_once('header.php');
$result1 = mysqli_query($conn, "SELECT * FROM eventsindex where id=(SELECT max(id) from eventsindex)");
$result = mysqli_query($conn, "SELECT * FROM eventsindex where id!=(SELECT max(id) from eventsindex) ORDER BY id DESC");
 ?>

<br>
<div class="container">
    
    <div class="row" >
        <?php  while ($row1 = mysqli_fetch_array($result1)) { ?>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                   <?php echo date('d M Y', strtotime($row1['date'])); ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row1['title'] ?></h5>

                    <img src="uploads/<?php echo $row1['img']  ?>" alt="main" class="img-thumbnail" style="height: 15em;float:right;">
                    <p class="card-text"><?php  echo $row1['content'] ?></p>

                </div>
            </div>
        </div>
    <?php  } ?>
      <?php  
 $sql=mysqli_query($conn,"SELECT * FROM eventsindex ORDER BY id DESC" );
?>

    <div class="col-sm-4">
    <ul class="list-group">
  <li class="list-group-item active" style="background-color: #13355e;color:white;"><b>Archives</b></li>
  <?php while($lrow = mysqli_fetch_array($sql)){{
    # code...
  } ?>
  <li class="list-group-item"><a href="show_event.php?n=<?php echo $lrow['id'] ?>" style="color:black;"><?php echo date('d M Y', strtotime($lrow['date']));  ?></a></li>
  <?php
}
?>
</ul>
    </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
         <?php  while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                   <?php echo date('d M Y', strtotime($row['date'])); ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title'] ?></h5>

                    <img src="uploads/<?php echo $row['img']  ?>" alt="main" class="img-thumbnail" style="height: 15em;float:right;">
                    <p class="card-text"><?php  echo $row['content'] ?></p>

                </div>
            </div>
        </div>
        <br>
        <br>
    <?php  } ?>
        
        
    
    </div>
</div>
<br><br>


<br>
<?php require_once('footer.php'); ?>