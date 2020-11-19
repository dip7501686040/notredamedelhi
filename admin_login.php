<?php
require_once('header.php');
include("connect.php");



$msg='';$msg2='';$fname='';
if(isset($_POST['submit']))
{
	$fname=$_POST['name'];
	$password=$_POST['pass'];

	if(empty($fname))
	{
		$msg='<div class="error">PLEASE ENTER YOUR NAME!!</div>';
	}
	else if(empty($password))
	{
		$msg2='<div class="error">PLEASE ENTER YOUR PASSWORD!!</div>';
	}
	else 
	{
		$pass=mysqli_query($conn,"SELECT password FROM admin WHERE name='$fname'");
		$pass_w=mysqli_fetch_array($pass);
		$dpass=$pass_w['password'];
		if ($password!==$dpass)
		{
			$msg2='<div class="error">PASSWORD IS WRONG!!</div>';
		}
		else
		{
			$_SESSION['name']=$fname;			
			echo "<script>window.location.href='admin.php'</script>";
		}
	}
	
}
?>
<title>ADMIN LOGIN</title>
<style type="text/css">
	.error
	{
		color: red;
	}
</style>
</head>
<body id="body-bg">
	
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="images/sister1.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/logo.png" alt="logo" class="logo" style="height: 5em;">
              </div>
			 <center><p class="login-card-description" style="color: #13355e;"> <b style="font-size: 23px;font-weight:600;">ADMIN LOGIN</b></p>
              </center>
			  <form method="post">
			       <div class="form-group">
						<label>USER NAME :</label>
						<input type="text" name="name" class="form-control" value="<?php echo $fname ; ?>" placeholder="User Name" >
						<?php echo $msg; ?>
					</div>
					<div class="form-group">
						<label>PASSWORD :</label>
						<input type="password" name="pass" class="form-control" placeholder="Password">
						<?php echo $msg2; ?>
					</div>					
					<div class="form-group">
						<center><input type="submit" name="submit" value="LOGIN" class="btn btn-success"></center>
					</div>
                </form>
                
            </div>
          </div>
        </div>
      </div>
      
    </div>
</main>
</body>
</html>

<br>
<?php
require_once('footer.php');
?>
