<?php
require('header.php');
if(isset($_SESSION['name']))
{	

?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="card admin_dashboard">
    <div class="card-header">
        Admin Dashboard
    </div>
    <div class="card-body">
        <?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
            $name=$_GET['data'];
            echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.'
  </div>';
        }
        else{
            $name=$_GET['data'];
            echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>'.$name.' 
  </div>';
        }
       }

    ?>
        <form method="post" action="add_notice.php" id="notice_upload_form" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="notice_purpose" class="col-form-label">Notice Purpose</label>
                    <input type="text" placeholder="less than 200 charecter" name="notice_purpose" class="form-control" id="notice_purpose" required>
                </div>
                <div class="form-group">
                    <label for="notice_file" class="col-form-label">New Tag<img src="images/notice.gif" alt="" style="height: 3em;"></label>
                <select class="form-control form-control-sm" name="new">
                 <option value="NO">NO</option>
                 <option value="YES">YES</option>
                 </select>
             </div>
                <div class="form-group">
                    <label for="notice_file" class="col-form-label">Notice File</label>
                    <input type="file" class="form-control" id="notice_file" name="notice_file" >
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" id="notice_upload" class="btn btn-primary" name="notice_upload" value="Save">
            </div>
        </form>
    </div>
    <div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Notices</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Noeice</th>
        <th>Date</th>
        <th>File</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getnotice($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['notice']; ?><?php if($row['new']=='YES')
        {echo "<img src='images/notice.gif'  style='height: 3em;'>";}  ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><a href="notice_uploads/<?php echo $row['file']; ?>"><?php echo $row['file']; ?></a></td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="notices">
      <input type="hidden" name="loc" value="upload_notice.php">
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

</div>

<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>