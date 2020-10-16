<?php include "connect.php"?>
<?php   require_once('header.php');?>



	<div>
<div class="gallery-wrap">
	<?php
        $table="post";
    $result = mysqli_query($conn,"SELECT * FROM pics");
if (mysqli_num_rows($result) > 0) {
?>
<?php

while($row = mysqli_fetch_array($result)) {
?>
	<div class="gallery-box">
		<a href=<?php echo'data:image/jpeg;base64,'.base64_encode( $row['img'])   ?>><?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img']).'"/>';
        ?></a>

	</div>
	<?php
}
}
?>
	


	
</div>



</div>


<?php   require_once('footer.php');?>
