<?php
include 'connection.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:index.php');
};

?>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="s.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
 <!-- ===== Boxicons CSS ===== -->
 <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

    <title>Home</title>
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
                    <li><a href="chat.php">chat</a></li>
                    <li><a href="index1.php">Room2</a></li>
                    <li><a href="#cou2">Games</a></li>
                    <li><a href="edit.php">Profile</a></li>
                    <li><a href="Home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#cou3">About</a></li>
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
    <!-- bot -->
    <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Chatbot</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>
    <div class="popup">
      <div class="icon"><i class=""></i></div>
      <div class="details">
        <h2 class="title"></h2>
        <p class="desc"></p>
        <button class="reconnect">Reconnect Now</button>
      </div>
    </div>

    <div class=" body2">
    <section id="cou2">
  <div class="container">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
        <a href="indexa.html"><img class="image-item" src="images/1.jpg" alt="img-1" /></a>
        <a href="indexb.php"><img class="image-item" src="images/2.jpg" alt="img-2" /></a>
        <a href="indexc.html"><img class="image-item" src="images/3.jpg" alt="img-3" /></a>
        <a href="indexd.html"><img class="image-item" src="images/4.jpg" alt="img-4" /></a>
        <a href="indexe.php"><img class="image-item" src="images/5.jpg" alt="img-5" /></a>
        <a href="indexf.html"><img class="image-item" src="images/6.jpg" alt="img-6" /></a>
        <a href="indexg.html"><img class="image-item" src="images/7.jpg" alt="img-7" /></a>
        <a href="indexh.html"><img class="image-item" src="images/8.jpg" alt="img-8" /></a>
        <a href="indexi.html"> <img class="image-item" src="images/9.jpg" alt="img-9" /></a>
        <a href="indexj.html"><img class="image-item" src="images/10.jpg" alt="img-10" /></a>
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
  </section>
</div>
  
  <section id="cou3">
  <div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container bottomContainer">
    <div class="ultimateImg">
      <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp4.svg">
      <div class="purpleBox">
        <p class="purpleText">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget purus lectus viverra in semper nec pretium mus.
        </p>
        <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
      </div>
    </div>
    <div class="allText bottomText">
      <p class="text-blk headingText">
        About Me
      </p>
      <p class="text-blk subHeadingText">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <p class="text-blk description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum ut.
      </p>
      <a class="explore">
        View Services
      </a>
    </div>
  </div>
</div>
</section>


    <script src="script2.js"></script>
  <script src="script1.js" defer></script>
    <script src="script.js"></script>
    <script src="scrip.js" defer></script>
</body>
</html>