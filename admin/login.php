<?php 
include "../init.php";

?>
<?php 
$chack = check_admin();
if($chack == true){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../back-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../back-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../back-assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="styl.css">
</head>
<body>

<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
     <center> <p style="font-size: 1rem; color:crimson;"></p></center>

			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password"  required name="password">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.html">Register Here</a>.</p>
		</form>
	</div>


<!-- jQuery -->
<script src="../back-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../back-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../back-assets/dist/js/adminlte.min.js"></script>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sel = mysqli_query($con , "SELECT  * from `admin` where `email` = '$email' and `password` = '$password' ; ");
     $row  = mysqli_num_rows($sel);
     if($row == 0){

     }
     else{
        $a = mysqli_fetch_assoc($sel); 
         $_SESSION['is_logged']= true;
        $_SESSION['is_admin']= true;
        $_SESSION['namee']  = $a['name'];
        $_SESSION['email'] = $a['email'];
        $_SESSION['password'] = $a['password']; 
        if($_SESSION['password'] == true){
        header("location: index.php");
     }}
}
?>


<?php 
?>