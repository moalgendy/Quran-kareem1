<?php 
include '../init.php';


$id = $_GET['id'];

?>

<?php
$sql="DELETE FROM `video` WHERE `id`='$id'";
$ret=mysqli_query($con,$sql);
if($ret){
    header("LOCATION: video_sel.php");
}


?>