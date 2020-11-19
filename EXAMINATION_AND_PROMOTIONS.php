<?php require_once('header.php'); ?>
<style type="text/css">
	ol li{
		font-size: 22px;
	}
	h3{
		color: #3333ff;
	}
</style>
<div class="container">
<br><br>
	<center>
		<h3 style="color: #072b52;">EXAMINATION AND PROMOTION</h3>
	</center>
	<ol>
		<?php 
      $result= getexam_prom($conn);
      
      while($row = mysqli_fetch_array($result)){  ?>

		<li><?php echo $row['rule']; ?></li>
		
		<?php  } ?>
		
	</ol>
</div>





<?php require_once('footer.php'); ?>
