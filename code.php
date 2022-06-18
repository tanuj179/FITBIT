<?php
session_start();
include "config/dbcon.php";
if(isset($_POST['registerbtn']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password']; 
   $Confirmpassword =$_POST['Confirmpassword'];
   if($password==$Confirmpassword)
   {
       

    $sql = "INSERT INTO users (name,  email,phone,password) VALUES ('$name',  '$email','$phone','$password')";
    if(mysqli_query($con, $sql)){
        
        $_SESSION['status'] ="user addes sucesfully";
        header("Location: register.php");
    } else{
        $_SESSION['status'] ="user registration fail ";
        header("Location: register.php");
       
    } 

    // Close connection
    mysqli_close($con);
   
   }

   else{
    $_SESSION['status'] ="user password and confirm password does not match ";
    header("Location: register.php");
   } 
} 
//update query
if(isset($_POST['update']))
{
    $user_id =$_POST['user_id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password']; 

    $sql = "UPDATE  users SET name='$name',email='$email',phone='$phone',password='$password' WHERE id='$user_id'";
    if(mysqli_query($con, $sql)){
        
        $_SESSION['status'] ="user update sucesfully";
        header("Location: register.php");
    } else{
        $_SESSION['status'] ="user update fail ";
        header("Location: register.php");
       
    } 

    // Close connection
    mysqli_close($con);
    
}  
if(isset($_POST['DeleteUserbtn']))
{
    $user_id =$_POST['delete_id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password']; 

    $sql = "DELETE FROM users where id='$user_id'";
    if(mysqli_query($con, $sql)){
        
        $_SESSION['status'] ="user deleted sucesfully";
        header("Location: register.php");
    } else{
        $_SESSION['status'] ="user deleting fail ";
        header("Location: register.php");
       
    } 

    // Close connection
    mysqli_close($con);
    
}  

?>

