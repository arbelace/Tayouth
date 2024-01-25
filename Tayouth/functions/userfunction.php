<?php 
    // session_start(); 
    include('config/dbcon.php');
    // USER SIDE FUNC 
    function getByAccId(){
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];
        $q = "SELECT * FROM tbl_users WHERE id= '$userId' ";
        return $q = mysqli_query($con, $q);
    }
    
    // END USER SIDE FUNC 
    
    // connected sa auth
    function getDonations(){
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];
        $q = "SELECT c .id as cid, p.id as pid, p.name, a.amount 
                FROM tbl_donation c, tbl_users p WHERE c.a.amount = p.id AND c.user_id='$userId' ORDER BY c.id DESC ";
        return $q = mysqli_query($con, $q); # recode $q if mag throw ng error
    }

    function redirect($url, $message){
        $_SESSION['message'] =  $message;
        header('Location:' .$url);
        exit();
    }
?>