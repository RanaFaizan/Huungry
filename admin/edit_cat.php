<?php
//if(!isset($_SESSION['user_email'])){
//    header('location: login.php?not_admin=You are not Admin!');
//}
$con = mysqli_connect("localhost","root","","huungry");
if(isset($_POST['update_cat'])){
    //getting text data from the fields
    $cat_id = $_POST['cat_id'];
    $cat_title = $_POST['cat_title'];
    //getting image from the field
//    $pro_image = $_FILES['pro_image']['name'];
//    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
//
//    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $update_category = "update categories set cat_title = '$cat_title'
                                        where cat_id='$cat_id'";

    $update_cat = mysqli_query($con, $update_category);
    if($update_cat){
        header("location: index.php?view_categories");
    }
}
?>