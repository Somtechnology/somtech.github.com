<?php 
session_start();
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
if (isset ($_POST['save']) ) {
	$student_name = $_POST['student_name'];
	$gender = $_POST['gender'];
	$Address = $_POST['Address'];
	$Contact = $_POST['Contact'];
	$Faculty = $_POST['Faculty'];
	$Semester =$_POST['Semester'];

//save query
	$mysqli->query("
		INSERT INTO students
		(student_name, gender , Address , Contact , Faculty , Semester)
		VALUES 
		('$student_name' , '$gender' , '$Address' , '$Contact' , '$Faculty', '$Semester')

		")
	or die (mysqli_error($mysqli));
	$_SESSION['save_msg'] = "Saved Successfully";
	header("location: ../view_student.php");
	
}


if (isset ($_POST['update']) ) {
	$id = $_POST['id'];
	$student_name = $_POST['student_name'];
	$gender = $_POST['gender'];
	$Address = $_POST['Address'];
	$Contact = $_POST['Contact'];
	$Faculty = $_POST['Faculty'];
	$Semester =$_POST['Semester'];

//update query
	$mysqli->query("
		UPDATE students
		SET 
		student_name = '$student_name',
		gender = '$gender',
		Address = '$Address',
		Contact = '$Contact',
		Faculty = '$Faculty',
		Semester = 'Semester'
      WHERE 
      id = '$id'
		")
	or die (mysqli_error($mysqli));
	  $_SESSION['update_msg'] = 'Updated Successfully';
	header("location: ../view_student.php");
}

if ($_GET['delete']){

$id =$_GET ['delete'];
$mysqli->query("
DELETE FROM  students
WHERE 
id ='$id'
	")
 or die(mysqli_error($mysqli));
 $_SESSION['delete_msg'] ='Deleted Successfully';

header("location: ../view_student.php");
}
 ?>