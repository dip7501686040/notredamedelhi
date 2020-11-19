<?php
require_once('header.php');
?>

<head>
	<title>History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
	<br><br>
	<center><h3 style="color: #072b52;" >HISTORY</h3></center>
	<div class="container">
		<div class="row">
			<div class="card">
				<div class="card-body">
					<?php
					$result = gethistory($conn);

					while ($row = mysqli_fetch_array($result)) {  ?>
						<div class="col-md-12">
							<br>

							<?php echo nl2br($row['content']); ?>
						</div>
					<?php  } ?>
				</div>
			</div>


		</div>
	</div>
<br><br>
	<?php
	require_once('footer.php');
	?>