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
    print_r($_POST);

    $q = "insert into products (pro_title,pro_cat,pro_brand,pro_price,pro_desc,pro_keywords)
            values('$title','$cat','$brand','$price','$desc','$keywords')";
    mysqli_query($con,$q);
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
        <div class="container col-10">
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
                                   placeholder="Enter Product Title" required pattern="([A-Z]|[a-z]){2,}">
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
                                $catQuery = "select * from brand";
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
                            <input class="form-control" type="file" id="pro_image" name="pro_image">
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
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>

</body>
</html>