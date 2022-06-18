<?php

session_start();
include "config/dbconn.php";
if(isset($_POST['packagebtn']))
{
   
    $package_type = $_POST['package_type'];
    $name = $_POST['$name'];
    $time_period = $_POST['$time_period'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO package_master (package_type,name,time_period,amount) VALUES ('$package_type','$name','$time_period','$amount')";
    if(mysqli_query($con,$sql))
    {
        $_SESSION['status'] ="package sucesfully added";
        header("Location: package.php");
    }
    else
    {
        $_SESSION['status'] ="package cannot be added";
        header("Location: package.php");
    }
}
//update query
if(isset($_POST['update']))
{
    $package_id = $_POST['package_id'];
    $package_type = $_POST['package_type'];
    $name = $_POST['$name'];
    $time_period = $_POST['$time_period'];
    $amount = $_POST['amount'];

    $sql = "UPDATE package_master SET
    package_type='$package_type',
    name = '$name',
    time_period = '$time_period',
    amount='$amount' WHERE package_id='$package_id' ";
    $query_run = mysqli_query($con,$sql);
    if($query_run){
        
        $_SESSION['status'] ="package update sucesfully";
        header("Location: package.php");
    } else{
        $_SESSION['status'] ="package update fail ";
        header("Location: package.php");
       
    } 
    
}
  //Delete query
  
if(isset($_POST['DeleteUserbtn']))
{
    $package_id =$_POST['package_id'];
  
    $sql = "DELETE FROM package_master where package_id='$package_id'";
    if(mysqli_query($con, $sql)){
        
        $_SESSION['status'] ="package deleted sucesfully";
        header("Location: package.php");
    } else{
        $_SESSION['status'] ="package deleting fail ";
        header("Location: package.php");
       
    } 

    // Close connection
    mysqli_close($con);
    
}  

?>