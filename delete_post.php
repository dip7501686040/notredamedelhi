<?php
include'connect.php';
$id=$_GET['delete'];
$table=$_GET['table'];
$loc=$_GET['loc'];
$delete=mysqli_query($conn,"DELETE FROM $table WHERE id='$id'");

header("location:".$loc);

?>
