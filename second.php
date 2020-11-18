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
		<h3 style="color:red;">NOTICE</h3>
		<h4><?php echo nl2br( $Admission['notice']) ; ?></h4>
	</div>

	<div>
		<table border="1px" cellspacing="0px" cellpadding="15px" width="100%">
			<tr>
				<th class="cen1">1</th>
				<th>Admission form</th>
				<th class="cen1">
                    <?php if(status($conn,"1")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Admission_form'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				
			</tr>

			<tr>
				<th class="cen1">2</th>
				<th>Admission Schedule</th>
				<th class="cen1">
                    <?php if(status($conn,"2")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Admission_Schedule'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
			</tr>

			<tr>
				<th class="cen1">3</th>
				<th>Admission Criteria</th>
				<th class="cen1">
                    <?php if(status($conn,"3")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Admission_Criteria'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
			</tr>

			<tr>
				<th class="cen1">4</th>
				<th>General Instruction(Details)</th>
				<th class="cen1">
                    <?php if(status($conn,"4")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['General_Instruction'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
			</tr>

			<tr>
				<th class="cen1">5</th>
				<th>List of All Registered Application With Points</th>
				<th class="cen1">
                    <?php if(status($conn,"5")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Registered_Application'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
			</tr>

			<tr>
				<th class="cen1">6</th>
				<th>First List of Selected Candidates</th>
				<th class="cen1">
                    <?php if(status($conn,"6")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Selected_Candidates1'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
			</tr>

			<tr>
				<th class="cen1">7</th>
				<th>2nd List of Selected Candidates(if any)</th>
				<th class="cen1">
                    <?php if(status($conn,"7")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Selected_Candidates'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
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