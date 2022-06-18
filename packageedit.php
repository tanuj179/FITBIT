<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config/dbconn.php');
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
    <h6 class="m-0 font-weight-bold text-primary">Edit Package 
            <a href="package.php" class="btn btn-danger"  >
              BACK
            </a>
    </h6>
  </div>

  <div class="card-body">
    <div class="row">
    <div class="col-md-6">
    <form action="packagecode.php" method="POST">
    <div class="modal-body">
<?php
if(isset($_GET['package_id']))
{
    $package_id = $_GET['package_id'];
    $query = "SELECT * from package_master WHERE package_id ='$package_id' LIMIT 1";
    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
{
foreach($query_run as $row)
{
?>

    
<input type="hidden" name="package_id" value="<?php echo $row['package_id']?>">


<div class="form-group">
    <label>  Package type </label>
    <input type="text" name="package_type"
    value="<?php echo $row['package_type']?>" class="form-control" placeholder="Enter package type">
</div>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name"
    value="<?php echo $row['name']?>" class="form-control" placeholder="Enter full name">
</div>
<div class="form-group">
    <label>Months</label>
    <input type="text" name="time_period" 
    value="<?php echo $row['time_period']?>"class="form-control" placeholder="Enter months on training">
</div>
<div class="form-group">
    <label> Amount</label>
    <input type="text" name="amount"
    value="<?php echo $row['amount']?>" class="form-control" placeholder="  enter amount">
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