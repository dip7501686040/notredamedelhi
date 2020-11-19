<?php
require('header.php');
if(isset($_SESSION['name']))
{	

?>
<div class="container">
    <?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
           
        }
        else{
            echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>'.$_GET['msg'].'  faculty is not added .
  </div>';
        }
       }

    ?>
    <div class="card">
        <div class="card-header">
            Enter the details of  New Principals
        </div>
        <div class="card-body">
            <p class="card-text">
                <form action="add_principal.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="pname">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose Image</label>
                        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Give your Message</label><br>
                        <label for="exampleFormControlTextarea1">First para</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                        <label for="exampleFormControlTextarea1">Second Para(optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message2"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail2"  >Year of Joining</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" name="yoj">
                    </div>

                    <button type="submit" class="btn" name="submit" style="background-color: #212529;color:white;">Save</button>
                </form>
            </p>
        </div>
    </div>

</div>
<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Principals</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Photo</th>
        <th>Name</th>
        <th>D.O.J</th>
        <th>Massege</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= all_principal($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><?php if($count==1){echo"<strong style='color:green;font-size:20px;'>current</strong>";}  ?>
            <form action="update_principal.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="img">
            <img src="uploads/<?php echo $row['img']; ?>" width='100%' style="max-width: 150px;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="file" name="file"  style="border:none;display: inline-block;width: 70%">
            <input type="submit" name="psubmit" value="update" style="display: inline-block;width: 25%">
            </form>
           
        </td>



        <td><form action="update_principal.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="name">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;width: 70%"  value="<?php echo $row['name'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;width: 25%">
            </form></td>




             <td><form action="update_principal.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="start">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;width: 70%"  value="<?php echo $row['start'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;width: 25%">
            </form></td>



            <td><form action="update_principal.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="message">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <textarea  name="data"  style="border:none;display: inline-block;"> <?php echo $row['message'] ?></textarea>
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>
            
            <td><form action="update_principal.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="message2">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <textarea  name="data"  style="border:none;display: inline-block;"> <?php echo $row['message2'] ?></textarea>
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;">
            </form></td>




        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="current_principel">
      <input type="hidden" name="loc" value="new_principals.php">
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