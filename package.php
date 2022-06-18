<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config/dbconn.php');
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
        <h5 class="modal-title" id="exampleModalLabel">Add Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="packagecode.php" method="post">
        <div class="modal-body">

            <div class="form-group">
                <label> package_type </label>
                <input type="text" name="package_type" class="form-control" placeholder="Enter Package type">
            </div>
            <div class="form-group">+
                <label>   Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter full name">
            </div>
            <div class="form-group">
                <label>  Months </label>
                <input type="text" name="time period" class="form-control" placeholder="Enter training period">
            </div>
            <div class="form-group">
                <label>  Amount </label>
                <input name="amount" class="form-control" placeholder="Enter amount for pacakge">
            </div>
           
             
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="packagebtn" class="btn btn-primary">Save</button>
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
<form action="packagecode.php" method="POST">
<div class="modal-body">

<input type="hidden" name="package_id"
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
    <h6 class="m-0 font-weight-bold text-primary"> Package
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
               Add pacakge
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Package Type </th>
            <th>  Name </th>
            <th>Months </th>
            <th> Amount </th>  
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
   <?php
     $query = "SELECT * FROM package_master";
     $query_run = mysqli_query($con,$query);
     if(mysqli_num_rows($query_run)>0)
     {
        foreach($query_run as $row)
        {
         // echo $row['name'];
         ?>
          <tr>
            <td> <?php echo $row['package_id'];?> </td>
            <td> <?php echo $row['package_type'];?> </td>
            <td> <?php echo $row['name'];?> </td>
            <td> <?php echo $row['time_period'];?> </td>
            <td> <?php echo $row['amount'];?> </td>
           
           
           <td>
            <a href="packageedit.php?package_id=<?php echo $row['package_id'];?>"class="btn btn-info btn-sm">EDIT</a></td>
            <td>
            <button type="button" href="" value="<?php
            echo $row['package_id']?>"class="btn btn-danger btn-sm deletebtn">DELETE</button> </td>
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