<?php
//if(!isset($_SESSION['user_email'])){
//    header('location: login.php?not_admin=You are not Admin!');
//}
$con = mysqli_connect("localhost","root","","huungry");
if(isset($_POST['update_brand'])){
    //getting text data from the fields
    $brand_id = $_POST['brand_id'];
    $brand_title = $_POST['brand_title'];
    //getting image from the field
//    $pro_image = $_FILES['pro_image']['name'];
//    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
//
//    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $update_brands = "update brands set brand_title = '$brand_title'
                                        where brand_id='$brand_id'";

    $update_brand = mysqli_query($con, $update_brands);
    if($update_brand){
        header("location: index.php?view_brands");
    }
}
?>