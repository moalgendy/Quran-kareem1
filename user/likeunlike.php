<?php

include "../init.php";
$vi = $_SESSION['vi_id'];
$user_id = $_SESSION['user_id'];


$vi = $_POST['postid'];
$type = $_POST['type'];

// Check entry within table
$query = "SELECT COUNT(*) AS cntpost FROM like_unlike WHERE postid=".$vi." and userid=".$user_id;

$result = mysqli_query($con,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];



// $type = 0;
if($count == 0){
    $insertquery = "INSERT INTO like_unlike(userid,postid,type) values(".$user_id.",".$vi.",".$type.")";
    mysqli_query($con,$insertquery);
$type = 1;

}

if($count > 0 ){
    $d = mysqli_query($con , "delete from `like_unlike` where `userid` = $user_id ");
    $type = 0 ;
}


// count numbers of like and unlike in post
$query = "SELECT COUNT(*) AS cntLike FROM like_unlike WHERE type=1 and postid=".$vi;
$result = mysqli_query($con,$query);
$fetchlikes = mysqli_fetch_array($result);
$totalLikes = $fetchlikes['cntLike'];

$query = "SELECT COUNT(*) AS cntUnlike FROM like_unlike WHERE type=0 and postid=".$vi;
$result = mysqli_query($con,$query);
$fetchunlikes = mysqli_fetch_array($result);
$totalUnlikes = $fetchunlikes['cntUnlike'];


$return_arr = array("likes"=>$totalLikes,"unlikes"=>$totalUnlikes , 'type' => $type);

echo json_encode($return_arr);