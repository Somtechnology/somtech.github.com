<?php 
session_start();
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
if (isset ($_POST['save']) ) {
	$student_name = $_POST['student_name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$book_name = $_POST['book_name'];
	$time = $_POST['time'];
	$faculty = $_POST['faculty'];
	$date =$_POST['date'];

//save query
	$mysqli->query("
		INSERT INTO borrows
		(student_name, address , contact , book_name, time, faculty , date)
		VALUES 
		('$student_name'  , '$address' , '$contact' , '$book_name','$time','$faculty', '$date')

		")
	or die (mysqli_error($mysqli));
     $_SESSION['save_msg'] = "Saved Successfully";

	header("location: ../view_borrows.php");
	
}

if (isset ($_POST['update']) ) {
	$id = $_POST['id'];
	$student_name = $_POST['student_name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$book_name = $_POST['book_name'];
	$time = $_POST['time'];
	$faculty = $_POST['faculty'];
	$date =$_POST['date'];

//update query
	$mysqli->query("
		UPDATE borrows
		SET 
		student_name = '$student_name',
		address = '$address',
		contact = '$contact',
		book_name = '$book_name',
		time = '$time',
		faculty = '$faculty',
		date = '$date'
      WHERE 
      id = '$id'
		")
	or die (mysqli_error($mysqli));
    $_SESSION['update_msg'] = 'Updated Successfully';
	header("location: ../view_borrows.php");
}
if ($_GET['delete']){

$id =$_GET ['delete'];
$mysqli->query("
DELETE FROM  borrows
WHERE 
id ='$id'
	")
 or die(mysqli_error($mysqli));
 $_SESSION['delete_msg'] ='Deleted Successfully';

header("location: ../view_borrows.php");
}
 ?>