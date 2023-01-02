<?php include('header.php')?>
<div class="container">
	<center>
		<h1>Books Form</h1>
		<h3>View Books</h3>
	</center>
	<br>

	<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

$result = $mysqli->query("
	SELECT *from books ")
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


	<a style="width:150px;" class="btn btn-success rounded-pill" href="Books.php"><i class="fa fa-user-plus"></i></a>
	<br><br>


	<table id="mytable" class="table table-striped table-bordered">
		<thead>
			<tr class="bg-success text-light">
				<th>ID</th>
				<th>Name</th>
				<th>Edition</th>
				<th>Faculty</th>
				<th>Number Of Pages</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
<tbody>
	
	<?php while($row = $result->fetch_assoc()): ?>
		<tr>
	<td> <?php echo $row ['id']; ?> </td>
	<td> <?php echo $row ['book_name'];?> </td>
    <td> <?php echo $row ['edition']; ?> </td>
    <td> <?php echo $row ['faculty']; ?> </td>
    <td> <?php echo $row ['number']; ?> </td>
 <td> <a href="edit_books.php?edit=<?php echo $row ['id'] ?>" style="width: 100px;" class="btn btn-sm btn-success rounded-pill" href="edit_books.php"><i class="fa fa-edit"></i></a></td>
   <td> <a href="process/process_books.php?delete=<?php echo $row ['id'] ?>" style="width: 100px;" class="Delete btn btn-sm btn-success rounded-pill" href="edit_books.php"><i class="fa fa-trash"></i></a></td>
</tr>

	<?php endwhile; ?>
</tbody>
</tbody>

<tfoot>
	<tr class="bg-secondary">
		<td colspan="7"></td>
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


</script>

<?php include('footer.php')?>