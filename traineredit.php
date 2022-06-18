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
    <h6 class="m-0 font-weight-bold text-primary">Edit register Trainer 
            <a href="trainertable.php" class="btn btn-danger"  >
              BACK
            </a>
    </h6>
  </div>

  <div class="card-body">
    <div class="row">
    <div class="col-md-6">
    <form action="trainercode.php" method="POST">
    <div class="modal-body">
<?php
if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM trainer WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run) > 0)
{
  foreach($query_run as $row)
{
?>
<input type="hidden" name="user_id"
                value="<?php echo $row['id']?>">
<div class="form-group">
                <label>  First name </label>
                <input type="text" name="fname"
                value="<?php echo $row['fname']?>" class="form-control" placeholder="Enter First name">
            </div>
            <div class="form-group">
                 <label>  Last name </label>
                <input type="text" name="lname"
                value="<?php echo $row['lname']?>" class="form-control" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label>  Gender </label>
                <input type="text" name="gender"
                value="<?php echo $row['gender']?>" class="form-control" placeholder="Enter either male or female or other">
            </div>
            <div class="form-group">
                <label>  Date of birth </label>
                <input type="datetime-local" name="dob"
                value="<?php echo $row['dob']?>" class="form-control" placeholder="Enter your date of birth mm/ww/yy">
            </div>
            <div class="form-group">
                <label>Phone no</label>
                <input type="text" name="phone" 
                value="<?php echo $row['phone']?>"class="form-control" placeholder="Enter Phone no">
            </div>
            <div class="form-group">
                <label>  Area of expertise </label>
                <input type="textarea" name="area" value="<?php echo $row['area']?>"class="form-control" placeholder="Enter the field you are expert in">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" 
                value="<?php echo $row['location']?>"class="form-control" placeholder="Enter prefered location">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"
                value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
            </div>
            
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label> Password</label>
                <input type="password" name="password" 
                value="<?php echo $row['password']?>"class="form-control" placeholder=" Password">
            </div>
            </div>
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