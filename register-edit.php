<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config/dbcon.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit register user 
            <a href="register.php" class="btn btn-danger"  >
              BACK
            </a>
    </h6>
  </div>

  <div class="card-body">
    <div class="row">
    <div class="col-md-6">
    <form action="code.php" method="POST">
    <div class="modal-body">
<?php
if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];
    $query = "SELECT * from users WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
{
foreach($query_run as $row)
{
?>

    
<input type="hidden" name="user_id" value="<?php echo $row['id']?>">


<div class="form-group">
    <label>  name </label>
    <input type="text" name="name"
    value="<?php echo $row['name']?>" class="form-control" placeholder="Enter name">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email"
    value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
</div>
<div class="form-group">
    <label>Phone no</label>
    <input type="text" name="phone" 
    value="<?php echo $row['phone']?>"class="form-control" placeholder="Enter Phone no">
</div>
<div class="form-group">
    <label> Password</label>
    <input type="password" name="password"
    value="<?php echo $row['password']?>" class="form-control" placeholder=" Password">
</div>



<?php
}
}
else{
    echo"<h4>no records found</h4>";
}
}

?>
</div>
<div class="modal-footer">
<button type="submit" name="update" class="btn btn-info">Update</button>
</div>
</form> 
    </div>

    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>