<?php require_once('header.php');
$data=$_GET['data'];
?>
<style type="text/css">
	embed{
		width: 800px;
	}
	@media only screen and (max-width: 768px) {
		embed{
			width: 94%;
		}
	}
</style>
<center><embed src="school_information/<?php echo $data; ?>" width="100%" height="800px;" /></center>


<?php require_once('footer.php'); ?>