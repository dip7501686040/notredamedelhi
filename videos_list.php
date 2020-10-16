<?php
require('header.php');
?>

<?php
$sql = "select * from video";
$res = $db_handler->runQuery($sql);

echo "<h1>MY VIDEOS</h1>";

while ($row= $res->fetch_assoc()){
    $id =$row['id'];
    $name = urldecode($row['name']);

    echo "<h3><a herf ='map.php?id=$id'".$name."</a></h3>";
}

?>
