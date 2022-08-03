<?php 

function check_admin(){
    if(isset($_SESSION['is_logged']) && $_SESSION['is_admin'] == true){
    return true; 
    }
    return false ; 
}

function chack_user(){
    if(isset($_SESSION['user_is_logged'] )==true){
        return true ;
    }
    return false ;
}
function like(){
    if(isset($_SESSION['like']) == true){
        return true;
    }
    return false;
}


function up_pass(){
    if(isset($_SESSION['password']) && $_SESSION['pass'] == true){
        return true ;
    }
    return false ;
}

?>