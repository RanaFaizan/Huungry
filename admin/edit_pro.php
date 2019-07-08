<?php
//if(!isset($_SESSION['user_email'])){
//    header('location: login.php?not_admin=You are not Admin!');
//}
$con = mysqli_connect("localhost","root","","huungry");
if(isset($_POST['update_pro'])){
    //getting text data from the fields
    $pro_id = $_POST['pro_id'];
    $pro_title = $_POST['pro_title'];
    $pro_cat = $_POST['pro_cat'];
    $pro_brand = $_POST['pro_brand'];
    $pro_price = $_POST['pro_price'];
    $pro_desc = $_POST['pro_desc'];
    $pro_keywords = $_POST['pro_keywords'];
    //getting image from the field
//    $pro_image = $_FILES['pro_image']['name'];
//    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
//
//    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    $update_product = "update products set pro_cat = '$pro_cat', 
                                        pro_brand = '$pro_brand',
                                        pro_title = '$pro_title' ,
                                        pro_price = '$pro_price',
                                        pro_desc = '$pro_desc',
                                        pro_keywords = '$pro_keywords' 
                                        where pro_id='$pro_id'";

    $update_pro = mysqli_query($con, $update_product);
    if($update_pro){
        header("location: index.php?view_products");
    }
}
?>