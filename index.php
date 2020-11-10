<?php
require_once('header.php');
require_once('function.php');
?>

<link rel="stylesheet" href="css/calendar.css">
<!--........slider........-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slider_photo3.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
        <div class="carousel-item">
            <img src="images/slider_photo2.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
        <div class="carousel-item">
            <img src="images/slider_photo1.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
        <div class="carousel-item">
            <img src="images/slider_photo4.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
        <div class="carousel-item">
            <img src="images/slider_photo5.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
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
$result=homelink($conn);
$row = mysqli_fetch_array($result);
?>
<marquee   onMouseOver="this.stop()" onMouseOut="this.start()"><a href="<?php echo $row['link']  ?>" target="_new" style="color: red;font-size: 25px;font-style: bold;cursor: pointer;text-decoration: none;"><b> <?php echo $row['title']  ?> </b></a></marquee>
<!--........//slider........-->
<!--........index content........-->
<div class="event_message_notice">
    <div class="event">
        <div class="card border-success " style="border-radius: calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px);">
            <div class="card-header border-success" style="background-color: green;color:white;">Diary Dates</div>
            <div class="wrapper">

    
</div>
            <div class="card-footer border-success" style="background-color: green;border-radius:0 0 calc(2.25rem - 10px) calc(2.25rem - 10px) ;">
                <a href=""><button class="btn btn-light " style="margin-bottom:0.50rem;">View all Events</button></a>
            </div>
        </div>
    </div>
    <div class="message">
        <div class="card">
            <div class="card-body scrollbar-ripe-malinka">
             <h3 class="card-title"><b><span class="border border-secondary" style="padding: 0.10em;box-shadow: 10px 10px 5px grey;">Principal’s Message</span></b>
            
            </h3>
            <br>
            <img src="images/main.jpeg" alt="main" class="img-thumbnail" style="height: 15em;float:left;">
                <br> <p class="card-text" style="font-size: 18px;">Notre Dame School, Badarpur, Delhi, since its inception and foundation has always set 
                    up high benchmarks of value based holistic education for its students. The school has been imparting knowledge and skills 
                    that have cont ributed towards the growth and vision in building global citizens and a conscientious humanity.<br>
                    
                    I am proud to be a part of this Education system and I am hopeful that I will carry forward the Notre Dame legacy
                     in the years to come with innovation, in keeping with its creative ways.<br>
                   <br> <b style="font-family: 'Satisfy', cursive;"> “The highest education is that which does not merely give us information but makes our
                      life in harmony with all existence”</b><br><b style="float: right;">-(Rabindranath Tagore)</b><br>
                    <br> <b style="font-family: 'Satisfy', cursive;">“Creativity leads to thinking, thinking leads to Knowledge, Knowledge make you great” </b><br>
                    <b style="float: right;">-(Dr. APJ Abdul Kalam)</b><br>
                     <br> Let this year, be an year of many blessings to all of us in the Notre Dame Family and to all who are associated with us.
                     <br><br>
                     <b style="font-family: 'Satisfy', cursive;">Sr. Mary Alice, SND</b>
                </p>

            </div>
        </div>
    </div>
    <div class="notice">
        <div class="card border-danger" style="border-radius: calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px) calc(2.25rem - 10px);">
            <div class="card-header border-danger" style="background-color: #dc3545;color:white;" >Notice Board  </div>
            <div class="card-body scrollbar-ripe-malinka notice_body">
                <?php
                $query = "select * from notices";
                $result = $db_handler->runQuery($query);
                while ($notice = $result->fetch_assoc()) {

                ?>
                    <h6><?php echo $notice['date']; ?></h6>
                    <a href="notice_uploads/<?php echo $notice['file']; ?>" download="notice-<?php echo $notice['date']; ?>">
                        <p class="notice_body_text">
                            <?php echo $notice['notice']; ?>
                        </p>
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="card-footer  border-danger" style="background-color: #dc3545;color:white;border-radius:0 0 calc(2.25rem - 10px) calc(2.25rem - 10px) ;" >
                <a href=""><button class="btn btn-light" style="margin-bottom:0.50rem; ">More News</button></a>
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