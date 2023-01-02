<?php include('header.php') ?>

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

$result = $mysqli->query("
	SELECT id, student_name from students " )
or die(mysqli_error($mysqli));
?>
	<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
		<div class="card-body">
		<br>	
		<h4 class="card-title">Borrows form</h4>
		<form method="POST" action="process/process_borrows.php">
<label>Student</label>
<select name="student_id"  class="form-control"required=""><br>
<option value="">Select</option>
<?php while($row = $result->fetch_assoc()):  ?>
 <option  value="<?php echo $row ['id'] ?>" > <?php echo $row['id'].'-'.$row['student_name'] ?></option>
<?php endwhile; ?>
</select>
<br>
<label>Address</label>
<input type="text" name="address" required  class="form-control" autocomplete="off" required > 
<label>Contact</label>
<input type="text" name="contact" required  class="form-control" autocomplete="off"  required > 
<label>Book</label>
<input type="text" name="book_name" required  class="form-control" autocomplete="off" required > 
<label>Date of</label>
<input type="text" name="time" required  class="form-control" autocomplete="off" required > 
<label>Faculty</label>
<input type="text" name="faculty" required  class="form-control" autocomplete="off" required > 
<label>Date On</label>
<input type="text" name="date" required  class="form-control" autocomplete="off" required > 
</select>
<button style="width:100px;"  class="btn btn-success  rounded-pill" name="save" type="submit">Save</button>
 <td> <a style="width: 100px;" class="btn  btn-success rounded-pill" href="view_borrows.php">Back</a></td>
</div>
</form>
<br><br>
		</div>
	</div>

<?php include('footer.php')?>

