<?php include('header.php')?>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
$id = $_GET['edit'];
$result = $mysqli->query("SELECT * from books where id = '$id' ")or die(mysqli_error($mysqli));
$row = $result->fetch_array();
?>

<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
		<div class="card-body">
		<br>	
		<h4 class="card-title">Edit form</h4>
		<form method="POST" action="process/process_books.php">
			<input readonly type="hidden" name="id" value="<?php echo $row['id'] ?>">
<label>Name</label>
<input type="text" name="book_name"class="form-control" autocomplete="off" required value="<?php echo $row ['book_name'] ?>"><br>
<label>Edition</label>
<input type="text" name="edition" required  class="form-control" autocomplete="off"  required value="<?php echo $row ['edition'] ?> "> 
<label>Faculty</label>
<input type="text" name="faculty" required  class="form-control" autocomplete="off" required value="<?php echo $row ['faculty'] ?> ">
<label>Number Of Pages</label>
<input type="text" name="number" required  class="form-control" autocomplete="off" required value="<?php echo $row ['number'] ?> " >  
</select>
<button style="width:100px;" name="update" type="submit" class="btn-success  rounded-pill">Update</button>

<td> <a style="width: 100px;" class="btn btn-sm btn-success rounded-pill" href="view_students.php">Back</a></td>
</div>
</form>
<br><br>
		</div>
	</div>

<?php include('footer.php')?>