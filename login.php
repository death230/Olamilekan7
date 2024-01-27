<?php

include 'connection.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:Home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>
?>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    <!-- ===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Signin</title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="#">Olamilekan</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Olamilekan</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                <li><a href="#">Home</a></li>
                    <li><a href="cou.php">Course</a></li>
                    <li><a href="chat2.php">chat</a></li>
                    <li><a href="chat2.php">Room2</a></li>
                    <li><a href="#cou2">Games</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="login.php">signin</a></li>
                    <li><a href="signup.php">signup</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
<div class="form-container">

<form action="" method="post" enctype="multipart/form-data">
   <h3>login now</h3>
   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '<div class="message">'.$message.'</div>';
      }
   }
   ?>
   <input type="email" name="email" placeholder="enter email" class="box" required>
   <input type="password" name="password" placeholder="enter password" class="box" required>
   <input type="submit" name="submit" value="login now" class="btn">
   <p>don't have an account? <a href="signup.php">regiser now</a></p>
   <p><a href="index.php">Go back</a></p>
</form>
</div>
<div class="popup">
      <div class="icon"><i class=""></i></div>
      <div class="details">
        <h2 class="title"></h2>
        <p class="desc"></p>
        <button class="reconnect">Reconnect Now</button>
      </div>
    </div>
  <script src="script1.js" defer></script>
<script src="script.js"></script>
</body>
</html>