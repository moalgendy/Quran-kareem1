<?php
include '../init.php';
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];
?>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mark Zuckerberg | Facebook</title>
    <link rel="icon" type="image/png" href="./images/favicon.png" />
    <link rel="stylesheet" href="css/stylese.css" />
<?php 


$sel = mysqli_query($con , "select * from `comment` where `vid_id` = $id ");
while ($se = mysqli_fetch_assoc($sel)) {
    $user = $se['us_id'];
    $ss = mysqli_query($con , "select * from `user` where `id` = $user");
    $s = mysqli_fetch_assoc($ss);
    print '

      <div class="comments_frind-comment frind-comment">
      <img src="userimg/'.$s['img'].'" class="frind-comment_pic" alt="">
      <div class="frind-comment_comment comment">
        <a href="#" class="comment_author">'.$s['name'].'</a>
        <span class="comment_content">
           '.$se['commen'].'
        </span>
        <div class="comment_reactions reactions">
        
        </div>
        <div class="comment_links links">
       
        </div>
        <div class="comment_replies replies"><i class="replies_emoji"></i>
        </div>
      </div>
    
      </div>
    </div>
    
    
    ';
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
    
   

 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="immg/18.jpg">
    <!-- <link rel="stylesheet" href="stylee.css"> -->
    <title>Document</title>
</head>

<style>
  body
  {
    background-color: #111;
  }
</style>


<form class="d-flex" action="" method="post">
      <center>  <input  style="  width: 50%;
    height:60px ;
    background-origin: padding-box;
    border-radius: 40px;
    margin-top:50px ;
    margin-bottom:60px;
" type="search" name="name" placeholder="comment......." aria-label="Search">
        <button  style="  width: 90px; border-radius: 10px;  height:30px ; " class="btn btn-outline-success" name="add" type="submit">send </button>
      </form>
 
  <?php 
      if(isset($_POST['add'])){
          $com = $_POST['name'];
      
           if(empty($com)){
            print 'يرجي كتابه كومنت';
            die();
          }
          $in = mysqli_query($con , "INSERT into `comment`(`us_id`,`vid_id`,`commen`) values ('$user_id','$id','$com')  ");
          if($in == true){
           echo ' <meta http-equiv="refresh" content="0.1">';
          }
       
   
      }
     
    
      
      
       $sel ="select * from `comment` where `commen` like '%مكرم%' or `commen` like '%كرم%'  and `vid_id` = '$id' and `us_id` =$user_id ";
    $c = mysqli_query($con , $sel);
      if($c){ 
     
    while($s = mysqli_fetch_assoc($c)){

      
      $id_u = $s['us_id'];
      $come = $s['commen'];
      $w = mysqli_query($con , "select * from `user` where `id` = $id_u");
      $a = mysqli_fetch_assoc($w);
      $email = $a['email'];
      $name = $a['name'];
      $se = mysqli_query($con ,"select * from `ban` where `user_id` = $id_u");
      $sq = mysqli_fetch_assoc($se);
      $comm = $sq['comment'];
      if(mysqli_num_rows($se) == 0){
    $ins =mysqli_query($con , "INSERT into `ban` (`user_id` ,`name`,`email`,`comment`) values('$id_u' ,'$name','$email','$come')");
    $de = "DELETE from `comment`   where `us_id` ='$user_id' and `commen` = '$comm'   ";
    $d = mysqli_query($con , $de);

    // header("location:logout.php?id=$id_u");


   
      }
      
      if(mysqli_num_rows($se) == 1){
      
        $de = "delete from `comment`   where `us_id` =$user_id  and `commen` ='$comm' ";
        $d = mysqli_query($con , $de);
        if($de){
           header("location:logout.php?id=$id_u");

        }

      }

      

      }
    
    }
    ?>
<script>
//         $('#like').click(function(){
//         $.ajax({
//                 method: "POST",
//                 url: "{% url 'home:listar' %}",
//                 data: {'slug': $(this).attr('name'), 'csrfmiddlewaretoken': '{{ csrf_token }}'},
//                 dataType: "json",
//                 success: function(response) {
//                         alert(response.message);
//                         alert(' likes count is now ' + response.likes_count);
//               },
//                   error: function(rs, e) {
//                         alert(rs.responseText);
//             }
//       }); 
// })
</script>