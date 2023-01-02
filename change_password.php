<?php include ('header.php') ?>


<div class="container">
	
<center>
	<h1>library Management</h1>
	<h3>Change Password</h3>
</center>
<br>
<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;" >
	<div class="card-body">
		<h3 class="card-header">Change Password</h3>
		<br>

 <?php if (isset($_SESSION['incorrect'])): ?>
	<div class="alert  alert-danger">
		<?php echo  $_SESSION['incorrect'];
		unset($_SESSION['incorrect']);
		?>

	</div>
	
<?php endif ?>
 <?php if (isset($_SESSION['changed'])): ?>
	<div class="alert  alert-success">
		<?php echo  $_SESSION['changed'];
		unset($_SESSION['changed']);
		?>

	</div>
	
<?php endif ?>
		<form method="POST" action="process/process_change_password.php" onsubmit="return validate()">

		<label><i  class="fa fa-key"></i> Old Password</label>
		<input type="password" name="old_pass" id="old_pass" class="form-control" required>
		<br>
		<label><i  class="fa fa-key"></i>New Password</label>
		<input type="password" name="new_pass" id="new_pass" class="form-control" required>
		<br>
		<label><i  class="fa fa-key"></i>Confirm</label>
		<input type="password" name="confirm" id="confirm" class="form-control" required><br>
		
		<button style="width: 100px;" name="change_pass" class="btn btn-success rounded-pill"><i  class="fa fa-edit"></i>Change</button>
		<a style="width:  100px;" class="btn btn-success rounded-pill" onclick="history.back()" href="#"><i  class="fa fa-Back"></i>Back</a>
</form>
	</div>
	

</div>
<script>
	function validate(){

		var new_pass = $('#new_pass').var();
		var confirm_pass = $('#confirm').var();

		if (new_pass!=confirm_pass){
			alert('Password did not match!');
			return false;
		}else{
			if(confirm('are you sure you want to change your password')==true){
				return true;
			}else{
				return false;
			}
		}
		
	}

</script>

</div>

