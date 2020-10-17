<?php
require_once('header.php');
?>
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
<!--........//slider........-->
<!--........index content........-->
<div class="event_message_notice">
    <div class="event">
        <div class="card border-success">
            <div class="card-header bg-transparent border-success">Upcoming Events</div>
            <div class="card-body scrollbar-ripe-malinka event_body">
                <h4 id="section1"><strong>Teacher's day</strong></h4>
                <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
                    qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                    mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
                    qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                    Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.
                </p>
                <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out
                    qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                    mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim
                    qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                    Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.
                </p>
            </div>
            <div class="card-footer bg-transparent border-success">
                <a href=""><button class="btn bg-success text-light" style="margin-bottom:0.50rem; ">View all Events</button></a>
            </div>
        </div>
    </div>
    <div class="message">
        <div class="card">
            <div class="card-body scrollbar-ripe-malinka">
                <h3 class="card-title"><b>Principal’s Message</b></h3>
                <p class="card-text">Notre Dame School, Badarpur, Delhi, since its inception and foundation has always set 
                    up high benchmarks of value based holistic education for its students. The school has been imparting knowledge and skills 
                    that have cont ributed towards the growth and vision in building global citizens and a conscientious humanity.<br>
                    I am proud to be a part of this Education system and I am hopeful that I will carry forward the Notre Dame legacy
                     in the years to come with innovation, in keeping with its creative ways.<br>
                    <b> “The highest education is that which does not merely give us information but makes our
                      life in harmony with all existence”</b> <br>(Rabindranath Tagore)<br>
                     <b>“Creativity leads to thinking, thinking leads to Knowledge, Knowledge make you great” </b><br>(Dr. APJ Abdul Kalam)<br>
                     Let this year, be an year of many blessings to all of us in the Notre Dame Family and to all who are associated with us.
                     <br><br>
                     <b>Sr. Mary Alice, SND</b>
                </p>

            </div>
        </div>
    </div>
    <div class="notice">
        <div class="card border-danger ">
            <div class="card-header bg-transparent border-danger">Recent Notices</div>
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
            <div class="card-footer bg-transparent border-danger">
                <a href=""><button class="btn text-light bg-danger" style="margin-bottom:0.50rem; ">More News</button></a>
            </div>
        </div>
    </div>
</div>

<!--........//index content........-->
<?php
require_once('map.php');
?>
<?php
require_once('footer.php');
?>