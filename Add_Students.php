<?php include('header.php') ?>
	<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
		<div class="card-body">
		<br>	
		<h4 class="card-title">Edit form</h4>
		<form method="POST" action="process/process_students.php">
<label>Name</label>
<input type="text" name="student_name" required  class="form-control" autocomplete="off"  required>Gender<br>
 <select name="gender" class="form-control" required>
 	<option value="">Select</option>
 	<option value="Male">Male</option>
 	<option value="Female">Female</option>
 </select>
<label>Address</label>
<input type="text" name="Address" required  class="form-control" autocomplete="off" required > 
<label>Contact</label>
<input type="text" name="Contact" required  class="form-control" autocomplete="off" required > 
<label>Faculty</label>
<input type="text" name="Faculty" required  class="form-control" autocomplete="off" required > 
<label>Semester</label>
<input type="text" name="Semester" required  class="form-control" autocomplete="off" required > 
</select>
<button style="width:100px;" name="save" type="submit" class=" btn btn-success  rounded-pill">Save</button>

<td> <a style="width: 100px;" class="btn  btn-success rounded-pill" href="view_student.php">Back</a></td>
</div>
</form>
<br><br>
		</div>
	</div>

<?php include('footer.php')?>

