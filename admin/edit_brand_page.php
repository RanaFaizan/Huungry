<?php
$con = mysqli_connect("localhost","root","","huungry");
$brand_id = $_GET['edit_brand_page'];
$edit_brand_page = "select * from brands where brand_id='$brand_id'";
$rs = $con->query($edit_brand_page);
$r = $rs->fetch_assoc();
$con->close();

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
            <form action="edit_brand.php" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-12">
                        <h1>Edit Catogry</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col col-2">
                        <label for="pro_title"><span>Title:</span></label>
                    </div>
                    <div class="col col-4">
                        <div>
                            <input type="text" class="form-control" id="brand_title" name="brand_title"
                                   value="<?php echo $r ["brand_title"]?>" required pattern="([A-Z]|[a-z]|\s){2,}">
                        </div>
                        <input type="hidden" name="brand_id"
                               value="<?php echo $r ["brand_id"]?>">
                    </div>
                </div>
                    <div class="row">
                        <div class="col col-2">
                            <label for="brand_img" class="float-md-right"><span> Image:</span></label>
                        </div>
                        <div class="col col-4">
                            <div>
                                <input class="form-control" type="file" id="brand_img" name="brand_img">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-12">
                            <button type="submit" name="update_brand" class="submitBTTN"><i class="far fa-paper-plane"></i>
                                Update Now
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