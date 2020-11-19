<?php include "connect.php";

function getseniorPhotos($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM files where category='Senior' AND type='Photo'");
	if (mysqli_num_rows($result) > 0) {

		return $result;
	} else {
		return "no data";
	}
}

function getjuniorPhotos($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM files where category='Junior' AND type='Photo'");
	if (mysqli_num_rows($result) > 0) {

		return $result;
	} else {
		return "no data";
	}
}

function getjuniorVideo($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM files where category='Junior' AND type='Video'");
	if (mysqli_num_rows($result) > 0) {

		return $result;
	} else {
		return "no data";
	}
}

function getseniorVideo($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM files where category='Senior' AND type='Video'");
	if (mysqli_num_rows($result) > 0) {

		return $result;
	} else {
		return "no data";
	}
}
function getfaculty($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM faculty");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function getfeestructure($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM fees");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function gethomelink($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM home_links");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function homelink($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM home_links WHERE id=(SELECT max(id) FROM home_links);");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function homeimage($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM homeimage ORDER BY id DESC LIMIT 4");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function all_homeimage($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM homeimage ORDER BY id DESC LIMIT 4");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function admission_doc($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM admission_doc where id =1");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function principal($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM current_principle WHERE id=(SELECT max(id) FROM current_principle);");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function old_principal($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM current_principle where id !=(SELECT max(id) from current_principle) order by id asc;");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function all_principal($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM current_principle  order by id desc;");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
} 
function join_date($conn, $id)
{
	$result = mysqli_query($conn, "SELECT start from current_principle  WHERE  id != (SELECT Max(id) from current_principle);");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return 1;
	}
}

function event_date($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM events order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function all_event($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM eventsindex order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function school_info($conn)
{
	$result = mysqli_query($conn, "SELECT * from school_info  WHERE  id = (SELECT Max(id) from school_info);");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return 1;
	}
}


function getobjectives($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM objectives");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function getrules($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM rules");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function gethistory($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM history");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function getexam_prom($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM exam_prom");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function getnotice($conn)
{
	$result = mysqli_query($conn, "SELECT * FROM notices order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function getallphoto($conn){
	$result = mysqli_query($conn, "SELECT * FROM files where type='photo' or type='Photo' order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function getallvideo($conn){
	$result = mysqli_query($conn, "SELECT * FROM files where type='Video' or type='video' order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}
function status($conn,$id){
	$result = mysqli_query($conn, "SELECT status FROM active where id=".$id);
	$status = mysqli_fetch_array($result);

	if (mysqli_num_rows($result) > 0) {
		return $status['status'];
	} else {
		return "no Data";
	}
}
function all_sport_achiev($conn){
	$result = mysqli_query($conn, "SELECT * FROM achievement where type='Sport' or type='sport' order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function all_academic_achive($conn){
	$result = mysqli_query($conn, "SELECT * FROM achievement where type='Academic' or type='academic' order by id desc");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}


function folders($conn,$type){
	$result = mysqli_query($conn, "SELECT title FROM files where category='$type' and type='Photo' group by title having count(title)>0 ");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function top_img($conn,$title,$type){
	$result = mysqli_query($conn, "SELECT file_name FROM files where title='$title' And category='$type' And type='Photo'  LIMIT 1");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}

function images($conn,$type,$title){
	$result = mysqli_query($conn, "SELECT * FROM files where title='$title' And category='$type' And type='Photo'");
	if (mysqli_num_rows($result) > 0) {
		return $result;
	} else {
		return "no Data";
	}
}


?>
