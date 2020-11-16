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
	<h3 align="center">EXAMINATION AND PROMOTIONS</h3>
	<ol>
		<?php 
      $result= getexam_prom($conn);
      
      while($row = mysqli_fetch_array($result)){  ?>

		<li><?php echo $row['rule']; ?></li>
		
		<?php  } ?>
		
	</ol>
</div>





<?php require_once('footer.php'); ?>
