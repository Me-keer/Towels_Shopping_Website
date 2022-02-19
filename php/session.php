<?php
 session_start();
 if(isset($_SESSION['user']))
 {
  unset($_SESSION['user']);
  echo"<script>alert('Logged out successfully!');</script>";
  echo "<script>location.href='../html/loginh.php'</script>";
 }
 else{
    echo "<script>location.href='../html/loginh.php';</script>";
 }
 ?>