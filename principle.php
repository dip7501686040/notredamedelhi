<?php
require_once('header.php');
$principal=old_principal($conn);

?>
	<link rel="stylesheet" type="text/css" href="principle.css">

	<div class="container">
		<center><h1 class="heading " style="color: blue"><span>meet </span>Our Former Principals</h1></center>
				<div class="profiles">

		<?php while ($prow = mysqli_fetch_array($principal)) {
               
		 ?>
			<div class="profile">
				<img src="uploads/<?php echo $prow['img'] ?>" class="profile-img">

				<h3 class="pl-name"> SND <?php echo $prow['name'] ?></h3>
				<h5> (<?php echo $prow['start']; ?>)</h5>
			</div>
  <?php }?>
			

			
		</div>
	</div>
	<?php
require_once('footer.php');
?>