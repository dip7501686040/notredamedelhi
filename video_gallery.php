<?php
include "connect.php";
include "function.php";
$page = $_GET['page'];
if ($page == 'sv') {
	$result = getseniorVideo($conn);
} else if ($page == 'jv') {
	$result = getJuniorVideo($conn);
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=1">
	<title>junior photos</title>
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<?php require_once('header.php'); ?>
	<style type="text/css">
		@media screen and (max-width: 769px) {

			.gallery-wrap {
				width: 100%;
				padding: 0px;
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}

			.gallery-box {
				flex: 0 0 calc(50% - 50px);
				margin: 5px;
			}

			.gallery-box video {
				max-width: 100%;
				min-width: 100%;
			}

			.pop_img video {
				max-width: 50%;
				min-width: 50%;
			}
		}

	</style>
</head>

<body>


	<div class="container" style="height: 80vh; margin: 7vh 0;">
		<div class="gallery-wrap">
			<?php
			while ($row = mysqli_fetch_array($result)) {
				$imageURL = 'uploads/' . $row["file_name"];
			?>
				<div class="gallery-box">
					<a href="<?php echo 'uploads/' . $row['file_name'] ?>">
						<video width="320" height="240" controls>
							<source src="<?php echo 'uploads/' . $row['file_name'] ?>" type="video/mp4">


						</video>
					</a>

				</div>
			<?php
			}

			?>




		</div>



	</div>
	<script type="text/javascript" src="script/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="script/video_gallery.js"></script>
	<?php require_once('footer.php'); ?>
</body>

</html>