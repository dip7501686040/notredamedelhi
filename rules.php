<?php
require_once('header.php');
?>

<head>

<style>
	#watermark{
		position: fixed;
	    top: 37%;
		z-index: -1;
		left: 40%;
		opacity: 0.4;

	}
	@media only screen and (max-width: 768px) {
		#watermark{
			position: fixed;
	    top: 37%;
		z-index: -1;
		left: 1%;
		opacity: 0.4;
		width: 98%;
		}
	}
</style>
	<title>Rules and Regulations</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body style="font-weight: 600;">
<img src="images/wm.jpeg" id="watermark" alt="">
	<br><br>
	<center>
		<h3 style="color: #072b52;">RULES AND REGULATIONS</h3>
	</center>
	<div class="container">
		<div class="row">
			<?php
			$result = getrules($conn);

			while ($row = mysqli_fetch_array($result)) {  ?>
				<div class="col-md-12">
					<br>
					<h3><?php echo $row['heading']; ?></h3>

					<?php echo nl2br($row['content']); ?>
				</div>
				<br>
				<br>
			<?php  } ?>

		</div>
	</div>

	<?php
	require_once('footer.php');
	?>