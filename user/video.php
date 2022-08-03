<?php include'../init.php';
$id = $_GET['id'];

$sel = mysqli_query($con , "select * from `admin` ");
$m = mysqli_fetch_assoc($sel);

$user_id = $_SESSION['user_id'];
if(isset($_GET['mass'])){
$mss = $_GET['mass'];
if($mss){
  print '<h1>تم التعديل </h1>
';}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>video</title>
    <link rel="icon" type="image/png" href="./images/favicon.png" />
    <link rel="stylesheet" href="css/styl-video.css" />
    <link rel="stylesheet" href="sid.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <link rel="stylesheet" 
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">


    <script src="scrip.js" type="text/javascript"></script>

  </head>
  <body>

  <?php 
$s  = mysqli_query($con , "select * from `user` where `id` = '$user_id'");
$sws = mysqli_fetch_assoc($s);
$img = $sws['img'];

?>
    



          <div class="sidebar close">
    <div class="logo-details">
    <img src="image/b.webp" alt="profileImg">
      <span class="logo_name">El-dosry.com</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">الصفحة الرئيسية</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">الرئيسية</a></li>
        </ul>
      </li>
      <!-- <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">...........</a></li>
          <li><a href="#">..........</a></li>
          <li><a href="#">.........</a></li>
        </ul>
      </li>
      <li> -->
        <!-- <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">........</a></li>
          <li><a href="#">..........</a></li>
          <li><a href="#">.........</a></li>
        </ul>
      </li> -->
       
      <!---<li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li> -->
      <li>
        <a href="fehres.php">
          <i class='bx bx-book' ></i>
          <span class="link_name">الفهرس</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="ٌfehres.php">الفهرس</a></li>
        </ul>
      </li>
      <li>
        <a href="../download/ياسر الدوسري.rar">
          <i class='bx bx-box'></i>
          <span class="link_name">تحميل القرآن كامل</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">تحميل القرآن كامل</a></li>
        </ul>
      </li>
      <li>
        <a href="profile.php">
        <i class="material-icons">account_circle</i>
          <span class="link_name">الصفحة الشخصية</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="profile.php">الصفحة الشخصية</a></li>
        </ul>
      </li>
      <li>
        <a href="profile.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">الاعدادات</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="password_one.php">الاعدادات</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!-- <img src="image/profile.jpg" alt="profileImg"> -->
      </div>
      <div class="name-job" style="margin-left: 5px;">
        <div class="profile_name">محمد الجندى</div>
        <div class="job">تسجيل الخروج</div>
      </div>
      <a href="logout.php"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">



  
    <div class="home-content">
      <i class='bx bx-menu' style="z-index: 99999;color: #fff;margin-top: 10px;"></i>
      <header class="nav-vid">
  <a href="index.php">الرئيسية</a>
  <a href="fehres.php">الفهرس</a>
  <a href="../download/ياسر الدوسري.rar" download="">تحميل القران كامل</a>
  <a href="profile.php?id=<?php echo $user_id ?>">الصفحة الشخصية</a>
</header>

    </div>
    





    <?php 
    
//اختيار عشوائى للفيديوهات

       $sel = mysqli_query($con , "SELECT * FROM video
       ORDER BY RAND()
       LIMIT 10; ");
  
       while($s = mysqli_fetch_assoc($sel)){
        print ' 
      
    <div class="container">
      <div class="post">
        <!-- post header -->
        <div class="post_headrer header">
          <!-- header left -->
          <div class="header_left">
            <a href="#">
            <img src="image/b.webp" alt="author" class="post_author-pic">
            </a>
            <div class="post_author author">
              <span class="author_name">
                <a style="color:white;" href="#">' .$m["name"].'</a>
              </span>
              <i class="author_verified"></i>
            </div>
            <span class="post_date">
              <a style="color:white;" href="#">'.$s['time'].'</a>
            </span>
            <span  style="color:#B0B3B8;" class="post_date-privacy-separator">&nbsp;</span>
            <i class="post_privacy"></i>
          </div>
          <!-- header right -->
          <div class="header_right">
            <div class="post_options options">
              <i class="options_icon"></i>
            </div>
          </div>
        </div>       
        <div class="post_content content">
        <!-- post content -->
      <p style="color:white;" class="content_paragraph"> '.$s['dis'].' </p>
      <a href="" ><video src="../admin/video/'.$s['video'].'" controls class="content_image"></video></div></a>
        <!-- post footer -->
        <div class="post_footer footer">
          <!-- reactions -->
          <div class="footer_reactions reactions"> 
          <div class="reactions_emojis emojis">
          
    
  
            
              ';
              
              
              
              
              $type = -1;
              $vi = $s['id'];
              $_SESSION['vi_id'] = $vi ;
              
                                // Checking user status
                                $status_query = "SELECT count(*) as cntStatus,type FROM like_unlike WHERE userid=".$user_id." and postid=".$vi;
                                $status_result = mysqli_query($con,$status_query);
                                $status_row = mysqli_fetch_assoc($status_result);
                                $count_status = $status_row['cntStatus'];
                                if($count_status > 0){
                                    $type = $status_row['type'];
                                }
              
                                // Count post total likes and unlikes
                                $like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=".$vi;
                                $like_result = mysqli_query($con,$like_query);
                                $like_row = mysqli_fetch_array($like_result);
                                $total_likes = $like_row['cntLikes'];
              
                                $unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=".$vi;
                                $unlike_result = mysqli_query($con,$unlike_query);
                                $unlike_row = mysqli_fetch_array($unlike_result);
                                $total_unlikes = $unlike_row['cntUnlikes'];
              
              
              
              
              
              
              
              ?>



  

                              </div>

           
              
<?php 
              $vi = $s['id'];
             
              $se = mysqli_query($con , "select * from `like_unlike` where `postid` = $vi and `type` = 1");
              $d = mysqli_fetch_assoc($se);
              $qty = 0;
              $sww = mysqli_num_rows($se);
              
              $qty = $sww * 1 ; 
              $_SESSION['q'] = $qty ;
              $se = mysqli_query($con , "select * from `like_unlike` where `postid` = $vi and `type` = 0");
            $d = mysqli_fetch_assoc($se);
            $qty = 0;
            $sww = mysqli_num_rows($se);
            
            $qtyy = $sww * 1 ;
         
            print '<br>';
           
       

            
          ?>
          </div>
          <div class="post_footer footer">
          <!-- reactions -->
          <div class="footer_reactions reactions">
            <div class="reactions_emojis emojis">
              <!-- <img src="image/like.svg" alt="Mohamed Algendy" class="emojis_like">
              <img src="image/haha.svg" alt="Mohamed Algendy" class="emojis_haha"> -->
              <img src="image/love.svg" alt="Mohamed Algendy" class="emojis_love">
              <span class="emojis_count"><a href="#"><span id="likes_<?php echo $vi; ?>"><?php echo $total_likes; ?></span></a></span>
            </div>
          
            <div class="reactions_comment-shares">
               <span class="comment-shares_comments"><a style="color: #fff;" href="#">صلي علي خير البشر , محمد خاتم الانبياء والمرسلين</a></span>
            <!--  <span class="comment-shares_shares"><a href="#">5.4K Shares</a></span> -->
            </div>
          </div> 

<!--         
    <style>
        .input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .icon {
            padding: 10px;
            min-width: 40px;
        }
          
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
  
<body>
    <h3>
      Icons inside the input element
  </h3>
    <div style="max-width:400px;margin:auto">
        <div class="input-icons">
        <i class="far fa-heart"></i>
                    <input class="input-field" type="button">
            <i class="fa fa-instagram icon"></i>
            <input class="input-field" type="text">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text">
            <i class="fa fa-youtube icon"></i>
            <input class="input-field" type="text">
            <i class="fa fa-facebook icon"></i>
            <input class="input-field" type="text">
        </div> -->
          <!-- buttons -->
 <div class="footer_buttons buttons">
          <button type="button"  value="" id="like_<?php echo $vi; ?>" class="like" style="<?php if($type == 1){echo"color:red;" ;}else{echo"color: #adb2b6;";}?>" >
          <i class="fas fa-heart icona" id="love_l<?php echo $vi; ?>" style="<?php if($type == 1){echo"color:red;" ;}else{echo"color: #adb2b6;";}?>"></i>
      </button>
         
          <style>
          
            .icona 
            {
            position: relative;
            padding: 6px;
            left: 0;
            width: 60px;
            cursor: pointer;
            /* color: #adb2b6; */
            }      
            .like
            {
              font-size: 20px;
              font-weight: 600;
              width: 120px;
              height: 35px;
              margin-right: 150px;
              /* padding-right: 150px; */
              border: none;
              border-radius: 5px;
              cursor: pointer;
              background-color: #242526;
            }
            .like:hover
            {
              background-color: #3a3b3c;
            }
          </style>
            <!-- <span class="buttons_like like"> <i class="comment_icon"></i>-->
              <!-- <i class="like_icon"></i>Like -->
            </span>
            <a style="margin-left: -46px;" href="com.php?id=<?php print $id?>"><span style="width: 120px;" class="buttons_comment comment"><i class="far fa-comment" style="font-size: 20px;"></i></span></a>
            <!-- <span class="buttons_share share"><i class="share_icon"></i>Share</span> -->
          </div>
           <!-- comments -->
           <div class="footer_comments comments">
          <!-- comments filter -->
          <div class="comments_filter filter">
              Most Relevant<i class="filter_icon"></i>
            </div>
          <!-- comments box -->
          <div class="comments_box box">
              <div class="box_profile profile">
              <?php  
                $sell = mysqli_query($con , "select * from `user` where `id` = '$id'");
                $s = mysqli_fetch_assoc($sell);
                
                ?>
                <img src="userimg/<?php print $s['img']  ?>" class="profile_pic" alt="Mohamed Algendy">
              </div>
              <div class="box_bar bar">
                <input type="text" placeholder="Write a comment..." class="bar_input">
              </div>
              <div class="bar_emojis emojis">
                <span class="emojis_insert insert">
                  <i class="insert_emoji"></i>
                </span>
                <span class="emojis_attach attach">
                  <i class="attach_emoji"></i>
                </span>
                <span class="emojis_gif gif">
                  <i class="gif_emoji"></i>
                </span>
                <span class="emojis_sticker sticker">
                  <i class="sticker_emoji"></i>
                </span>
              </div>
            </div>
          
        

<!-- <div class="post-action">

<input type="button" value="Like" id="like_<?php echo $vi; ?>" class="like"  style="<?php if($type == 1) ?>" />&nbsp;<span  id="likes_<?php echo $vi; ?>"><?php echo $total_likes; ?></span>&nbsp; -->

<!-- <input type="button" value="Unlike" id="unlike_<?php echo $vi; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #000;"; } ?>" />&nbsp;<span id="unlikes_<?php echo $vi; ?>"><?php echo $total_unlikes; ?></span> -->

</div>
        

<!-- 
<style>
    .like
    {
      border: none;
        width: 90px;
        background-color: white;
        color: gray;
        height: 20px;
        opacity: 0.6;
        font-size: 1.5rem;
        font-weight: 600;
    }
    .like:hover
    {
      border-radius: 5px;
      background: #f2f2f2;
    }
</style> -->





           <!-- <span class="buttons_like like">
              <i class="like_icon"></i>Like
            </span> -->

            
            <!-- <span class="buttons_comment comment"><a href="com.php?id=<?= $vi?>"> <i class="comment_icon">Comment</i></span></a> -->
          
        
    </div>

         <!-- <span class="emojis_count">like/<?php print $_SESSION['q']?></span>
              
<span class="emojis_count"> des like/<?php print $qtyy?></span> -->
         </div>
    </div>
        </div>
          <?php }?> 
        
      

                  
  </body>
</html>








  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>







  </body>
</html>