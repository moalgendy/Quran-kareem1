

<?php
include '../init.php';
include 'nav.php';


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/"></script>
    
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aaaa.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="immg/18.jpg">
    <link rel="stylesheet" href="css/style-dosr.css">



    <!-- <link rel="stylesheet" href="css/style-loading.css">
<script src="js/script-loading.js"></script> -->
    <link rel="stylesheet" href="bar.css">
    <title>الصفحة الرئيسية</title>
</head>




<nav class="navbar navbar-expand-lg navbar-light bar " style="top: 0 !important;">
<div class="container-fluid logo">
    <a class="navbar-brand logo" href="index.php"> <img src="image/Eldosry.webp" alt="eldosry" style=" height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle drop" style="font-size:20px; font-weight: 500; margin-left: 20px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        حول الموقع
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
        <a class="dropdown-item" href="../download/ياسر الدوسري.rar" download="" >تحميل المصحف بضغطة</a>
        </li>
        
            <li><a class="dropdown-item" aria-current="page" href="#sound">الصوتيات </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><?php $ca = chack_user(); if(!$ca){print '  <a class="dropdown-item" href="log.php" > تسجيل الدخول </a>';}
        else{ print '<a class="dropdown-item" href="logout.php" > تسجيل الخروج </a>';}?></li>
        </ul>
        </li>



        <li class="nav-item">
        <?php $c = chack_user(); if($c){ $user_id = $_SESSION['user_id'];print' <a class="nav-link" href="video.php?id='.$user_id.' " style="font-size:20px; font-weight: 500;">تصفح الفيديوهات</a>';} else{print '<a href="log.php" style="text-decoration:none;color:black;font-size:25px;font-weight:400;margin-left:5px;">video </a>';print'<script>alert("يجب تسجيل الدخول اولا");</script>';} ?>
        </li>

        <li class="nav-item">
          <a class="nav-link" style="font-size:20px; font-weight: 500; margin-left: 20px;" href="fehres.php">الفهرس</a>
        </li>
        
    </ul>
    <form class="d-flex flex-auto" action="" method="get">
        <input class="form-control rounded-pill" type="search" name="name" placeholder=" اكتب اسم السورة للبحث" aria-label="Search">
        <button name="add" type="submit" class="btn btn-outline-dark" style="margin-left: 5px; background-color: #fff;color: black;">ابحث</button>
    </form>
    </div>
</div>
</nav>


<?php
if(!isset($_GET['name'])){
    ?>

<section class="main">
        <div>
            <h2><img src="https://surahquran.com/img/logo.png" alt="القرأن الكريم" style="padding-left: 200px; padding-bottom: 30px;"><br><span>وننزل من القرأن ما هو شفاء ورحمة للمؤمنين</span></h2>
            
            <a href="#" class="main-btn">فهرس القرأن الكريم</a>
      
            <h3>|| لا تنسونا من صالح دعائكم ||</h3>
        </div>
    </section>

<?php
}
?>







    <!-- <div class="absolute -left-2 -translate-y-12 pointer-events-none md:left-[12%]">
                    <svg x-data="{
        initializeAnimation: false,
        init() {
            setTimeout(() => {
                this.initializeAnimation = true;
            }, 0);
        },
    }" :class="initializeAnimation ? 'animate-cube' : ''" class="text-red-600 animate-cube" width="46" height="53" viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path><path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel"></path><path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path><path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path><path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435" stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
</svg>
                </div>
-->





    <p style="display: flex; justify-content: center; margin-top: 50px;">
        <img src="image/iqraa.png" alt="إقرأ بإسم ربك الذى خلق" style="max-width: 85%; text-align: center; vertical-align: middle; border-style: none;">
    </p>


    <h2 class="title" id="sound">الصوتيات</h2>


<!-- <hr> -->


<div class="container">
<div class="content">
<?php



