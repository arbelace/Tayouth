<?php 
    session_start();
    include('../config/dbcon.php');

    // ADMIN SIDE FUNC 
        function getByID($tbl_users, $id){
            global $con;
            $q = "SELECT * FROM $tbl_users WHERE id='$id' ";
        return $q = mysqli_query($con, $q);
        }

        function getAll($tbl_users){
            global $con;
            $q = "SELECT * FROM $tbl_users";
           return $q = mysqli_query($con, $q);
        }
    // END ADMIN SIDE FUNC 

    // MESSAGE NOTI FUNC 
        function redirect($url, $message){
            $_SESSION['message'] =  $message;
            header('Location:' .$url);
            exit();
        }
    // END MESSAGE NOTI FUNC 
?>