<?php 
session_start();
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));
if (isset ($_POST['save']) ) {
	$book_name = $_POST['book_name'];
	$edition = $_POST['edition'];
	$faculty = $_POST['faculty'];
	$number = $_POST['number'];

//save query
	$mysqli->query("
		INSERT INTO books
		( book_name , edition , faculty , number)
		VALUES 
       ('$book_name', '$edition' , '$faculty' , '$number')
		")
	or die (mysqli_error($mysqli));
	$_SESSION['save_msg'] = "Saved Successfully";
	header("location: ../view_books.php");
	
}
if (isset ($_POST['update']) ) {
	$id = $_POST['id'];
	$book_name = $_POST['book_name'];
	$edition = $_POST['edition'];
	$faculty = $_POST['faculty'];
	$number = $_POST['number'];

//update query
	$mysqli->query("
		UPDATE books
		SET 
		book_name = '$book_name',
	    edition = '$edition',
		faculty = '$faculty',
		number = '$number'
      WHERE 
      id = '$id'
		")
	or die (mysqli_error($mysqli));
	 $_SESSION['update_msg'] = 'Updated Successfully';
	header("location: ../view_books.php");
}
if ($_GET['delete']){

$id =$_GET ['delete'];
$mysqli->query("
DELETE FROM  books
WHERE 
id ='$id'
	")
 or die(mysqli_error($mysqli));
 $_SESSION['delete_msg'] ='Deleted Successfully';
header("location: ../view_books.php");
}

 ?>