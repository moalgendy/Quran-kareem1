<?php
include '../init.php';
$user_id = @$_GET['id'];

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
    <a class="navbar-brand" href="#"> el-dosry.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" style="font-size:20px; margin-left:50px;"aria-current="page" href="#">الرجاء كتابه الباسورد القديم </a>
        </li>
       
    
    </div>
  </div>
 </nav>
 
 <form action="" method="post">
    <center> <input type="text"  placeholder="الباسورد القديم ...." name="name"class="form-control" style="width:30%; margin-top:200px; margin-bottom:10px;">
     <button type="submit" class="btn btn-success" name="add"> Save</button>


</form>
<?php
if(isset($_POST['add'])){
    $password = $_POST['name'];
    $se = mysqli_query($con , "select * from `user` where `id` = $user_id");
    $s = mysqli_fetch_assoc($se);
    $pass = $s['password'];
    
    if($password == $pass){
        $_SESSION['password']= true;
        $_SESSION['pass'] = true;
        $dele = "delete from `pass` where `user_id` = $user_id";
        $d = mysqli_query($con , $dele);
        header("location: passwordup.php?id=$user_id");

    }
    else{
        $sel = mysqli_query($con , "select * from `pass` where `user_id` = $user_id");
        if(mysqli_num_rows($sel) == 0 ){
      $ins = mysqli_query($con , "insert into `pass` (`user_id` ,`qty`) values('$user_id' , '6')");
        }
        else {
            $qty = 0 ;
            $s = mysqli_fetch_assoc($sel);
            $q = $s['qty'];
            $qty = $qty + $q -1 ;
            $upd = mysqli_query($con , "update `pass` set `qty` = '$qty' where `user_id` = $user_id");
            if($q <= 4){
                print '<h1>تحزير سيتم خروجك من الايميل تبقي لديك عدد '.$qty.'</h1>';
            }
            if($q <= 2){
                print '<script>alert("تبق لك عدد '.$qty.'من المحاولات")</script>';
            }
            if($q == 1){
                $dele = "delete from `pass` where `user_id` = $user_id";
                $d = mysqli_query($con , $dele);
                header("location:logout.php");
            }
        }

    }
}

?>
