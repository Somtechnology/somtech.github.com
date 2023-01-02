<?php include('header.php')?>
<div class="container">
	<center>
		<h1>Borrows Form</h1>
		<h3>View Borrows</h3>
	</center>
	<br>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

$result = $mysqli->query("
	SELECT *from borrows ")
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




	<a style="width:150px;" class="btn btn-success rounded-pill" href="Add_Borrow.php"> <i class="fa fa-user-plus"></i></a>
	<br><br>
	<table id="mytable" class="table table-striped table-bordered">
		<thead>
			<tr class="bg-success text-light">
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Contact</th>
				<th>book_name</th>
				<th>Time</th>
				<th>Faculty</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
<tbody>

	<?php while($row = $result->fetch_assoc()): ?>
		<tr>
	<td> <?php echo $row ['id']; ?> </td>
	<td> <?php echo $row ['student_name']; ?> </td>
    <td> <?php echo $row ['address']; ?> </td>
    <td> <?php echo $row ['contact']; ?> </td>
    <td> <?php echo $row ['book_name']; ?> </td>
    <td> <?php echo $row ['time']; ?> </td>
    <td> <?php echo $row ['faculty']; ?> </td>
    <td> <?php echo $row ['date']; ?> </td>
  <td> <a href="edit_borrows.php?edit=<?php echo $row ['id'] ?>" style="width: 100px;" class="btn btn-sm btn-success rounded-pill" href="edit_books.php"><i class="fa fa-edit"></i></a> <a href="process/process_borrows.php?delete=<?php echo $row ['id'] ?>" style="width: 100px;" class="Delete btn btn-sm btn-success rounded-pill" href="edit_borrows.php"><i class="fa fa-trash"></i></a><a href="print_borrow.php?print=<?php echo $row['id'] ?>" style="width: 100px;" class="print btn btn btn-success rounded-pill" href="print_borrows.php"><i class="fa fa-print"></i></td>
</tr>


	<?php endwhile; ?>
</tbody>
<tfoot>
	<tr class="bg-secondary">
		<td colspan="9"></td>
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


</script>
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