<?php

include'../init.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $se =mysqli_query($con , "select * from `video` where `id` = $id");
    $s = mysqli_fetch_assoc($se);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
    <title> admin page</title>
</head>




<div class="form" style=" margin-top:100px; ";  >
<form  action="" method="post" enctype="multipart/form-data" >

name:<input style="margin-bottom:20px;" type="text" name="name" value="<?=$s['name']?>"  class="input-group-text"><br >

image:<input style="margin-bottom:20px;" type="file" name="m"value="<?=$row['image']?>" class="input-group-text" ><br>
<input type="submit"  value="add" class="btn btn-primary"  name="add"  style="width: 200px;" >
</div>
</form> 
<?Php 
if(isset($_POST['add'])){ 
    $name = $_POST['name'];
     $upname = mysqli_query($con , "update `video` set `name` = '$name' where `id` = '$id'");
     if($upname){
         header("location: video_sel.php");
     }
    $up = 'video/';
    $tp = $up.basename($_FILES['m']['name']);
    if(move_uploaded_file($_FILES['m']['tmp_name'],$tp)){
        $video = $_FILES['m']['name'];
        $upvideo = mysqli_query($con , "update `video` set `video` = '$video' where `id` = '$id'");
        if($upvideo){
         header("location: video_sel.php");
        }
       
    }
    $up = 'video/';
    $tp = $up.basename($_FILES['m']['name']);
    if(move_uploaded_file($_FILES['m']['tmp_name'],$tp)){
        $namee = $_POST['name'];
        $videoo = $_FILES['m']['name'];
        $up = mysqli_query($con , "update `video` set `name` = $namee , `video` = $videoo where `id` = '$id'");
        

    }
}



}

