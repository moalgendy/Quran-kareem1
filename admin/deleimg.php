<?php 
include '../init.php';


$id = $_GET['id'];

?>

<?php
$sql="DELETE FROM `image` WHERE `id`='$id'";
$ret=mysqli_query($con,$sql);
if($ret){
    header("LOCATION: img_sel.php");
}


?>