<?php require_once('header.php'); ?>
<div class="container" style="margin-bottom: 100px;">
  <h2 align="center"> Notices</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th >S.no</th>
        <th>Noeice</th>
        <th>Date</th>
        <th>File</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $result= getnotice($conn);
      $count=1;
      while($row = mysqli_fetch_array($result)){  ?>
       <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['notice']; ?><?php if($row['new']=='YES')
        {echo "<img src='images/notice.gif'  style='height: 3em;'>";}  ?></td>
        <td><?php    echo date('d M Y', strtotime($row['date'])); ?></td>
        <td><a href="notice_uploads/<?php echo $row['file']; ?>"><?php echo $row['file']; ?></a></td>
        
       </tr>
    <?php
    $count=$count+1;
  }
      ?>
    </tbody>
  </table>
</div>

</div>
<?php require_once('footer.php'); ?>