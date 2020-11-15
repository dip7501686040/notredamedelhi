<?php  include_once('header.php');
$result = mysqli_query($conn,"SELECT * FROM admission_doc where id=1" );
$Admission = mysqli_fetch_array($result); ?>
<link rel="stylesheet" type="text/css" href="css/second.css">
<section class="container">
	<div class="d1">
		<h4>Admission Process For The Academic Session <?php echo $Admission['session']; ?></h4>
	</div>

	<div class="d1 d2">
		<h4 style="color:red;">NOTICE</h4>
		<marquee direction="left" onMouseOver="this.stop()"  onMouseOut="this.start()"><h2><?php echo $Admission['notice11'];  ?></h2></marquee>
	</div>
</section>
<br>
<br>
<br>
<br>

<?php   include_once('footer.php');?>