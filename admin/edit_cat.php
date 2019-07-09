<?php
//if(!isset($_SESSION['user_email'])){
//    header('location: login.php?not_admin=You are not Admin!');
//}
$con = mysqli_connect("localhost","root","","huungry");
if(isset($_POST['update_cat'])){
    //getting text data from the fields
    $cat_id = $_POST['cat_id'];
    $cat_title = $_POST['cat_title'];


    $pro_image_name = $_FILES['cat_img']['name'];
    $pro_image_tmp = $_FILES['cat_img']['tmp_name'];
    $pro_image_size = $_FILES['cat_img']['size'];
    //getting image from the field
//    $pro_image = $_FILES['pro_image']['name'];
//    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
//
//    move_uploaded_file($pro_image_tmp,"product_images/$pro_image");

    if (file_exists($pro_image_tmp))
    {
        $image_info = getimagesize($pro_image_tmp);
        $width = $image_info[0];
        $height = $image_info[1];
        $target_directory = "product_images/";
        $allowed_image_extension = array("png", "jpg", "jpeg");

        // Get image file extension
        $image_extension = pathinfo($pro_image_name, PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        // Validate file input to check if is with valid extension
        if (!in_array($image_extension, $allowed_image_extension)) {
            $response = array(
                "type" => "warning",
                "message" => "Upload valid images. Only PNG and JPEG are allowed."
            );
            //echo $result;
        }    // Validate image file size
        else if ($pro_image_size > 2000000) {
            $response = array(
                "type" => "warning",
                "message" => "Image size exceeds 2MB"
            );
        }    // Validate image file dimension
        else if ($width > "1920" || $height > "1080") {
            $response = array(
                "type" => "warning",
                "message" => "Image dimension should be within 1000X800"
            );
        } else {
            $updated_img_name = "user_" . time() . "_" . $pro_image_name;
            echo $updated_img_name;
            $target = $target_directory . $updated_img_name;
            if (move_uploaded_file($pro_image_tmp, $target)) {

                $q = "update categories set cat_title = '$cat_title',
                                            cat_img  = '$updated_img_name'
                                        where cat_id='$cat_id'";
                $insert_pro = mysqli_query($con, $q);
                if ($insert_pro) {
                    header("location: index.php?view_categories");
                }


            } else {
                $response = array(
                    "type" => "warning",
                    "message" => "Problem in uploading image files."
                );
            }
        }
    }

}
?>