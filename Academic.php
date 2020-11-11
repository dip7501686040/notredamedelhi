<?php require_once('header.php');
      require_once('function.php');
      $result = mysqli_query($conn,"SELECT * FROM Academic_link where id=1" );
$Academic = mysqli_fetch_array($result);
  ?>
<style type="text/css">
	input{
		width: 500px;
	}
</style>
<div class="container">
	<?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
          $name=$_GET['name'];
          echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' .
  </div>';
        }
        else{
          echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong>links are not updated
  </div>';
        }
       }

  ?>
	<form action="Update_academic.php" method="post">
		<table>
			<tr>
				<th>curriculum</th>
				<td><input type="text" name="cur" value="<?php echo $Academic['curriculum']  ?>"></td>
			</tr>
			<tr>
				<th>Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam</th>
				<td><input type="text" name="sam10" value="<?php echo $Academic['Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam']  ?>"></td>
			</tr>
			<tr>
				<th>E-Pathshala</th>
				<td><input type="text" name="epath" value="<?php echo $Academic['E-Pathshala']  ?>"></td>
			</tr>
			<tr>
				<th>Diksha</th>
				<td><input type="text" name="dik" value="<?php echo $Academic['Diksha']  ?>"></td>
			</tr>
			<tr>
				<th>CBSE_Sample_paper</th>
				<td><input type="text" name="cbse" value="<?php echo $Academic['CBSE_Sample_paper']  ?>"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Update"  >
	</form>
</div>


<?php require_once('footer.php');  ?>