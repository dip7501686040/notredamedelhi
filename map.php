<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div class="calendar-wrapper">
            <button id="btnPrev" type="button">Prev</button>
            <button id="btnNext" type="button">Next</button>
            <div id="divCal"></div>
         </div>
      </div>
      <div class="col-5" style="margin-top: 7rem;">
         <div class="embed-responsive embed-responsive-16by9">
         <?php
               $sql= "SELECT name FROM video ";
               $row = mysqli_fetch_assoc($res);
               $res = $db_handler->runQuery($sql);            
               $name = urldecode($row['name']);
               

           ?>
            <iframe class="embed-responsive-item" src="<?php echo $name;?>" allowfullscreen></iframe>
        </div>
      </div>
         
      <div class="col" style="margin-top: 10rem;">
         <!--Google map-->
         <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 10rem;">
            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
         <!--Google Maps-->
      </div>
   </div>
</div>