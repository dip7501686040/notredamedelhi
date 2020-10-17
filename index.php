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
            <img src="images/slider1.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
        <div class="carousel-item">
            <img src="images/slider2.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
        </div>
        <div class="carousel-item">
            <img src="images/slider3.jpg" class="d-block w-100" alt="..." style="height: 30rem;">
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
            <div class="card-header bg-transparent border-success">Recent Events</div>
            <div class="card-body scrollbar-ripe-malinka event_body">
                <h4 id="section1"><strong>First title of the news</strong></h4>
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
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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