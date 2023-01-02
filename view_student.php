<?php include('header.php')?>
<?php
 if($_SESSION['role']!='admin'){
 	header('location:index.php');
 }
 ?>



<div class="container">
	<center>
		<h1>Student Form</h1>
		<h3>View Student</h3>
	</center>
	<br>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

$result = $mysqli->query("
	SELECT *from students ")
or die(mysqli_error($mysqli));

?>



<?php if (isset($_SESSION['update_msg'])): ?>
	<div class="alert alert-info">
		<?php 
		echo $_SESSION['update_msg'];
		unset($_SESSION['update_msg']);
		 ?>
	</div>
<?php endif ?>

<?php if (isset($_SESSION['save_msg'])): ?>
	<div class="alert alert-success">
		<?php 
		echo $_SESSION['save_msg'];
		unset($_SESSION['save_msg']);
		 ?>
		</div>
		 <?php endif ?>
<?php if (isset($_SESSION['delete_msg'])): ?>
	<div class="alert alert-danger">
		<?php 
		echo $_SESSION['delete_msg'];
		unset($_SESSION['delete_msg']);
		 ?>
		</div>
		 <?php endif ?>


	<a style="width:150px;" class="btn btn-success rounded-pill" href="Add_Students.php"><i class="fa fa-user-plus"></i></a>
	<br><br>
	<table id="mytable" class="table table-striped table-bordered">
		<thead>
			<tr class="bg-success text-light">
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Faculty</th>
				<th>Semeter</th>
				<th>Status</th>
			</tr>
		</thead>
<tbody>

	<?php while($row = $result->fetch_assoc()): ?>
		<tr>
	<td> <?php echo $row ['id']; ?> </td>
	<td> <?php echo $row ['student_name']; ?> </td>
    <td> <?php echo $row ['gender']; ?> </td>
    <td> <?php echo $row ['address']; ?> </td>
    <td> <?php echo $row ['contact']; ?> </td>
    <td> <?php echo $row ['Faculty']; ?> </td>
    <td> <?php echo $row ['semester']; ?> </td>
   <td> <a href="edit_students.php?edit=<?php echo $row ['id'] ?>" style="width: 100px;" class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit"></i></a> <a href="process/process_students.php?delete=<?php echo $row ['id'] ?>" style="width: 100px;" class="Delete btn btn btn-success rounded-pill" href="print_student.php"><i class="fa fa-trash"></i></a> <a href="print_student.php?print=<?php echo $row['id'] ?>" style="width: 100px;" class="print btn btn btn-success rounded-pill" href="print_student.php"><i class="fa fa-print"></i>
</td>
</tr>


	<?php endwhile; ?>
</tbody>
<tfoot>
	<tr class="bg-secondary">
		<td colspan="8"></td>
	</tr>

</tfoot>
	</table>
</div>

<script>
	$('.Delete').click(function(event) {
        event.preventDefault();
        var r=confirm("Ma Hubta Inaad Xogtan Delete-Gareeynayso?");
        if (r==true)
        	window.location = $(this).attr('href');


	});

<script type="text/javascript">
	$(document).ready(function() {
    $('#mytable').DataTable( {
    	//"order": [0,asc],
       order: [0, 'desc'],
        dom: 'Bfrtip',
        buttons: [
            'pageLength','copy', 'csv', 'excel', 'pdf', 'print' , 'colvis'
        ] 
    } );
} );
</script>
<?php include('footer.php')?>