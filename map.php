<div class="calender_yvideo_gmap my-5">
   <div class="calender">
      <div class="card">
         <div class="card-header">
            <button id="btnPrev" type="button">Prev</button>
            <button id="btnNext" type="button">Next</button>
         </div>
         <div class="card-body calender_body">
            <div id="divCal"></div>
         </div>
      </div>
   </div>
   <div class="yvideo">
      <div class="card embed-responsive embed-responsive-16by9">
         <div class="card-body">
            <?php
            $sql = "select name from video order by id desc limit 1";
            $res = $db_handler->runQuery($sql);
            $video = $res->fetch_assoc();
            ?>
            <iframe class="embed-responsive-item" src="<?php echo urldecode($video['name']); ?>" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="gmap">
      <div class="card">
         <div class="card-body">
            <!--Google map-->
            <div id="map-container-google-2" class="z-depth-1-half map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56097.69780285086!2d77.302406!3d28.506455!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedb20aa6b7cd7ce0!2sNotre%20Dame%20School!5e0!3m2!1sen!2sus!4v1602932106411!5m2!1sen!2sus" width="350" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            <!--Google Maps-->
         </div>
      </div>
   </div>
</div>