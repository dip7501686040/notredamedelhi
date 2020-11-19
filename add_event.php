<?php
require('header.php');
if(isset($_SESSION['name']))
{	

?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
  <?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
          $name=$_GET['name'];
          echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' .
  </div>';
        }
        else{
          echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>'.$name.' .
  </div>';
        }
       }

  ?>
  <form action="new_event.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Event Img</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="Category">Title</label>
      </div>
      <div class="col-75">
        <input type="text" name="title">
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="country">Date</label>
      </div>
      <div class="col-75">
        <input type="Date" name="date">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Discription</label>
      </div>
      <div class="col-75">
        <textarea name="dis" rows="10" >
        </textarea>
      </div>
    </div>
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>


<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Events</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Image</th>
        <th>Title</th>
        <th>D.O.P</th>
        <th>Discription</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= all_event($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td>
            <form action="new_event.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="img">
            <img src="uploads/<?php echo $row['img']; ?>" width='100%' style="max-width: 150px;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="file" name="file"  style="border:none;display: inline-block;">
            <input type="submit" name="psubmit" value="update" style="display: inline-block;">
            </form>
           
        </td>



        <td><form action="new_event.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="title">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;"  value="<?php echo $row['title'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>




             <td><form action="new_event.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="date">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;"  value="<?php echo $row['date'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>



            <td><form action="new_event.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="content">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <textarea  name="data"  style="border:none;display: inline-block;"> <?php echo $row['content'] ?></textarea>
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>
            
        




        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="eventsindex">
      <input type="hidden" name="loc" value="add_event.php">
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
<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>