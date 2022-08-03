<?php
include '../init.php';
// require 'header.php';
//تاكد من السشين
$check=check_admin();
if(!$check){
    header('LOCATION: login.php');
}
if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styledash.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-M-plus-plus'></i> -->
      <span class="logo_name">  el-dosry</span>
    </div>
      <ul class="nav-links">
        <li>
         
        </li>
        <li>
          <a href="video.php">
            <i class='bx bx-video' ></i>
            <span class="links_name">video</span>
          </a>
        </li>
        <li>
          <a href="image.php">
            <i class='bx bx-image' ></i>
            <span class="links_name">image </span>
          </a>
        </li>
        <li>
          <a href="audios.php">
            <i class='bx bx-music' ></i>
            <span class="links_name">audios</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
        <li>
          <a href="profile.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  


  
  
      

<?php
//  require 'footer.php';
