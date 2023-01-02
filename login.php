<?php include ('login_header.php') ?>


<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));


?>

<div class="container">
<br>
<br>
<br>
	<div class="card mx-auto" style="width: 37%; box-shadow:0 0 40px 0 lightgrey; left: 30px">
		<div class="card-body">
		<br>	<br><center>
		<img src="download.jpg" style="width: 35%;">
</center>
 <?php if (isset($_SESSION['empty'])): ?>
	<div class="alert  alert-danger">
		<?php echo  $_SESSION['empty'];
		unset($_SESSION['empty']);
		?>

	</div>
	
<?php endif ?>


 <?php if (isset($_SESSION['incorrect_login'])): ?>
	<div class="alert  alert-danger">
		<?php echo  $_SESSION['incorrect_login'];
		unset($_SESSION['incorrect_login']);
		?>

	</div>
	
<?php endif ?>

		<form method="POST" action="process/process_login.php">
	



<label><i class="fa fa-user"></i> &nbsp;Username</label>
<input type="text" name="username" required  class="form-control" autocomplete="off" required="" > 
<label><i  class="fa fa-key"></i> &nbsp;Password</label>
<input type="password" name="password" autocomplete="off" required  class="form-control"> 
<br>

<button style="" name="login" class="btn btn-success rounded-pill" >
<i class="fa fa-lock"></i> &nbsp;
Login </button>



</div>
</form>
<br><br>
		</div>
	</div>


<?php include('footer.php')?>
</body>
</html>