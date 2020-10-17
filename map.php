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
               <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!--Google Maps-->
         </div>
      </div>
   </div>
</div>