<?php include('header.php') ?>

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
$id = $_GET['edit'];
$result = $mysqli->query("SELECT * from students where id = '$id' ")or die(mysqli_error($mysqli));
$row = $result->fetch_array();
?>

	<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
		<div class="card-body">
		<br>	
		<h4 class="card-title">Edit form</h4>
		<form method="POST" action="process/process_students.php">
			<input readonly type="hidden" name="id" value="<?php echo $row['id'] ?>">
<label>Name</label>
<input type="text" name="student_name"class="form-control" autocomplete="off" required value="<?php echo $row ['student_name'] ?>">Gender<br>
 <select name="gender" class="form-control"required>
 	<option value=""><?php echo $row ['gender']  ?></option>
 	<option value="Male">Male</option>
 	<option value="Female">Fem
<input type="text" name="Address" required  class="form-control" autocomplete="off"  required value="<?php echo $row ['address'] ?> "> 
<label>Contact</label>
<input type="text" name="Contact" required  class="form-control" autocomplete="off" required value="<?php echo $row ['contact'] ?> ">
<label>Faculty</label>
<input type="text" name="Faculty" required  class="form-control" autocomplete="off" required value="<?php echo $row ['Faculty'] ?> " > 
<label>Semester</label>
<input type="text" name="semester" required  class="form-control" autocomplete="off"  required value="<?php echo $row ['semester'] ?> " >
 </select>
<button style="width:100px;" name="update" type="submit" class="btn-success  rounded-pill">Update</button>

<td> <a style="width: 100px;" class="btn btn-sm btn-success rounded-pill" href="view_student.php">Back</a></td>
</div>
</form>
<br><br>
		</div>
	</div>

<?php include('footer.php')?>

