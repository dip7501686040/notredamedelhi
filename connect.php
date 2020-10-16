<?php
$servername="localhost";
$username="root";
$database="test";
$password="";
//Create connection
$conn= mysqli_connect($servername,$username,$password,$database);
//Check connction
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);

}
echo"";
?>