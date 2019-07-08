<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['del_cus'])){
    $del_id = $_GET['del_cus'];
    $del_cus = "delete from customers where cus_id='$del_id'";
    $run_del = mysqli_query($con,$del_cus);
    if($run_del){
        header('location: index.php?view_customers');
    }
}