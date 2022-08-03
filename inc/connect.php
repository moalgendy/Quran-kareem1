<?php 
$con  = mysqli_connect("localhost" , "root" ,"" , "dosry");

// $db_name = 'mysql:host=localhost;dbname=dosry';
// $username='root';
// $password='';

// $con = new PDO($db_name , $username , $password);

if(!$con) {
    print "error connect";
}

?>