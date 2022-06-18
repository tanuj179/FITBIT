<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('config/dbconn.php');
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Payment Report
          <a href="index.php" class="btn btn-danger">Back</a>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>package_id</th>
            <th> Full name </th>
            <th> User name </th>
            <th>Email </th> 
            <th>Months </th>  
            <th> Amount</th>
            
           
          </tr>
        </thead>
        <tbody>
   <?php
   $records = mysqli_query($con,"SELECT * FROM payment_master");
   while($row = mysqli_fetch_array($records))
   {
              ?>
          <tr>
        
           <td> <?php echo $row['package_id'];?> </td>
            <td> <?php echo $row['full_name'];?> </td>
            <td> <?php echo $row['uname'];?> </td>
            <td> <?php echo $row['email'];?> </td>
            <td> <?php echo $row['time'];?> </td>
            <td> <?php echo $row['amt'];?> </td>
           
           
         
         </tr>
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


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>