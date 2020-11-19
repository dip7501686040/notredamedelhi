<?php  require_once('header.php'); 
$fol=folders($conn);
   while($row = mysqli_fetch_array($fol)) {
   	$title=$row['title'];
   	$img=mysqli_fetch_array(top_img($conn,$title));
?>

<img src="uploads/<?php echo $img['file_name'];  ?>" height="200px" width="200px"> 
      <h4><?php echo $row['title']  ?></h4>




<?php } require_once('footer.php'); ?>