<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config/dbcon.php');
?>

<?php
if(isset($_SESSION['status']))
{
  echo"<h4>" .$_SESSION['status']."</h4>";
  unset($_SESSION['status']);

}
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Trainer profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="trainercode.php" method="post">
        <div class="modal-body">

            <div class="form-group">
                <label>  First name </label>
                <input type="text" name="fname" class="form-control" placeholder="Enter First name">
            </div>
            <div class="form-group">
                <label>  Last name </label>
                <input type="text" name="lname" class="form-control" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label>  Gender </label>
                <input type="text" name="gender" class="form-control" placeholder="Enter either male or female or other">
            </div>
            <div class="form-group">
                <label>  Date of birth </label>
                <input type="datetime-local" name="dob" class="form-control" placeholder="Enter your date of birth mm/ww/yy">
            </div>
            <div class="form-group">
                <label>Phone no</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone no">
            </div>
            <div class="form-group">
                <label>  Area of expertise </label>
                <input type="textarea" name="area" class="form-control" placeholder="Enter the field you are expert in">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control" placeholder="Enter prefered location">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label> Password</label>
                <input type="password" name="password" class="form-control" placeholder=" Password">
            </div>
      
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label> Confirm Password</label>
                <input type="password" name=" Confirmpassword" class="form-control" placeholder=" Password">
            </div>
      
            </div>
            </div>

             
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="trainerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!--DElete user-->
<div class="modal fade" id="DeleteModal" tabindex="1" aria-labelledby="examapleModelLabel"
aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Deleteuser</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form action="trainercode.php" method="POST">
<div class="modal-body">

<input type="hidden" name="delete_id"
class="delete_user_id">
<p>
Are you sure, you want to delete data?</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
<button type="submit" name="DeleteUserbtn" class="btn btn-danger">Yes,delete!</button>
</div>
</form>
</div>
</div>
</div>
<!--delete user-->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Trainer profile
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Trainer Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> First name </th>
            <th> Last name </th>
            <th>Gender </th>
            <th>Dob </th>  
            <th>Phone no</th>
            <th>Area </th>
            <th>Location</th>
            <th>Email </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
   <?php
     $query = "SELECT * FROM trainer";
     $query_run = mysqli_query($con,$query);
     if(mysqli_num_rows($query_run)>0)
     {
        foreach($query_run as $row)
        {
         // echo $row['name'];
         ?>
          <tr>
            <td> <?php echo $row['id'];?> </td>
            <td> <?php echo $row['fname'];?> </td>
            <td> <?php echo $row['lname'];?> </td>
            <td> <?php echo $row['gender'];?> </td>
            <td> <?php echo $row['dob'];?> </td>
            <td> <?php echo $row['phone'];?> </td>
            <td> <?php echo $row['area'];?> </td>
            <td> <?php echo $row['location'];?> </td>
            <td> <?php echo $row['email'];?> </td>
           
           <td>
            <a href="traineredit.php?user_id=<?php echo $row['id'];?>"class="btn btn-info btn-sm">EDIT</a></td>
            <td>
            <button type="button" href="" value="<?php
            echo $row['id']?>"class="btn btn-danger btn-sm deletebtn">DELETE</button> </td>
         </tr>
         <?php
        }
     }
     else{
       ?>
       <>
       <td>no records found</td>
       </>
       <?php
     }
     ?>
                
      
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');?>
<script>
$(document).ready(function()
{
  $('.deletebtn').click(function(e)
  {
    e.preventDefault();
    var user_id = $(this).val();
    //console.log(user_id);
    $('.delete_user_id').val(user_id);
    $('#DeleteModal').modal('show');
  });
});
</script>
<?php include('includes/footer.php');
?>