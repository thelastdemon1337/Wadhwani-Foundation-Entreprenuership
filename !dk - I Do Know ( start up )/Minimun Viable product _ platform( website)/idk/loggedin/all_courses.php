<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<title>IDK</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">All Courses</li>

  </ol>
</nav>

<div class="java-container">

  <div class="card" >
      <img src="../images/vr_2.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Virtual Reality</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : Tarun Kotagiri</p>

      </div>
      <a href="computer_science/c++/description_formationvideo.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_formationvideo.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img5.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Advanced Math</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : Vivek </p>
      </div>
      <a href="computer_science/c++/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>

  
  <div class="card" >
      <img src="../images/cyb_9.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Cyber Security</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : colab { Tarun & Vivek }</p>

      </div>
      <a href="engineering/chemical/description_stanford.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/chemical/engineering_chemical_stanford.php" class="btn btn-primary">View Course !</a>
  </div>

  
</div>
