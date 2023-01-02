<?php
   session_start();

    if(isset($_SESSION['username']))
    {
     header("location:index.php");
    }
   

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

 <link rel="stylesheet" type="text/css" href="assets\fontawesome-free-6.1.1-web\css\all.min.css">

<link rel="stylesheet" type="text/css" href="assets\fontawesome-free-6.1.1-web\css\fontawesome.min.css">



     
       
    </div>
  </div>
</nav>
<?php include('footer.php')?>