<?php 
session_start();

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

if (isset($_POST['change_pass'])) {

	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$username = $_SESSION['username'];

//confirm old pass
	$result = $mysqli->query("
		SELECT password from user
		where 
		username = '$username'
		and
		password = '$old_pass'
		")
	or die(mysqli_error($mysqli));
	$row = $result->fetch_array();

	if ($row) {
		//change
		$mysqli->query("
			UPDATE user
			set
			password = '$new_pass'
			where
			username = '$username'

			") or die (mysqli_error($mysqli));
		$_SESSION['changed'] = 'password successfully changed!';
		header('location: ../login.php');
		session_destroy();


	}else{
		$_SESSION['incorrect'] = 'incorrect old password';
		header('location: ../change_password.php');
	}


}

?>