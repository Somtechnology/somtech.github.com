<?php 
session_start();

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

if (isset ($_POST['save'] ) ) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$mysqli->query("
		INSERT INTO user
		(username, password, role )
		VALUES 
		('$username','$password', '$role')
		")
	or die (mysqli_error($mysqli));
	header("location: ../view_user.php");
	
}

if (isset ($_POST['update'] ) ) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$mysqli->query("
		UPDATE user
		SET
		username = '$username',
		password = '$password',
		role = '$role'
		where 
		id = '$id'

		")
	or die (mysqli_error($mysqli));
	$_SESSION['update_msg'] = "Update Succesfully";
	header("location: ../view_user.php");

	

}

if ($_GET['delete']) {
	$id = $_GET['delete'];
	$mysqli->query("
		DELETE FROM user
		where 
		id = '$id'

		")
	or die (mysqli_error($mysqli));
	$_SESSION['delete_msg'] = "Delete Succesfully";
	
	header("location: ../view_user.php");

}

 ?>