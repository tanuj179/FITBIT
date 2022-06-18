<?php

session_start();
include "config/dbcon.php";
if(isset($_POST['trainerbtn']))
{
  
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $gender = $_POST['gender'];
   $dob = $_POST['dob'];
   $phone = $_POST['phone'];
   $area = $_POST['area'];
   $location = $_POST['location'];
   $email = $_POST['email'];
   $password = $_POST['password']; 
   $Confirmpassword =$_POST['Confirmpassword'];
   if($password==$Confirmpassword)
   {
    $sql = "INSERT INTO trainer (fname,lname,gender,dob,phone,area,location,email,password) VALUES ('$fname','$lname','$gender','$dob','$phone','$area','$location','$email','$password')";

    if(mysqli_query($con, $sql))
    {   
        $_SESSION['status'] ="trainer sucesfully added";
        header("Location: trainertable.php");
    } else{
        $_SESSION['status'] ="trainer registration fail ";
        header("Location: trainertable.php");
       
    } 

    // Close connection
    mysqli_close($con);
   
   }

   else{
    $_SESSION['status'] ="user password and confirm password does not match ";
    header("Location: trainetable.php");
   } 
} 

//update query
if(isset($_POST['update']))
{
    $user_id =$_POST['user_id'];
    $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $gender = $_POST['gender'];
   $dob = $_POST['dob'];
   $phone = $_POST['phone'];
   $area = $_POST['area'];
   $location = $_POST['location'];
   $email = $_POST['email'];
   $password = $_POST['password']; 

    $sql = "UPDATE trainer SET 
    fname='$fname', lname='$lname',gender='$gender',dob='$dob',phone='$phone',area='$area',location='$location',email='$email',password='$password'
    WHERE id='$user_id'";
    $query_run = mysqli_query($con,$sql);

    if($query_run){
        
        $_SESSION['status'] ="user update sucesfully";
        header("Location: trainertable.php");
    } else{
        $_SESSION['status'] ="user update fail ";
        header("Location: trainertable.php");
       
    } 

    // Close connection
    mysqli_close($con);
    
} 

//delete user

if(isset($_POST['DeleteUserbtn']))
{
    $user_id =$_POST['delete_id'];
  
    $sql = "DELETE FROM trainer where id='$user_id'";
    if(mysqli_query($con, $sql)){
        
        $_SESSION['status'] ="user deleted sucesfully";
        header("Location: trainertable.php");
    } else{
        $_SESSION['status'] ="user deleting fail ";
        header("Location: trainertable.php");
       
    } 

    // Close connection
    mysqli_close($con);
    
}  

?>