if(isset($_GET['name'])){
    $ser = $_GET['name'];
    $sel = mysqli_query($con , "select * from `audios` where `name` like '%$ser%'");
    if(empty($ser)){
        print 'نرجو التحقق من اسم الصوره';
        $p = true ;
        die();
    }

    if($ser == 'البقره'){
    print ' <div class="container">
    <div class="content">  
        <div class="player">
            <div class="imgbox">
                <img src="image/b.webp" alt="el-dosry">
            </div>
            <h3 style=" text-align: center;">البقره</h3><hr>
            <audio src="sound/002.mp3" type="audio/mp3" controls></audio>
        </div>' ;
        die();
    }
    if($ser == 'ال-عمران'){
      print ' <div class="container">
      <div class="content">  
          <div class="player">
              <div class="imgbox">
                  <img src="image/b.webp" alt="el-dosry">
              </div>
              <h3 style=" text-align: center;">ال-عمران</h3><hr>
              <audio src="sound/003.mp3" type="audio/mp3" controls></audio>
          </div>' ;
          die();
    }
    if($ser == 'النساء'){
      print ' <div class="container">
      <div class="content">  
          <div class="player">
              <div class="imgbox">
                  <img src="image/b.webp" alt="el-dosry">
              </div>
              <h3 style=" text-align: center;">النساء</h3><hr>
              <audio src="sound/004.mp3" type="audio/mp3" controls></audio>
          </div>' ;
          die();
    }
    if($ser == 'المائده'){
      print ' <div class="container">
      <div class="content">  
          <div class="player">
              <div class="imgbox">
                  <img src="image/b.webp" alt="el-dosry">
              </div>
              <h3 style=" text-align: center;">المائده</h3><hr>
              <audio src="sound/005.mp3" type="audio/mp3" controls></audio>
          </div>' ;
          die();
    }
    if($ser == 'الانعام'){
      print ' <div class="container">
      <div class="content">  
          <div class="player">
              <div class="imgbox">
                  <img src="image/b.webp" alt="el-dosry">
              </div>
              <h3 style=" text-align: center;">الانعام</h3><hr>
              <audio src="sound/006.mp3" type="audio/mp3" controls></audio>
          </div>' ;
          die();
    }
    if($ser == 'الاعراف'){
      print ' <div class="container">
      <div class="content">  
          <div class="player">
              <div class="imgbox">
                  <img src="image/b.webp" alt="el-dosry">
              </div>
              <h3 style=" text-align: center;">الاعراف</h3><hr>
              <audio src="sound/007.mp3" type="audio/mp3" controls></audio>
          </div>' ;
          die();
    }
    if($ser == 'التوبه'){
      print ' <div class="container">
      <div class="content">  
          <div class="player">
              <div class="imgbox">
                  <img src="image/b.webp" alt="el-dosry">
              </div>
              <h3 style=" text-align: center;">التوبه</h3><hr>
              <audio src="sound/009.mp3" type="audio/mp3" controls></audio>
          </div>' ;
          die();
    }
    if(mysqli_num_rows($sel) == 0){
      print "<h1 style='margin-top:50px;'>$ser لايوجد سوره بإسم ";
    }
    while($s = mysqli_fetch_assoc($sel))
    {

  print '
      
     
  
      <div class="player">
            
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
           
                <h3 style=" text-align: center;">'.$s['name'].'</h3><hr>
              

                <audio src="../admin/audios/'.$s['audios'].'" type="audio/mp3" controls=""></audio>
         
                
</div>
      
      
      
      
  


  
  </div>
  </div>
    ';}die(); }

   
           ?>

 <div class="container">
        <div class="content">  
            <div class="player">
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
                <h3 style=" text-align: center;">البقره</h3><hr>
                <audio src="sound/002.mp3" type="audio/mp3" controls></audio>
            </div>
            <div class="player">
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
                <h3 style=" text-align: center;">ال-عمران</h3><hr>

                <audio src="sound/003.mp3" type="audio/mp3" controls></audio>
            </div> 
            <div class="player">
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
                <h3 style=" text-align: center;">النساء</h3><hr>

                <audio src="sound/004.mp3" type="audio/mp3" controls></audio>
            </div>
            <div class="player">
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
                <h3 style=" text-align: center;">المائده</h3><hr>

                <audio src="sound/005.mp3" type="audio/mp3" controls></audio>
            </div>
            <div class="player">
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
                <h3 style=" text-align: center;">الانعام</h3><hr>

                <audio src="sound/006.mp3" type="audio/mp3" controls></audio>
            </div>
            <div class="player">
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
                <h3 style=" text-align: center;">الانفال</h3><hr>
                <audio src="sound/007.mp3" type="audio/mp3" controls></audio>










                
           
        </div>
    </div>  










<div class="container">
  <div class="content">
  <?php 
  $sel = mysqli_query($con , "select * from `audios` ");
  while($e = mysqli_fetch_assoc($sel)){
      print '
      
     
  
      <div class="player">
            
                <div class="imgbox">
                    <img src="image/b.webp" alt="el-dosry">
                </div>
           
                <h3 style=" text-align: center;">'.$e['name'].'</h3><hr>
              

                <audio src="../admin/audios/'.$e['audios'].'" type="audio/mp3" controls=""></audio>
         
                
      </div>
      
      
      
      ';
  }
  
  ?></div>
  </div>
 </div>
</div>
</div>


<!-- <script>
        $(document).ready(function(){
            var empDataTable = $('#empTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'ajaxfile.php'
                },
                pageLength: 5,
                'columns': [
                    { data: 'name' },
                    { data: 'position' },
                    { data: 'age' },
                    { data: 'salary' },
                    { data: 'office' },
                ]
            });
        });
</script> -->
  
  <?php
    include 'footer.php';

?>


