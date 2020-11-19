<?php
require_once('header.php');
?>

<head>
<title>Aims and objectives</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<br><br>
	<center><h3 style="color: #072b52;" >AIMS AND OBJECTIVES</h3></center>
	<div class="container">
<div class="row">
	<?php 
      $result= getobjectives($conn);
      
      while($row = mysqli_fetch_array($result)){  ?>
<div class="col-md-6">
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
