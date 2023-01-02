<?php include ('header.php') ?>

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'php';

$mysqli = new mysqli($server, $user, $password, $database) or die(mysqli_error($mysqli));

if ($mysqli->connect_error) {
die('not connected');
}
else {
	
	echo "";
}
?>
 <div class = "container">





<!-- Edit Profile  -->
			<div class = "row" >
				 

	<!-- Clock and new orders  -->
					<div class = "col" >
						<div class = "jumbotron" style="width: 100%; height:  100%; color" ><br>
							<h1>Welcome To The Library</h1> <br><br>
							<div class="row" >  
								<!-- Clock Api  -->
								<div class = "col-md-4"> 
										<iframe src="http://free.timeanddate.com/clock/i77e8npf/n3997/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>

								</div>



								<!-- New Order  -->
								<div class = "col-md-8">
									<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
									      <div class="card-body">
									        <h5 class="card-title">



									       Students</h5>
									        <p class="card-text">Here you can Add and view Students</p>
									        <a class="btn btn-success" aria-current="page" href="Add_Students.php">Add</a>&nbsp;
									        <a class="btn btn-success" aria-current="page" href="view_student.php">View</a>&nbsp;
									      </div>
									    </div>


								 </div>

							 </div>
							
						</div>
						

					</div>
			</div>		





</div>


<!-- Manage and add new  - this is the new container the at  the button   -->
<br><br>

<div  class = "container" >
	
		<div class = "row" >
			<!-- Firt column   -->
			<div class = "col-md-4"> 
					<div class="card mx-auto" style="width: 100%; box-shadow:0 0 50px 0 lightgrey;">
						<div class="card-body">
							<h4 class="card-title">Books</h4>
						<p class="card-text"> Here you can Add and view Books </p>
					 <a class="btn btn-success" aria-current="page" href="Books.php">Add</a>&nbsp;
					<a class="btn btn-success" aria-current="page" href="view_books.php">View</a>&nbsp;
					</div>
					</div>
			</div>

<!-- Second column   -->

				<div class = "col-md-4"> 
					<div class="card mx-auto" style="width: 100%; box-shadow:0 0 50px 0 lightgrey;">
						<div class="card-body">
							<h4 class="card-title">Borrows</h4>
						<p class="card-text">Here you can Add and view Students </p> 
						<a class="btn btn-success" aria-current="page" href="Add_Borrow.php">Add</a>&nbsp;
					<a class="btn btn-success" aria-current="page" href="view_borrows.php">View</a>&nbsp;
					</div>
					</div>



				</div>


<!-- Third column   -->				
				<div class = "col-md-4"> 

					<div class="card mx-auto" style="width: 100%; box-shadow:0 0 50px 0 lightgrey;">
						<div class="card-body">
							<h4 class="card-title">Users </h4>
						<p class="card-text">Here you can Add new or Manage System users </p>
						 <a class="btn btn-success" aria-current="page" href="Add_user.php">Add</a>&nbsp;
					 <a class="btn btn-success" aria-current="page" href="view_user.php">View</a>&nbsp;
					</div>
					</div>


				</div>



</div>







 
</div>




<?php include('footer.php')?>