<?php include ('header.php') ?>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';


$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));


?>

<div class="container">
<h1>Add User </h1><br>

   <div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
      <div class="card-body">
      <br>  
      <h3 class="card-title">Add user</h3>
      <form method="POST" action="process/process_user.php">
<label>Username</label>
<input type="text" name="username" required  class="form-control" placeholder="Enter your username"> 
<label>Password</label>
<input type="password" name="password" required placeholder="Enter your password" class="form-control" >
<label for="color">Role</label>

    
   <select name="role"  class="form-control" required placeholder="Select your role"  >
  <option value="">Select</option>
   <option value="User">User</option>
   <option value="Admin">Admin</option>
   
</select><br><br>
<button name="save" type="submit" class="btn btn-success">Save</button>

<a href="view_user.php">Back</a>

</div>
</form>
<br><br>
      </div>
   </div>



</body>
</html>