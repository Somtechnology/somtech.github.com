<?php include('header.php') ?>

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
$id = $_GET['edit'];
$result = $mysqli->query("SELECT * from borrows where id = '$id' ")or die(mysqli_error($mysqli));
$row = $result->fetch_array();
?>

	<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
		<div class="card-body">
		<br>	
		<h4 class="card-title">Edit form</h4>
		<form method="POST" action="process/process_borrows.php">
			<input readonly type="hidden" name="id" value="<?php echo $row['id'] ?>">
<label>Name</label>
<input type="text" name="student_name"class="form-control" required value="<?php echo $row ['student_name'] ?>">
<label>Address</label>
<input type="text" name="address" required  class="form-control" autocomplete="off"  required value="<?php echo $row ['address'] ?> "> 
<label>Contact</label>
<input type="text" name="contact" required  class="form-control" autocomplete="off" required value="<?php echo $row ['contact'] ?> ">
<label>Book Name</label>
<input type="text" name="book_name" required  class="form-control" autocomplete="off" required value="<?php echo $row ['book_name'] ?> " > 
<label>Date Off</label>
<input type="text" name="time" required  class="form-control" autocomplete="off" required value="<?php echo $row ['time'] ?> " > 
<label>Faculty</label>
<input type="text" name="faculty" required  class="form-control" autocomplete="off" required value="<?php echo $row ['faculty'] ?> " > 
<label>Date On</label>
<input type="text" name="date" required  class="form-control" autocomplete="off"  required value="<?php echo $row ['date'] ?> "> 
</select>
<button style="width:100px;" name="update" type="submit" class="btn-success  rounded-pill">Update</button>

<td> <a style="width: 100px;" class="btn btn-sm btn-success rounded-pill" href="view_borrows.php">Back</a></td>
</div>
</form>
<br><br>
		</div>
	</div>

<?php include('footer.php')?>

