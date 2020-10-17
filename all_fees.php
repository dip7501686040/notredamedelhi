<?php require_once('header.php');
include"function.php";  ?>
<div class="container">
  <h2 align="center">Fee Structure</h2>
             
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
      	<th >S.no</th>
        <th>Tuition Fees</th>
        <th>NTPC</th>
        <th>NON-NTPC</th>
        
      </tr>
    </thead>
    <tbody>
    	<?php 
    	$result= getfeestructure($conn);
    	$count=1;
    	while($row = mysqli_fetch_array($result)){  ?>
    	 <tr>
    	 	<td><?php echo $count; ?></td>
    	 	<td><?php echo $row['Fee_name']; ?></td>
    	 	<td><?php echo $row['NTPC']; ?></td>
        <td><?php echo $row['Amount']; ?></td>
    	 </tr>
    <?php
    $count=$count+1;
  }
      ?>
    </tbody>
  </table>
</div>

<?php  require_once('footer.php'); ?>