<?php
require_once('header.php');
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Jquery Fullcalandar Integration with PHP and Mysql</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
     
     }
    },
   
   });
  });
   
  </script>
 </head>
 <body>
  <br />
  <h2 align="center"><a href="#">Dairy Dates</a></h2>
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>

<br><br>
  <!-- Footer -->
<footer style="background-color: #13355e;">
     <div class="container py-5">
     <div class="row">
    <div class="col-md-6"><h3 style="color:white;">
    Notre Dame School
    </h3>
    <h6 style="color:white;">
    BTPS, Staff Colony, Badarpur, Delhi 110044, India
    </h6>
  
  </div>
    <div class="col-md-2">
     <a href="" style="color:white;">About us </a> <br>
<a href="" style="color:white;"> Academics </a> <br>
<a href="" style="color:white;">Events </a>  <br>
<a href="" style="color:white;"> Achievements </a> <br>
<a href="" style="color:white;">Admission </a> <br>
<a href="" style="color:white;">Gallery </a> <br>
<br></div>
    <div class="col-md-4">
      <img src="images/icon1.png" alt="" style="float: right;">
      <img src="images/icon2.png" alt="" style="float: right;">
      <img src="images/icon3.png" alt="" style="float: right;">
    </div>
  </div>
     </div>
     <hr class="p-0 m-0 b-0">
     <div class="bg-light py-2">
         <div class="container text-center">
             <p class="text-muted mb-0 py-2">Copyright ©2020 . All rights reserved.</p>
         </div>
     </div>
 </footer>
<!-- Footer -->
</body>
</html>
