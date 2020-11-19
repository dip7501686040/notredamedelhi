<?php require_once('header.php');
$result = all_sport_achiev($conn);
$vresult=all_academic_achive($conn);

 ?>
<link rel="stylesheet" href="css/gallery_new.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="container">
  <br>
  <br>

     <center>
  <h2>Add Your Achievement</h2>
       
     </center>
     <br>
  <form action="achiev.php" method="post" enctype="multipart/form-data">
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
        <label for="Category">Type Of Achievement</label>
      </div>
      <div class="col-75">
        <select id="Cateegory" name="type">
          <option value="defult">Choose Type</option>
          <option value="Academic">Academic</option>
          <option value="Sports">Sports</option>
        </select>
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
        <label for="Category">Discription</label>
      </div>
      <div class="col-75">
        <textarea name="dis" rows="4"></textarea>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="Category">Date</label>
      </div>
      <div class="col-75">
        <input type="date" name="date">
      </div>
    </div>
    <div class="row" style="padding-left: 50%;">
      <input type="submit" value="Upload" name="submit">
    </div>
  </form>
</div>

<div class="container border  border-dark" style="margin-top: 10px;margin-bottom: 20px; padding-top: 10px;" >

  <div  style="margin-left: 45%;" >
<button class="abutton btn btn-primary ">Academic</button> <button style="margin-left: 10px" class="sbutton btn btn-success">Sports</button>
</div>
  <div class="Academic">
     <div class="container page-top">



<div class="row">

<?php
        
   while($row = mysqli_fetch_array($vresult)) {
    $imageURL = 'achiev/'.$row["img"];
?>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="<?php echo $imageURL  ?>" class="fancybox" rel="ligthbox" style="height:650px ;width:940px;">
             <img  src="<?php echo $imageURL; ?>" class="zoom img-fluid "  alt="<?php echo $row['title'] ?>">
            <center><h4><?php echo $row['title']  ?> </h4></center>
           <form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="achievement">
      <input type="hidden" name="loc" value="add_achievement.php">
    <input type="hidden" name="delete" value="<?php echo $row['id'] ?>">
    <input type="submit" name="submit" value="Remove" style="align-self: center;">
  </form>
        </a>
    </div>
<?php  } ?>
    
    
    
   
   
</div>




</div>
  </div>

  <div class="Sports" style="display: none;">
    <center><h2 > Sports</h2></center>
     <div class="container page-top">

      


<div class="row">
<?php
        
   while($vrow = mysqli_fetch_array($result)) {
    $imageURL = 'achiev/'.$vrow["img"];
?>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="<?php echo $imageURL  ?>" class="fancybox" rel="ligthbox" style="height:650px ;width:940px;">
              <img  src="<?php echo $imageURL; ?>" class="zoom img-fluid "  alt="<?php echo $vrow['title'] ?>">
            <center><h4><?php echo $vrow['title']  ?> </h4></center>
</a>
           <form action="delete_post.php" method="GET" enctype="multipart/form-data" >
      <input type="hidden" name="table" value="achievement">
      <input type="hidden" name="loc" value="add_achievement.php">
    <input type="hidden" name="delete" value="<?php echo $vrow['id'] ?>">
    <input type="submit" name="submit" value="Remove" style="align-self: center;">
  </form>
        
    </div>
<?php  } ?>
    
    
    
   
   
</div>




</div>
  </div>
</div>
<script type="text/javascript">
   $( ".sbutton" ).click(function() {
    $( ".Academic" ).css('display', 'none');
    $( ".Sports" ).css('display', 'block');
  });
    $( ".abutton" ).click(function() {
    $( ".Academic" ).css('display', 'block');
    $( ".Sports" ).css('display', 'none');
  });
</script>
<?php require_once('footer.php'); ?>
