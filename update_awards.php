<?php
require_once('header.php');
if(isset($_SESSION['name']))
{
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
      <form action="change_award.php" method="post" enctype="multipart/form-data">
    
        <center><b><input type="text" name="name" value="<?php echo  $winner1['name'];  ?>"></b> of <b><input type="text" name="class" value="<?php echo  $winner1['class'];  ?>"></b> received the award for the academic year <b> <input type="text" name="year" value="<?php echo  $winner1['date'];  ?>">.</b><input type="submit" class="btn btn-success" name="tsubmit" value="Change"></center>
        <input type="hidden" name="id" value="1">
        
    </form>
        <br><br>
        <center><img src="documents/<?php echo $winner1['img']; ?>"  class=" img-responsive img-thumbnail" alt="" style="height: 14em;"> </center>
      <center>  <form action="change_award.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="col" value="img">
                        <input type="hidden" name="id" value="1">
                        <input type="file" name="file">
                        <input type="submit" name="submit" value="Upload">
                    </form>
                </center>
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
        <form action="change_award.php" method="post" enctype="multipart/form-data">
    
        <center><b><input type="text" name="name" value="<?php echo  $winner2['name'];  ?>"></b> of <b><input type="text" name="class" value="<?php echo  $winner2['class'];  ?>"></b> received the award for the academic year <b> <input type="text" name="year" value="<?php echo  $winner2['date'];  ?>">.</b><input type="submit" class="btn btn-success" name="tsubmit" value="Change" align="center"></center>
        <input type="hidden" name="id" value="2">
        
    </form>
        <br><br>
        <center><img src="documents/<?php echo $winner2['img']; ?>"  class=" img-responsive img-thumbnail" alt="" style="height: 14em;"> </center>
      <center>  <form action="change_award.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="col" value="img">
                        <input type="hidden" name="id" value="2">
                        <input type="file" name="file">
                        <input type="submit" name="submit" value="Upload">
                    </form>
                </center>
    </div>
</div>

</div>

<br>
<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>