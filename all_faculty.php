<?php require_once('header.php');
include"function.php";  ?>
<div class="container">
  <h2 align="center"> FACULTY</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
      	<th >S.no</th>
        <th>Name</th>
        <th>Designation</th>
        
      </tr>
    </thead>
    <tbody>
    	<?php 
    	$result= getfaculty($conn);
    	$count=1;
    	while($row = mysqli_fetch_array($result)){  ?>
    	 <tr>
    	 	<td><?php echo $count; ?></td>
    	 	<td><?php echo $row['name']; ?></td>
    	 	<td><?php echo $row['Designation']; ?></td>
    	 </tr>
    <?php
    $count=$count+1;
  }
      ?>
    </tbody>
  </table>
</div>

<?php  require_once('footer.php'); ?>