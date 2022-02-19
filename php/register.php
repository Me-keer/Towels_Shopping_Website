<?php
// Collecting info from form

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
 
if($username!='' && $password!='' && $email!='')
{
// inserting data into table
$sql = "INSERT INTO users(username,password,email) VALUES('$username','$password','$email')";

// Establishing connection
include_once('db.php');

$qry = mysqli_query($conn,$sql) or die('Username Already exsists!');
     if($qry)
     {
       echo "<script> alert('Registered Successfully!');</script>";
       echo "<script>location.href='../html/loginh.php';</script>";

     }
}
else{
  echo "<script> alert('Please fill up all the blanks');</script>";
  echo "<script>location.href='loginh.php';</script>";
  
}
?>
