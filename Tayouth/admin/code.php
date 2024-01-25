<?php
    // session_start();
    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    // UPDATE USERS FUNCTIONS      
        if (isset($_POST['update_user_btn'])) {
            //FETCH all Values
            $tbl_user_id = $_POST['tbl_user_id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $role_as = $_POST['role_as'];
            
            $update_query = "UPDATE tbl_users SET 
                name='$name', 
                email='$email', 
                phone='$phone', 
                password='$password',
                role_as='$role_as'
                WHERE id='$tbl_user_id' 
            ";
            $update_query_run = mysqli_query($con, $update_query);

            if ($update_query_run){
                redirect("all_users.php?id=$tbl_user_id", "User Info Updated Successfully!");
            }else{
                redirect("all_users.php?id=$tbl_user_id", "Something Went Wrong!");
            }
        }
    // UPDATE USERS FUNCTIONS

    // DELETE USER FUNCTIONS
        else if(isset($_POST['delete_user_btn'])){
            $user_table = mysqli_real_escape_string($con, $_POST['user_table']);

            $tbl_user_query = "SELECT * FROM tbl_users WHERE id='$user_table' ";
            $tbl_user_query_run = mysqli_query($con, $tbl_user_query);
            $tbl_user_data = mysqli_fetch_array($tbl_user_query_run);

            $delete_query = "DELETE FROM tbl_users WHERE id='$user_table' ";
            $delete_query_run = mysqli_query($con, $delete_query);

            if($delete_query_run){
                echo 200;
            }else{
                echo 500;
            }
        }
    // DELETE USER FUNCTIONS
   
    // ADD BLOG FUNCTIONS
    
    // ADD BLOG FUNCTIONS
    else{
        header('Location: ../index.php');
    }
?>