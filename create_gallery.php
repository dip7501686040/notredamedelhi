<?php require_once('header.php');
if(isset($_SESSION['name']))
{	

$result = getallphoto($conn);
$vresult=getallvideo($conn);

 ?>
<link rel="stylesheet" href="css/gallery_new.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">File </label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="Category">Category</label>
      </div>
      <div class="col-75">
        <select id="Cateegory" name="category">
          <option value="defult">Choose category</option>
          <option value="Senior">Senior</option>
          <option value="Junior">Junior</option>
        </select>
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="country">Type</label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
          <option value="Defult">Choose Type</option>
          <option value="Photo">Photo</option>
          <option value="Video">Video</option>
        </select>
      </div>
    </div>
    
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>

<div class="container border  border-dark" style="margin-top: 10px;margin-bottom: 20px; padding-top: 10px;" >

  <div  style="margin-left: 45%;" >
<button class="pbutton btn btn-primary ">Photos</button> <button style="margin-left: 10px" class="vbutton btn btn-success">Videos</button>
</div>
  <div class="photo">
     <div class="container page-top">



<div class="row">

<?php
        
   while($row = mysqli_fetch_array($result)) {
    $imageURL = 'uploads/'.$row["file_name"];
?>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="<?php echo $imageURL  ?>" class="fancybox" rel="ligthbox" style="height:650px ;width:940px;">
             <img  src="<?php echo $imageURL; ?>" class="zoom img-fluid "  alt="<?php echo $row['title'] ?>">
            <center><h4><?php echo $row['title']  ?> </h4></center>
           <form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="files">
      <input type="hidden" name="loc" value="create_gallery.php">
    <input type="hidden" name="delete" value="<?php echo $row['id'] ?>">
    <input type="submit" name="submit" value="Remove" style="align-self: center;">
  </form>
        </a>
    </div>
<?php  } ?>
    
    
    
   
   
</div>




</div>
  </div>

  <div class="video" style="display: none;">
     <div class="container page-top">



<div class="row">

<?php
        
   while($vrow = mysqli_fetch_array($vresult)) {
    $imageURL = 'uploads/'.$vrow["file_name"];
?>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="<?php echo $imageURL  ?>" class="fancybox" rel="ligthbox" style="height:650px ;width:940px;">
             <video width="320" height="240" controls class="zoom img-fluid "  alt="<?php echo $row['title'] ?>">
                            <source src="<?php echo 'uploads/' . $vrow['file_name'] ?>" type="video/mp4">


                        </video>
            <center><h4><?php echo $vrow['title']  ?> </h4></center>
           <form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="files">
      <input type="hidden" name="loc" value="create_gallery.php">
    <input type="hidden" name="delete" value="<?php echo $vrow['id'] ?>">
    <input type="submit" name="submit" value="Remove" style="align-self: center;">
  </form>
        </a>
    </div>
<?php  } ?>
    
    
    
   
   
</div>




</div>
  </div>
</div>
<script type="text/javascript">
   $( ".vbutton" ).click(function() {
    $( ".photo" ).css('display', 'none');
    $( ".video" ).css('display', 'block');
  });
    $( ".pbutton" ).click(function() {
    $( ".photo" ).css('display', 'block');
    $( ".video" ).css('display', 'none');
  });
</script>

<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>