<?php
require_once('header.php');
$result = mysqli_query($conn, "SELECT * FROM winners where id=1");
$winner1 = mysqli_fetch_array($result);
$result2 = mysqli_query($conn, "SELECT * FROM winners where id=2");
$winner2 = mysqli_fetch_array($result2);
?>
<br>
<br><br>
<div class="container">
<div class="card">
    <center>
        <h3 class="card-header" style="background-color: #13355e;color:white;">Shweta Memorial Award</h3>
    </center>
    <div class="card-body">
        <p class="card-text">This is a prestigious award(From 2003) conferred to a
            standard IX student who is an all rounder. A student who is good in academics
            and activities. The main trait to be found in the recipient are virtues like honesty,
            integrity, love and care for one and all. This is awarded to a very
            conscientious student.</p>
        <br>
        <br>

    
        <center><b><?php echo $winner1['name']; ?></b> of <b><?php echo $winner1['class']  ?></b> received the award for the academic year <b> <?php echo $winner1['date'] ?>.</b></center>
        <br><br>
        <center><img src="documents/<?php echo $winner1['img'];  ?>"  class=" img-responsive img-thumbnail" alt="" style="height: 14em;"> </center>
    </div>
</div>
<br><br>
<div class="card">
    <center>
        <h3 class="card-header" style="background-color: #13355e;color:white;">Sebin Memorial Award</h3>
    </center>
    <div class="card-body">
        <p class="card-text">This is a very coveted award conferred to a
            student of class VII who is very grounded, simple,
            respectful, loving, and caring towards one and all.</p>
        <br>
        <br>
        <center><b><?php echo $winner2['name'];  ?></b> of <b><?php echo $winner2['class'] ?></b> received the award for the academic year <b> <?php echo $winner2['date'] ?>.</b></center>
        <br><br>
        <center><img src="documents/<?php echo $winner2['img']  ?>"  class=" img-responsive img-thumbnail" alt="" style="height: 14em;"> </center>
    </div>
</div>

</div>

<br>
<?php
require_once('footer.php');
?>