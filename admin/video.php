<?php 
include"../init.php";
$chack = check_admin();
if(!$chack){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body style="background:#fcfcfc;">
  
<br>
<br>
<br>


<div class="container">
        <a href="video_sel.php" class="btn btn-light mb-3"><< Go Back</a>
       
      
        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong> إضافة منشور جديد</strong>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" name="dis" placeholder="Name" required>
                     <!--     <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required> -->
</div>
</div>
<div class="form-row">  <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">الفيديو</label>
                            <input  class="form-control" type="file" name="m" id="image" placeholder="Image">
                        </div>
                  
                    <!-- <button type="submit" class="btn btn-success" name="addback"> Save and back</button> -->
                    
</div>
<button type="submit" class="btn btn-success" name="add"> نشر</button>
</div>
                   
                       
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->


</body>
<?php
if(isset($_POST['add'])){
   $uploaddir = "video/";
   $up = $uploaddir.basename($_FILES['m']['name']); 
   if(move_uploaded_file($_FILES['m']['tmp_name'] , $up)){
    //    $name = $_POST['name'];
       $video = $_FILES['m']['name'];
       $dis =$_POST['dis'];
       date_default_timezone_set('egypt');
$time = date("g : i : s / g /j / Y");


       $ins = mysqli_query($con  , "insert into `video`(`dis` ,`video`,`view`) values ( '$dis','$video','0')");
   }
}



?>

