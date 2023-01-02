<?php include('header.php')?>

<?php
 if($_SESSION['role']!='admin'){
 	header('location:index.php');
 }
 ?>


<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';
 


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

$result = $mysqli->query("SELECT * from user order by id desc")or die(mysqli_error($mysqli));
?>



<div class="container">
	<center>
		<h1>User Management</h1>
		<h3>View User</h3>
	</center>
	<br>
	<a style="width:150px;" class="btn btn-success rounded-pill" href="Add_user.php"><i class="fa fa-user-plus"></i></a>

<?php if (isset($_SESSION['update_msg'])): ?>
	<div class="alert  alert-info">
		<?php echo  $_SESSION['update_msg'];
		unset($_SESSION['update_msg']);
		?>

	</div>
	
<?php endif ?>

 
 
	<br><br>

	<table id="mytable" class="table table-striped table-bordered">
		<thead>
			<tr class="bg-success text-light">
				<th>ID</th>
				<th>Username</th>
				<th>Role</th>
				<th>Status</th>
			</tr>
		</thead>
<tbody>
	<?php while( $row = $result->fetch_assoc()):?>
		<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['username']?></td>
		<td><?php echo $row['role']?></td>
 <td> <a href="edit_user.php?edit=<?php echo $row ['id'] ?>" style="width: 100px;" class="btn btn-sm btn-success rounded-pill"><i class="fa fa-edit"></i></a> <a href="process/process_user.php?delete=<?php echo $row ['id'] ?>" style="width: 100px;" class="Delete btn btn btn-success rounded-pill" href="print_student.php"><i class="fa fa-trash"></i></a>
<script >
	 $('.delete').click(function(event) {
    event.preventDefault();
    var r=confirm("Are you sure you want to delete?");
    if (r==true)   {  
       window.location = $(this).attr('href');
    }

});
</script>


	<?php endwhile;?>
</td>
</tbody>
<tfoot>
	<tr class="bg-success">
		<td colspan="4"></td>
	</tr>

</tfoot>
</tr>
	</table>
</div>
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