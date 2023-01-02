<?php 
session_start();
 
$server = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

if (isset($_POST['login'])) {


   if (empty($_POST['username']) or  empty($_POST['password'])) {

    $_SESSION['empty'] = "Please fill username and password fields";
    header('location: ../login.php');
   }else{

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $result = $mysqli->query("
      SELECT * FROM user
      where 
      username = '$username'
      and 
      password = '$password'

      ");

   
  $row = $result->fetch_array();




    if ($row) {
      
       
      $_SESSION['id'] = $row["id"];
      $_SESSION['username'] = $row["username"];
      $_SESSION['role'] = $row["role"];
      $_SESSION['full_name'] = $row["full_name"];

      header('location: ../index.php');

    }else{
      header('location: ../login.php');
      $_SESSION['incorrect_login'] = "Fadlan Dib U Hubi Userka iyo Passwordka Aad Kusoo Galayso.";
    }
   }
}
 ?>

