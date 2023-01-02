<?php include('header.php') ?>
<div class="card mx-auto" style="width: 50%; box-shadow:0 0 50px 0 lightgrey;">
    <div class="card-body">
    <br>  
    <h4 class="card-title">Books Form</h4>
    <form method="POST" action="process/process_books.php">
<label>Name</label>
<input type="text" name="book_name" required  class="form-control" autocomplete="off" required > 
<label>Edition</label>
<input type="text" Name="edition" required  class="form-control" autocomplete="off" required > 
<label>Faculty</label>
<input type="text" Name="faculty" required  class="form-control" autocomplete="off" required > 
<label>Number Of Pages</label>
<input type="text" Name="number" required  class="form-control" autocomplete="off" required > 

<button style="width:100px;" name="save" type="submit" class=" btn btn-success  rounded-pill">Save</button>
<td> <a style="width: 100px;" class="btn  btn-success rounded-pill" href="view_books.php">Back</a></td>
</div>
</form>
<br><br>
    </div>
  </div>

<?php include('footer.php')?>

