<?php 
include '../init.php';
$chack = check_admin();
if(!$chack){
    header("location: login.php");
}
?>

<a href="video.php" class="btn btn-light mb-3" style="margin-top: 20px; margin-left: 20px;"><< Go Back</a>
<a href="index.php" class="btn btn-light mb-3" style="margin-top: 20px; margin-left: 20px;">Go to admin panal >></a>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
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
    <title>edit</title>
</head>
<body>
<table  class="table table-striped">
<tr>
<td>id</td>
<td>الاسم</td>
<td>الفيديو</td>
<td>التعديل</td>
<td>الحذف</td>
</tr>

<?php
$sel = mysqli_query($con, "select * from `video`");
while($ret = mysqli_fetch_assoc($sel)){
print '<td>'.$ret['id'].'</td>
<td>'.$ret['dis'].'</td>
<td><video style="width:300px; height:200px;" src="video/'.$ret['video'].'" controls=""></video></td>';


?>
    <td><a type="button" href="dele.php?id=<?php echo $ret['id']?>" class="btn btn-danger">حذف</a></td>
    <td><a type="button" href="upv.php?id=<?php echo $ret['id']?>" class="btn btn-danger">تعديل </a></td></tr>

    
</body>
</html>
<?php } 