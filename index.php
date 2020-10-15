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
<div class="event_message_notice debug">
    <div class="event debug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, ipsum, vitae exercitationem modi illo ratione, illum quis nobis aspernatur nisi fugit nam praesentium reprehenderit eius consequuntur. Magnam cumque accusantium atque.</div>
    <div class="message debug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eum voluptatibus deleniti, corrupti totam ab saepe eius at qui id quibusdam odio dicta. Itaque iusto vel ex maiores, ipsam nam.</div>
    <div class="notice debug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eum voluptatibus deleniti, corrupti totam ab saepe eius at qui id quibusdam odio dicta. Itaque iusto vel ex maiores, ipsam nam.</div>
</div>

<!--........//index content........-->

<?php
require_once('footer.php');
?>