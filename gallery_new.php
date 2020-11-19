<?php
require_once('header.php');
$type=$_GET['type'];
$title=$_GET['title'];

    $result=images($conn,$type,$title);
?>
<link rel="stylesheet" href="css/gallery_new.css">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- Page Content -->
    <div class="container page-top">


<nav aria-label="breadcrumb"  >
  <ol class="breadcrumb" style="background-color:  #072b52; color: white;" >
    <li class="breadcrumb-item active mx-auto" aria-current="page" style="color: white;font-size: 20px;"><?php echo $title; ?></li>
  </ol>
</nav>
<br><br><br>
<div class="row">

<?php
        
   while($row = mysqli_fetch_array($result)) {
    $imageURL = 'uploads/'.$row["file_name"];
?>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="<?php echo $imageURL  ?>" class="fancybox" rel="ligthbox" style="height:650px ;width:940px;">
            <img  src="<?php echo $imageURL; ?>" class="zoom img-fluid "  alt="<?php echo $row['title'] ?>">
            
           
        </a>
    </div>
<?php  } ?>
    
    
    
   
   
</div>




</div>

        </div>
<script src="script/gallery_new.js"></script>
<?php
require_once('footer.php');
?>