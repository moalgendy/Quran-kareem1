
<?php  

require "header.php";
$p = mysqli_query($con ,"select * from `video`");
$pp = mysqli_num_rows($p);

?>
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="img/2.png" alt="photo">
        <span class="admin_name">oi team  </span>
        <!-- <i class='bx bx-chevron-down' ></i> -->
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes"  style="margin-top: 50px;">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total video</div>
            <div class="number"><?php print $pp ;?></div>
         
            <!-- <div class="number"></div>
            <div class="indicator">
              <i class='bx bx-video'></i>
              <span class="text">Up from yesterday</span>
            </div> -->
          </div>
          <ion-icon name="videocam" style="font-size:40px; color:#000;"></ion-icon>
        
        </div>
        <div class="box" style="margin-left: 50px;">
          <div class="right-side">
            <div class="box-topic">Total images</div>
            <div class="number">0</div>
            <!-- <div class="indicator">
              <i class='bx bx-image'></i>
              <span class="text">Up from yesterday</span>
            </div> -->
          </div>
          <ion-icon name="image" style="font-size:40px; color:#000;"></ion-icon>
        </div>
        <div class="box" style="margin-left: 50px;">
          <div class="right-side">
            <div class="box-topic">Total audios</div>
            <div class="number">   114</div>
            <!-- <div class="indicator">
              <i class='bx bx-music'></i>
              <span class="text">Up from yesterday</span>
            </div> -->
          </div>
          <ion-icon name="volume-high" style="font-size:40px; color:#000;"></ion-icon>
          
        </div>
       

        <div class="box" style="margin-top:70px; background:#e7e7e7;">
          <div class="right-side">
            <!-- <div class="box-topic">Total Return</div> -->
            <a href="video.php" style="font-size:40px; text-decoration:none; color:#081D45" >video</a>
            <!-- <div class="indicator">
               <i class='bx bx-video'></i> 
               <span class="text">Down From Today</span> 
            </div> -->
          </div>
           <!-- <i class='bx bx-video' ></i>  -->
          <ion-icon name="videocam" style="font-size:40px; color:#000;"></ion-icon>
        </div>


          
        <div class="box" style="margin-top:70px; background:#e7e7e7;">
          <div class="right-side">
            <!-- <div class="box-topic">Total Return</div> -->
            <a href="image.php" style="font-size:40px; text-decoration:none; color:#081D45" >image</a>
            <!-- <div class="indicator">
               <i class='bx bx-image'></i> 
               <span class="text">Down From Today</span> 
            </div> -->
          </div>
           <!-- <i class='bx bx-image' ></i>  -->
          <ion-icon name="image" style="font-size:40px; color:#000;"></ion-icon>
        </div>
        <div class="box" style="margin-top:70px; background:#e7e7e7;">
          <div class="right-side">
            <!-- <div class="box-topic">Total Return</div> -->
            <a href="audios.php" style="font-size:40px; text-decoration:none; color:#081D45" >audios</a>
            <!-- <div class="indicator">
               <i class='bx bx-music'></i> 
               <span class="text">Down From Today</span> 
            </div> -->
          </div>
           <!-- <i class='bx bx-music' ></i>  -->
           <ion-icon name="volume-high" style="font-size:40px; color:#000;"></ion-icon>
        </div>
        <?php
require "footer.php";
        ?>
