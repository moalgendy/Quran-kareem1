<?php

include '../init.php';
$id = $_GET['id'];

$user_id = $_SESSION['user_id'];

?>
<?php
 $s = mysqli_query($con , "select * from `like` where `us_id` = '$user_id' and `vid_id` = $id ");
if(mysqli_num_rows($s) == 1) {

    $del = "DELETE  from `like` where `us_id` = '$user_id' and `vid_id` = $id";
    $sel = mysqli_query($con , $del);
   
  header("location: video.php?id=$user_id");


}

elseif(mysqli_num_rows($s) <= 0){
    $ins = mysqli_query($con , "INSERT into `like`(`vid_id` ,`us_id`,`qty`) VALUES('$id' , '$user_id','1')");
   if($ins){
   header("location: video.php?id=$user_id");
}}



?>
