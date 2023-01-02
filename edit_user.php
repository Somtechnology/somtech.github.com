<?php include('header.php') ?>

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
$id = $_GET['edit'];
$result = $mysqli->query("SELECT * from user where id = '$id' ")or die(mysqli_error($mysqli));
$row = $result->fetch_array();
?>

	<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
		<div class="card-body">
		<br>	
		<h4 class="card-title">Edit form</h4>
		<form method="POST" action="process/process_user.php">
			<input readonly type="hidden" name="id" value="<?php echo $row['id'] ?>">
<label>User Name</label>
<input type="text" name="username"class="form-control" autocomplete="off" required value="<?php echo $row ['username'] ?>">Role<br>
 <select name="role" class="form-control"required>
 	<option value=""><?php echo $row ['role']  ?></option>
 	<option value="admin">Admin</option>
 	<option value="user">User</option>
 </select> 
<label>Password</label>
<input type="text" name="password" required  class="form-control" autocomplete="off" required value="<?php echo $row ['password'] ?> " > 
<button style="width:100px;" name="update" type="submit" class="btn-success  rounded-pill">Update</button>

<td> <a style="width: 100px;" class="btn btn-sm btn-success rounded-pill" href="view_user.php">Back</a></td>
</div>
</form>
<br><br>
		</div>
	</div>

<?php include('footer.php')?>

