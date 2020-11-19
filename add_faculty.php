<?php
require('header.php');
if(isset($_SESSION['name']))
{	

?>

<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container" class="con">
	<?php

       if(isset($_GET['msg'])){
       	if($_GET['msg']=="done"){
       		$name=$_GET['name'];
       		echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' added successfully as a faculty.
  </div>';
       	}
       	else{
       		echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> faculty is not added .
  </div>';
       	}
       }

	?>
  <div><button class="fbtn btn btn-primary">Faculty</button>
       <button class="cbtn btn btn-success">Co-ordinator</button>
        </div>
  <div class="faculty">
<form action="faculty.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name </label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Enter facultiy Name" required="Enter Name">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Designation </label>
      </div>
      <div class="col-75">
        <input type="text" id="des" name="des" placeholder="Enter Designation of facultiy" required="Enter Designation">
      </div>
    </div>
    
     
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>


<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> FACULTY</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getfaculty($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><form action="faculty.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="name">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;width: 70%"  value="<?php echo $row['name'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;width: 25%">
            </form></td>
        <td><form action="faculty.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="Designation">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;width: 70%"  value="<?php echo $row['Designation'] ?>">
            <input type="submit" name="tsubmit" value="update" style="display: inline-block;width: 25%">
            </form></td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="faculty">
      <input type="hidden" name="loc" value="add_faculty.php">
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


<div class="coordinator" style="display: none;">
  <form action="faculty.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="subject" placeholder="Enter Subject Name" required="Enter Name">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="fname">Co-Ordinator Name </label>
      </div>
      <div class="col-75">
        <input type="text" id="des" name="con" placeholder="Enter Co-Ordinator Name " required="Enter Designation">
      </div>
    </div>
    
     
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="csubmit">
    </div>
  </form>


<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Co-Ordinator</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Subject</th>
        <th>Co-Ordinator</th>
        <th>Remove</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getcoordinator($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><form action="faculty.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="subject">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;width: 70%"  value="<?php echo $row['subject'] ?>">
            <input type="submit" name="ctsubmit" value="update" style="display: inline-block;width: 25%">
            </form></td>
        <td><form action="faculty.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="col" value="co_ordinator">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="data"  style="border:none;display: inline-block;width: 70%"  value="<?php echo $row['co_ordinator'] ?>">
            <input type="submit" name="ctsubmit" value="update" style="display: inline-block;width: 25%">
            </form></td>
        <td><form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="sub_co">
      <input type="hidden" name="loc" value="add_faculty.php">
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

</div>


<script type="text/javascript">
   $( ".fbtn" ).click(function() {
    $( ".faculty" ).css('display', 'block');
    $( ".coordinator" ).css('display', 'none');
  });
    $( ".cbtn" ).click(function() {
    $( ".faculty" ).css('display', 'none');
    $( ".coordinator" ).css('display', 'block');
  });
</script>

<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>