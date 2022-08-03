<?php 

include '../init.php';
$id = $_GET['id'];


$pas = up_pass();
if(!$pas){
    header("location:password_one.php?id=$id");
}
?>
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
    <a class="navbar-brand" href="#"> el-dosry.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
    
    
    </div>
  </div>
 </nav>

 
 <form action="" method="post">
    <center> <input type="text"  placeholder="الباسوردالجديد ...." name="password"class="form-control" style="width:30%; margin-top:200px; margin-bottom:10px;">
    <center> <input type="text"  placeholder="تاكيد الباسورد ...." name="passwordd"class="form-control" style="width:30%;  margin-bottom:10px;">

     <button type="submit" class="btn btn-success" name="add"> Save</button>

<?php
if(isset($_POST['add'])){
$password = $_POST['password'];
$passwordd = $_POST['passwordd'];
if($password == $passwordd){
    $sel = mysqli_query($con , "select * from `user` where `id` = $id");
    $ss = mysqli_fetch_assoc($sel);
    $paword = $ss['password'];
    if($password == $paword){
        print 'ادخل رقم غير القديم';
        die();
    }
    else{
    $up = mysqli_query($con , "update `user` set `password` = $password where `id` = $id");
    if($up){
        $_SESSION['password']= false;
        $_SESSION['pass'] = false;

 
        header("location:video.php?id=$id"); 

    }
    else{
        print '<script>alert("لم يتم التعديل نرجو التواصل مع الدعم ")</script>';
    }
    
}
}
else{
    print 'الرجاء كتابه تاكيد الباسورد بشكل صحيح';
}
 
}




?>