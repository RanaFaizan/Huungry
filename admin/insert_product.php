<?php
$con = mysqli_connect("localhost","root","","huungry");
if(!$con)
{
    echo "Not Connected";
}
if(isset($_POST['insert_pro']))
{

    $title =  $_POST['pro_title'];
    $cat =  $_POST['pro_cat'];
    $brand =  $_POST['pro_brand'];
    $price =  $_POST['pro_price'];
    $desc =  $_POST['pro_desc'];
    $keywords =  $_POST['pro_keywords'];

    //getting image from the field
    $pro_image_name = $_FILES['pro_img']['name'];
    $pro_image_tmp = $_FILES['pro_img']['tmp_name'];
    $pro_image_size = $_FILES['pro_img']['size'];

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

                $q = "insert into products (pro_title,pro_cat,pro_brand,pro_price,pro_desc,pro_img,pro_keywords)
            values('$title','$cat','$brand','$price','$desc','$updated_img_name','$keywords')";
                $insert_pro = mysqli_query($con, $q);
                if ($insert_pro) {
                    //header("location: ".$_SERVER['PHP_SELF']);
                    $response = array(
                        "type" => "success",
                        "message" => "Product uploaded successfully."
                    );
                }


            } else {
                $response = array(
                    "type" => "warning",
                    "message" => "Problem in uploading image files."
                );
            }
        }
    }

    //print_r($_POST);
//
//    $q = "insert into products (pro_title,pro_cat,pro_brand,pro_price,pro_desc,pro_keywords)
//            values('$title','$cat','$brand','$price','$desc','$keywords')";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hunngry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta name="description" content="Food Delivey">
    <meta name="keywords" content="pizza,delivery,food,hungry,huungry,eat,home delivery, food near me">
    <meta name="author" content="Rana Faizan Ur Rahman Khan, Hamza Rehman">

    <link rel="stylesheet" href="../css\style.css">
    <link rel="stylesheet" href="css\navbar.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body class="col col-12">
<header>

</header>
<!--<hr>-->
<main class="homeindex">
    <div class="fullcontainer">
        <div class="container col-10" style="margin-top: 25%;">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-12">
                        <h1>Add New Products</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col col-2">
                        <label for="pro_title"><span>Title:</span></label>
                    </div>
                    <div class="col col-4">
                        <div>
                            <input type="text" class="form-control" id="pro_title" name="pro_title"
                                   placeholder="Enter Product Title" required pattern="([A-Z]|[a-z]|\s){2,}">
                        </div>
                    </div>

                    <div class="col col-2">
                        <label for="pro_cat"><span>Category:</span></label>
                    </div>
                    <div class="col col-4">
                        <div>
                            <select class="form-control" id="pro_cat" name="pro_cat">
                                <option>Select Category</option>
                                <?php
                                $catQuery = "select * from categories";
                                $catQueryResult = mysqli_query($con,$catQuery);

                                while($row = mysqli_fetch_assoc($catQueryResult))
                                {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                                    echo "<option value='$cat_id'>".$row['cat_title']."<option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col col-2">
                        <label for="pro_brand" class="float-md-right"> <span>Brand:</span></label>
                    </div>
                    <div class="col col-4">
                        <div>
                            <select class="form-control" id="pro_brand" name="pro_brand">
                                <option>Select Brand</option>
                                <?php
                                $catQuery = "select * from brands";
                                $catQueryResult = mysqli_query($con,$catQuery);

                                while($row = mysqli_fetch_assoc($catQueryResult))
                                {
                                    echo "<option>".$row['brand_title']."<option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col col-2">
                        <label for="pro_img" class="float-md-right"><span> Image:</span></label>
                    </div>
                    <div class="col col-4">
                        <div>
                            <input class="form-control" type="file" id="pro_img" name="pro_img">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col col-2">
                        <label for="pro_price" class="float-md-right"> <span>Price:</span></label>
                    </div>

                    <div class="col col-4">
                        <div>
                            <input class="form-control" type="text" id="pro_price" name="pro_price" placeholder="Enter Product Price" required pattern="[0-9]+">
                        </div>
                    </div>

                    <div class="col col-2">
                        <label for="pro_kw" class="float-md-right"><span> Keyword:</span></label>
                    </div>

                    <div class="col col-4">
                        <div>
                            <input class="form-control" type="text" id="pro_keywords" name="pro_keywords"
                                   placeholder="Enter Product Keywords"  required pattern="([A-Z]|[a-z]){2,}">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col col-2"><label for="message"><span>Details</span></label></div>
                    <div class="col col-10"><textarea type="file" id="pro_desc" rows="7" name="pro_desc" placeholder="Write something.."></textarea></div>

                </div>

                <div class="row">
                    <div class="col col-12">
                        <button type="submit" name="insert_pro" class="submitBTTN"><i class="fas fa-plus"></i>
                            Insert Now
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</main>

<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function(){
        $('#insert_pro').click(function(){
            var image_name = $('#pro_img').val();
            if(image_name == '')
            {
                alert("Please Select an Image");
                return false;
            }
            else
            {
                var extension = $('#pro_img').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg'] == -1))
                {
                    alert('Invalid File Image');
                    $('#pro_img').val('');
                    return false;
                }
            }
        });
    });
</script>

</body>
</html>