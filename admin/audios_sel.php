<?php 
include '../init.php';
$chack = check_admin();
if(!$chack){
    header("location: login.php");
}
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
    <title>Document</title>
</head>
<body>




<a href="audios.php" class="btn btn-light mb-3" style="margin-top: 30px; margin-left: 30px;"><< Go Back</a>
<a href="index.php" class="btn btn-light mb-3" style="margin-top: 30px; margin-left: 30px;">Go to admin panal >></a>

<?php
if(isset($_POST['addd'])){
    $ser = $_POST['name'];
    $sel = mysqli_query($con , "select * from `audios` where `name` like '%$ser%'");
     if(empty($ser)){
        print 'نرجو التحقق من اسم السوره';
        die();
    }

    while($s = mysqli_fetch_assoc($sel))
    { print' <h1>'.$s['name'].'';
        // print '<br>';
print '       
<audio style="width:500px; height:200px;" src="audios/'.$s['audios'].'" controls="">';

    }
    }
   
?>
<form action="" method="post">
<input type="text" name="name" value=""  placeholder="ابحث" class="input-group-text" style=" margin: 15px 46%;border-radius: 15px;width: 250px; padding-left: 10px;">
<input type="submit"  value="ابحث" class="btn btn-primary"  name="addd"  style="width: 60px; margin: 0 52%;" >
</form>

<table  border="" class="table table-striped">
<tr>
    <td>id</td>
<td>الاسم</td>
<td>الصوت</td>
<td>التعديل</td>
<td>الحذف</td>
</tr>

<?php
$sel = mysqli_query($con, "select * from `audios`");
while($ret = mysqli_fetch_assoc($sel)){
print '<td>'.$ret['id'].'</td>
<td>'.$ret['name'].'</td>
<td><audio style="width:500px; height:200px;" src="audios/'.$ret['audios'].'" controls=""></td>';


?>
    <td><a type="button" href="deleaud.php?id=<?php echo $ret['id']?>" class="btn btn-danger">حذف</a></td>
    <td><a type="button" href="upaud.php?id=<?php echo $ret['id']?>" class="btn btn-danger">تعديل </a></td></tr>

  
</body>
</html>
<?php } 