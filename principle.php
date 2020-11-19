<?php
require_once('header.php');
$principal = old_principal($conn);

?>
<link rel="stylesheet" type="text/css" href="principle.css">

<div class="container">
	<br><br>
	<center>
		<h3 style="color: #072b52;">OUR FORMER PRINCIPALS</h3>
	</center>
	<div class="profiles">

		<div class="row">



			<?php while ($prow = mysqli_fetch_array($principal)) {

			?>
				<div class="col-md-4">
				<div class="profile">
					<img src="uploads/<?php echo $prow['img'] ?>" class="profile-img">

					<center><h3 class="pl-name"> SND <?php echo $prow['name'] ?></h3></center>
					<center><h5> (<?php echo $prow['start']; ?>)</h5></center>
				</div>

				</div>
			<?php } ?>
		</div>



	</div>
</div>
<?php
require_once('footer.php');
?>