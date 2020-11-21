<?php
require_once('header.php');
$img = homeimage($conn);
$principal = principal($conn);
$prow = mysqli_fetch_array($principal);
$eve = event_date($conn);

?>
<style type="text/css">
    #more {display: none;}
</style>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<link rel="stylesheet" href="css/calendar.css">
<!--........slider........-->
<div id="carouselExampleIndicators" class="carousel slide imge" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slider_photo5.jpg" class="d-block w-100 imge" alt="...">
        </div>
        <?php while ($irow = mysqli_fetch_array($img)) {  ?>
            <div class="carousel-item">
                <img src="uploads/<?php echo $irow['img']  ?>" class="d-block w-100 imge" alt="..">
            </div>
        <?php
        }
        ?>





    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php
$result = homelink($conn);
$row = mysqli_fetch_array($result);
?>
<marquee onMouseOver="this.stop()" onMouseOut="this.start()">
     <?php if(!isset($row['link'])){
        echo "<p  style='color: red;font-size: 25px;font-style: bold;text-decoration: none;'><b>". $row['title']." </b></p>";
     }  else{?>
    <a href="<?php echo $row['link']  ?>" target="_new" style="color: red;font-size: 25px;font-style: bold;cursor: pointer;text-decoration: none;"><b> <?php echo $row['title']  ?> </b></a>
    <?php  }?>
</marquee>
<!--........//slider........-->
<!--........index content........-->
<div class="event_message_notice">
    <div class="event  ">
        <div class="card border-success " style="border-radius: calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px);">
            <div class="card-header border-success" style="background-color: green;color:white;border-radius: calc(2.25rem - 10px) calc(2.25rem - 10px) calc(0rem - 0px) calc(0rem - 0px);" >
                <center>
                    <h3>Diary Dates</h3>
                </center>
            </div>
            <div class="wrapper scrollbar-ripe-malinka_a notice_a_body ">
                <?php while ($erow = mysqli_fetch_array($eve)) {  ?>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <?php $string = $erow['start_event'];
                                    $timestamp = strtotime($string);
                                    $month_num = date("m", $timestamp);
                                    $month_name = date("F", mktime(0, 0, 0, $month_num, 10));
                                    ?>
                                    <h3><?php echo date("d", $timestamp); ?></h3>
                                    <b> <?php echo $month_name; ?></b>
                                </div>
                                <div class="col">
                                    <h5><?php echo $erow['title'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
                <br>


            </div>
            <div class="card-footer border-success" style="background-color: green;border-radius:0 0 calc(2.25rem - 10px) calc(2.25rem - 10px) ;">
<center>
<button class="btn btn-light " style="margin-bottom:0.50rem;" onclick="window.location.href='calendaruser.php';">View all Events</button>

</center>            </div>
        </div>
    </div>
    <div class="message">
        <div class="card">
            <div class="card-body scrollbar-ripe-malinka">
                <h3 class="card-title"><b><span class="border border-secondary" style="padding: 0.10em;box-shadow: 10px 10px 5px grey;">Principal’s Message</span></b>
                </h3>
                <img src="uploads/<?php echo $prow['img']; ?>" alt="main" class="img-thumbnail" style="height: 15em;float:right;">

                <br>
                <p class="card-text" style="font-size: 18px;"><?php echo nl2br($prow['message']) . "<br>" . nl2br($prow['message2']);  ?>

                   <span id="dots">...</span><span id="more"><br><br> <b style="font-family: 'Satisfy', cursive;"> “The highest education is that which does not merely give us information but makes our
                        life in harmony with all existence”</b><br><b style="float: right;">-(Rabindranath Tagore)</b><br>
                    <br> <b style="font-family: 'Satisfy', cursive;">“Creativity leads to thinking, thinking leads to Knowledge, Knowledge make you great” </b><br>
                    <b style="float: right;">-(Dr. APJ Abdul Kalam)</b><br>
                    <br> Let this year, be an year of many blessings to all of us in the Notre Dame Family and to all who are associated with us.
                    <br><br></span><button onclick="myFunction()" id="myBtn1" style="float: right;border: none;background-color:#13355e;color:white;" class="btn">Read more</button><br>
                    <b style="font-family: 'Satisfy', cursive;"><?php echo $prow['name'];  ?>, SND</b>  
                </p>

            </div>
        </div>
    </div>
    <div class="notice" style="padding: 0rem;">
        <div class="card border-danger" style="border-radius: calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px);">
            <div class="card-header border-danger" style="background-color: #dc3545;color:white;border-radius: calc(2.25rem - 10px) calc(2.25rem - 10px) calc(0rem - 0px) calc(0rem - 0px);">
                <div class="row">
                    <div class="col">
                        <center>
                            <h3>Notice Board</h3>
                        </center>
                    </div>


                </div>
            </div>
            <div class="card-body scrollbar-ripe-malinka notice_body">

                <marquee direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
                    <?php
                    $query = "select * from notices ORDER BY id DESC LIMIT 5";
                    $result = $db_handler->runQuery($query);

                    while ($notice = $result->fetch_assoc()) {

                    ?>

                        <h6><?php  echo date('d M Y', strtotime($notice['date']));  ?></h6>

                        <?php if(!empty($notice['file'])){ ?>

                        <a href="notice_uploads/<?php echo $notice['file']; ?>" target="_new">
                            <p class="notice_body_text" style="color:#dc3545;display: inline-block;">
                                <?php echo strtoupper($notice['notice']); ?>&nbsp;  <p style="color: blue;display: inline-block;">click</p>   <?php if($notice['new']=='YES'){echo '<img src="images/notice.gif" alt="" style="height: 3em;float:right;">';} ?>
                                <hr style="border-top: 1px dotted red;">
                            </p>
                            
                        </a>
                    <?php } 
                         else{
                        ?>
                        <p class="notice_body_text" style="color:#dc3545;">
                                <?php echo strtoupper($notice['notice']); ?><?php if($notice['new']=='YES'){echo '<img src="images/notice.gif" alt="" style="height: 3em;float:right;">';} ?>
                            </p>
                    <?php
                }
                    }

                    ?>
                </marquee>
            </div>
            <div class="card-footer  border-danger" style="background-color: #dc3545;color:white;border-radius:0 0 calc(2.25rem - 10px) calc(2.25rem - 10px) ;">
<center>
<button class="btn btn-light" style="margin-bottom:0.50rem;"onclick="window.location.href='all_notices.php';">More News</button>

</center>            </div>
        </div>
    </div>
</div>

 <?php 
if(isset($_GET['status'])){
 if($_GET['status']=='done'){
    echo '<script>
    $(document).ready(function(){
        $("#myModal").modal("show");
    });
</script>';
                } else {
                    echo '<script>
    $(document).ready(function(){
        alert("TC is Not available");
    });
</script>';
 }}
   ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Issued TC </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Verify your TC here</h4>
       <embed src="TCs/<?php echo $_GET['tc'];?>" width="100%"  />
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--........//index content........-->
<?php
require_once('event_slider.php');
?>
<br>
<?php
require_once('footer.php');
?>