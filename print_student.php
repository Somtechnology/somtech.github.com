<?php include ('header.php') ?>

<body onload="window.print()"   >
<?php  
$server= 'localhost';
$user= 'root';
$password= '';
$database= 'php';

$mysqli=new mysqli($server,$user,$password,$database) or die(mysqli_error($mysqli));

$id = $_GET['print'];

$result = $mysqli->query("SELECT * FROM students where id = '$id'
	") or die (mysqli_error($mysqli));

$row = $result->fetch_array();


?>
<div class="container">

	<center>
		<h1>library Management</h1>
		<h1>Print Student</h1>
	</center>
	

<h5>student ID: <?php echo $row["id"]; ?></h5>
<h5>Name: <?php echo $row["student_name"]; ?></h5>
<h5>address: <?php echo $row["address"]; ?></h5>
<h5>Contact: <?php echo $row["contact"]; ?></h5>
<h5>Faculty: <?php echo $row["Faculty"]; ?></h5>
<h5>semester: <?php echo $row["semester"]; ?></h5>
</div>


<?php include ('footer.php') ?>