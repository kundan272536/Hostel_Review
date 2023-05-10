<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Review System</title><!--Google Fonts Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
  <!--Logo Image-->
    <link rel="icon" type="image/x-icon" href="../images/logo1.png">
  <!--Bootstrap Link-->  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 <!-- aos css link  -->
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!--Css StyleSheet Link-->
<link rel="stylesheet" href="a_style.css">

</head>
<style>
  #navbarNav{
    margin-left: 55%;
   }
</style>
<body >
    <!---Nav-Bar-->
   
<header>
<!-- Navbar content -->

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" style="margin-left: 30px;" href="#"><img src="../images/logo1.png" height="60px" width="110px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-text">
        <li class="nav-item nav-text">
          <a class="nav-link active " aria-current="page" href="a_home.php">Home</a>
        </li>
        <li class="nav-item nav-text">
          <a class="nav-link " href="a_review.php">Review</a>
        </li>
        <li class="nav-item nav-text">
          <a class="nav-link " href="a_suggestion.php">Suggested Menu</a>
        </li>
        <li class="nav-item nav-text">
          <a class="nav-link "href="a_menu.php">Daily Menu</a>
        </li>
        <li class="nav-item nav-text">
          <a class="nav-link "href="a_logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
</header>    