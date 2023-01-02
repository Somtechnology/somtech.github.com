<?php 
session_start();
if (!isset($_SESSION['username'])) {
 header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"
 href="css/jquery.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="assets\fontawesome-free-6.1.1-web\css\all.min.css">

<link rel="stylesheet" type="text/css" href="assets\fontawesome-free-6.1.1-web\css\fontawesome.min.css">

 <script src="js/jquery.js"></script>
 
<script src="js/jquery.dataTables.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
        </li>
<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_student.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_books.php"> Books</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_borrows.php"> Borrows</a>
        </li>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_user.php"> Users</a>
        </li>
  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="session.php"> Session</a>
        </li>


	<!--Nav 2-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="process/process_logout.php">Log Out</a></li>
             <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
         

      </ul>
       
    </div>
  </div>
</nav>

<body>

  <?php include('footer.php')?>