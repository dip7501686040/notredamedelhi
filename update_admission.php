<?php
require_once('header.php');
$result = mysqli_query($conn, "SELECT * FROM admission_doc where id=1");
$Admission = mysqli_fetch_array($result);
?>

<link rel="stylesheet" type="text/css" href="css/second.css">
<link rel="stylesheet" type="text/css" href="css/switch.css">


<!--------------navbar ---------------->



<section class="container">

	<?php

	if (isset($_GET['msg'])) {
		if ($_GET['msg'] == "done") {
			$name = $_GET['name'];
			echo '<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.' . $name . ' .
  </div>';
		} else {
			echo '<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>links are not updated
  </div>';
		}
	}

	?>

	<div class="d1">
		<h4>
			<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="col" value="session">
				Admission Process For The Academic Session <input type="text" name="data" style="border:none;color: red;" value="<?php echo $Admission['session'] ?>">
				<input type="submit" name="tsubmit" value="update">
			</form>
		</h4>
	</div>

	<div >
		
		<form action="change_add_doc.php" method="post" enctype="multipart/form-data"  class="d1 d2">
		<h4>NOTICE</h4>
			<input type="hidden" name="col" value="notice" >
			<textarea type="text" name="data" style="width: 100%;border:none;font-size: 20px;text-align: center;"><?php echo $Admission['notice'] ?></textarea>
			<input type="submit" name="tsubmit" value="update">
		</form>
	</div>
<br><br><br><br>
	<div>
		<table border="1px" cellspacing="0px" cellpadding="15px" width="100%">
			<tr>
				<th class="cen1">1</th>
				<th>Admission form</th>
				<th class="cen1">
                    <?php if(status($conn,"1")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Admission_form'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="Admission_form">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="1" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"1")=='Yes'){
               echo'<input id="switch1" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch1" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch1"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>

			<tr>
				<th class="cen1">2</th>
				<th>Admission Schedule</th>
				
				<th class="cen1">
                    <?php if(status($conn,"2")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Admission_Schedule'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="Admission_Schedule">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="2" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"2")=='Yes'){
               echo'<input id="switch2" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch2" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch2"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>

			<tr>
				<th class="cen1">3</th>
				<th>Admission Criteria</th>
				
				<th class="cen1">
                    <?php if(status($conn,"3")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Admission_Criteria'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="Admission_Criteria">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="3" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"3")=='Yes'){
               echo'<input id="switch3" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch3" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch3"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>

			<tr>
				<th class="cen1">4</th>
				<th>General Instruction(Details)</th>
				<th class="cen1">
                    <?php if(status($conn,"4")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['General_Instruction'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="General_Instruction">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="4" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"4")=='Yes'){
               echo'<input id="switch4" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch4" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch2"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>

			<tr>
				<th class="cen1">5</th>
				<th>List of All Registered Application With Points</th>
				
				<th class="cen1">
                    <?php if(status($conn,"5")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Registered_Application'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="Registered_Application">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="5" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"5")=='Yes'){
               echo'<input id="switch5" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch5" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch5"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>

			<tr>
				<th class="cen1">6</th>
				<th>First List of Selected Candidates</th>
				
				<th class="cen1">
                    <?php if(status($conn,"6")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Selected_Candidates1'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="Selected_Candidates1">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="6" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"6")=='Yes'){
               echo'<input id="switch6" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch6" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch6"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>

			<tr>
				<th class="cen1">7</th>
				<th>2nd List of Selected Candidates(if any)</th>
				
				<th class="cen1">
                    <?php if(status($conn,"7")=='Yes'){ ?>
					<a href="view.php?data=<?php echo $Admission['Selected_Candidates'] ?>">click</a>
                     <?php } else{ ?>
                            click
                        <?php  } ?>
				</th>
				<th class="cen1">
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="col" value="Selected_Candidates">
						<input type="file" name="file">
						<input type="submit" name="submit" value="update">
					</form>
				</th>
				<th>
					<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
<span class="switch" style="font-size: 5px;">
	<span class="switch-border1">
		<span class="switch-border2">
            <input type="hidden" value="7" name="doc">
			<input type="hidden" name="switch" value="0">
			<?php 
               if(status($conn,"7")=='Yes'){
               echo'<input id="switch7" type="checkbox" name="switch" value="1" checked />';
               }
               else{
               echo'<input id="switch7" type="checkbox" name="switch" value="1" />';

               }
			 ?>
			
			<label for="switch7"></label>
			<span class="switch-top"></span>
			<span class="switch-shadow"></span>
			<span class="switch-handle"></span>
			<span class="switch-handle-left"></span>
			<span class="switch-handle-right"></span>
			<span class="switch-handle-top"></span>
			<span class="switch-handle-bottom"></span>
			<span class="switch-handle-base"></span>
			<span class="switch-led switch-led-green">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
			<span class="switch-led switch-led-red">
				<span class="switch-led-border">
					<span class="switch-led-light">
						<span class="switch-led-glow"></span>
					</span>
				</span>
			</span>
		</span>
	</span>
</span>
<input type="submit" name="ssubmit" value="update">
</form>
</th>
			</tr>
		</table>
	</div>

	<br><br>
	<div class="d1 d2">
		<h4>NOTICE for pre-primary to VIII</h4>
		<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="col" value="notice8">
			<marquee direction="left" onMouseOver="this.stop()" onMouseOut="this.start()"><input type="text" name="data" style="width: 100%;border:none;font-size: 30px;" value="<?php echo $Admission['notice8'] ?>"></marquee>
			<input type="submit" name="tsubmit" value="update">
		</form>
	</div>
	<div class="d1 d2">
		<h4>NOTICE for class XI</h4>
		<form action="change_add_doc.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="col" value="notice11">
			<marquee direction="left" onMouseOver="this.stop()" onMouseOut="this.start()"><input type="text" name="data" style="width: 100%;border:none;font-size: 30px;" value="<?php echo $Admission['notice11'] ?>"></marquee>
			<input type="submit" name="tsubmit" value="update">
		</form>
	</div>
</section>
<br>
<br>
<br>
<br>


<!--------------footer--------------->

<?php
require_once('footer.php');
?>