<?php
require_once('header.php');
$type = $_GET['type'];
$fol = folders($conn, $type);

?>
<br>


<div class=container>
<br><br>
    <center><h3 style="color: #072b52;" >PHOTO-GALLERY</h3></center>
    <BR></BR>
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($fol)) {
            $title = $row['title'];
            $img = mysqli_fetch_array(top_img($conn, $title, $type));
        ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="uploads/<?php echo $img['file_name'];  ?>" class="card-img-top" alt="..." style="height: 12em;">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="height: 3em"><?php echo $title ?></h5>
                        </center>
                        <a href="gallery_new.php?title=<?php echo $title ?>&type=<?php echo $type ?>" style="text-decoration: none;">
                            <center>
                                <p class="card-text"><b style="color: red;">|| View More ||</b> </p>
                            </center>
                        </a>
                    </div>
                    <div class="card-footer">
                        <center><small class="text-muted">Posted Date : 12/july/2020 </small></center>
                    </div>
                </div>
                      
<br><br>
            </div>
      
        <?php
        }
        ?>

    </div>

</div>

</div>
<br><br>

<br> <br>
<nav aria-label="Page navigation example ">
    <ul class="pagination" style="justify-content: center;">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
<br><br>

<?php
require_once('footer.php');
?>