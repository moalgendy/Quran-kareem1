<?php 

include '../init.php';
$user_id = @$_GET['id'];
$vi_id = $_SESSION['vi_id'];
?>
<?Php 

$sel = mysqli_query($con  , "select * from `user` where `id` = '$user_id'");
$s  = mysqli_fetch_assoc($sel);




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
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="image/Eldosry.webp" alt="logo" style=" height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <?php $c = chack_user(); if($c){ $user_id = $_SESSION['user_id'];print' <a class="nav-link" href="video.php?id='.$user_id.' " style="font-size:20px; margin-left:50px;">video</a>';} else{print '<a href="log.php">يجب تسجيل الدخول لكي تشاهد الفديهات';} ?>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#" style="font-size:20px; margin-left:50px;">تحميل القرأن كاملاً</a>
        </li> -->
        <li class="nav-item">
        <?php $ca = chack_user(); if(!$ca){print '  <a class="nav-link" href="log.php" style="font-size:20px; margin-left:50px;"> login </a>';}
        else{ print '<a class="nav-link" href="logout.php" style="font-size:20px; margin-left:50px;"> تسجيل الخروج </a>';}?>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="password_one.php?id=<?php print $user_id?>" style="font-size:20px; margin-left:50px;">تغيير الباسورد</a>
        </li>
      </ul>
    
    </div>
  </div>
 </nav>
<?php 
 print '<center>
 <img style=" width: 200px;
 border-radius: 50%; border:5px solid #000; margin-top:90px; margin-bottom:20px; " src="userimg/'.$s['img'].'" controls class="content_image"></div></a>
 <br>
 <center>
 <form action="" method="post" enctype="multipart/form-data">
 <input type="file" name="img">
 </center>
 <br>
 <center>
 <button type="submit" class="btn btn-success" name="add" style="margin-bottom:20px;"> Save</button>
 </form>
 </center>


 ';
 if(isset($_POST['add'])){
     $file = 'userimg/';
     $f = $file . basename($_FILES['img']['name']);
     if(move_uploaded_file($_FILES['img']['tmp_name'] , $f)){
         $img = $_FILES['img']['name'];
         $up = mysqli_query($con  , "UPDATE `user` set `img` = '$img' where `id` = $user_id");
         if($up){print '<script>alert("تم التعديل ");</script> 
           e <meta http-equiv="refresh" content="0.1">
            
            ';}
            else{print'<script>alert("فشلت العمليه المرجو المحاوله ثانه  او تقديم بلاغ")</script>';}
     }
 }
 ?>

 <form action="" method="post">
     <input type="text" value="<?=$s['name']?>" name="name"class="form-control" style="width:20%; margin-bottom:30px;">
     <button type="submit" class="btn btn-success" name="addddd"> Save</button>


</form>
<?php
if(isset($_POST['addddd'])){
    $name = $_POST['name'];
    $up = mysqli_query($con  , "UPDATE `user` set `name` = '$name' where `id` = $user_id");
    if($up){print '<script>alert("تم التعديل ");</script> 
      e <meta http-equiv="refresh" content="0.1">
       
       ';}
       else{print'<script>alert("فشلت العمليه المرجو المحاوله ثانه  او تقديم بلاغ")</script>';}
}


?>

<form action="" method="post">
     <input type="text" disabled="disabled" value="<?=$s['email']?>" name="name"class="form-control" style="width:20%; margin-bottom:30px;">
    


</form>




<form action="" method="post">
     <input type="text" value="<?=$s['phone']?>" name="phone"class="form-control" style="width:20%; margin-bottom:30px;">
     <button type="submit" class="btn btn-success" name="addd"> Save</button>


</form>
<?php
if(isset($_POST['addd'])){
    $phone = $_POST['phone'];
    $up = mysqli_query($con  , "UPDATE `user` set `phone` = '$phone' where `id` = $user_id");
    if($up){print '<script>alert("تم التعديل ");</script> 
      e <meta http-equiv="refresh" content="0.1">
       
       ';}
       else{print'<script>alert("فشلت العمليه المرجو المحاوله ثانه  او تقديم بلاغ")</script>';}
}


?>



