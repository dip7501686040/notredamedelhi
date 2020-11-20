<?php
require_once('header.php');
$page = $_GET['page'];
if ($page == 'sv') {
    $result = getseniorVideo($conn);
} else if ($page == 'jv') {
    $result = getJuniorVideo($conn);
}
?>
<link rel="stylesheet" href="css/gallery_new.css">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- Page Content -->
    <div class="container page-top">


    <br>
    <center><h3 style="color: #072b52;" >VIDEO-GALLERY</h3></center>
    <BR></BR>
<div class="row">

<?php
        
   while($row = mysqli_fetch_array($result)) {
    $imageURL = 'uploads/'.$row["file_name"];
?>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="<?php echo $imageURL  ?>" class="fancybox" rel="ligthbox" style="height:650px ;width:940px;">
            <video width="320" height="240" controls class="zoom img-fluid "  alt="<?php echo $row['title'] ?>">
                            <source src="<?php echo 'uploads/' . $row['file_name'] ?>" type="video/mp4">


                        </video>
            <center><h4><?php echo $row['title']  ?> </h4></center>
           
        </a>
    </div>
<?php  } ?>
    
    
    
   
   
</div>




</div>

<script src="script/gallery_new.js"></script>
<?php
require_once('footer.php');
?>