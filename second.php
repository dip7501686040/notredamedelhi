<?php
require_once('header.php');
$result = mysqli_query($conn,"SELECT * FROM admission_doc where id=1" );
$Admission = mysqli_fetch_array($result);
?>

  <link rel="stylesheet" type="text/css" href="css/second.css">


<!--------------navbar ---------------->



<section class="container">
	<div class="d1">
		<h4>Admission Process For The Academic Session <?php echo $Admission['session']; ?></h4>
	</div>

	<div class="d1 d2">
		<h4 style="color:red;">NOTICE</h4>
		<marquee direction="left" onMouseOver="this.stop()"  onMouseOut="this.start()"><h2><?php echo $Admission['notice'];  ?></h2></marquee>
	</div>

	<div>
		<table border="1px" cellspacing="0px" cellpadding="15px" width="100%">
			<tr>
				<th class="cen1">1</th>
				<th>Admission form</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['Admission_form'] ?>" >click</a></th>
				
			</tr>

			<tr>
				<th class="cen1">2</th>
				<th>Admission Schedule</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['Admission_Schedule'] ?>" >click</a></th>
			</tr>

			<tr>
				<th class="cen1">3</th>
				<th>Admission Criteria</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['Admission_Criteria'] ?>" >click</a></th>
			</tr>

			<tr>
				<th class="cen1">4</th>
				<th>General Instruction(Details)</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['General_Instruction'] ?>" >click</a></th>
			</tr>

			<tr>
				<th class="cen1">5</th>
				<th>List of All Registered Application With Points</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['Registered_Application'] ?>" >click</a></th>
			</tr>

			<tr>
				<th class="cen1">6</th>
				<th>First List of Selected Candidates</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['Selected_Candidates1'] ?>" >click</a></th>
			</tr>

			<tr>
				<th class="cen1">7</th>
				<th>2nd List of Selected Candidates(if any)</th>
				<th class="cen1"><a href="view.php?data=<?php echo $Admission['Selected_Candidates'] ?>" >click</a></th>
			</tr>
		</table>
	</div>
</section>
<br>
<br>
<br>
<br>

<!--------------footer--------------->

<?php
require_once('footer.php');
?>