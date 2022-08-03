<?php 
include '../init.php';


$id = $_GET['id'];

?>

<?php
$sql="DELETE FROM `audios` WHERE `id`='$id'";
$ret=mysqli_query($con,$sql);
if($ret){
    header("LOCATION: audios_sel.php");
}


?>