<?php
$con = mysqli_connect("localhost","root","","huungry");
if(!$con)
{
    echo "Not Connected";
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

                <div class="row">
                    <div class="col-12">
                        <h1>Our Products</h1>
                    </div>
                </div>

                <div class="row" style="font-size: larger; margin-bottom: 5%">

                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>ID</b></span></label></div>
                    <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>TITLE</b></span></label></div>
                    <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>BRAND</b></span></label></div>
                    <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>CATEGORY</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>PRICE</b></span></label></div>
                    <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>DESC</b></span></label></div>
                    <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>KEYWORDS</b></span></label></div>

                </div>


                    <?php
                    $catQuery = "select * from products";
                    $catQueryResult = mysqli_query($con,$catQuery);

                    while($row = mysqli_fetch_assoc($catQueryResult))
                    {
                        $pro_id = $row['pro_id'];
                        $pro_title = $row['pro_title'];
                        $pro_brand = $row['pro_brand'];
                        $pro_cat = $row['pro_cat'];
                        $pro_price = $row['pro_price'];
                        $pro_desc = $row['pro_desc'];
                        $pro_keywords = $row['pro_keywords'];
                        echo "<div class=\"row\">
                            <div class=\"col col-1\"><label for=\"fname\"><span>$pro_id</span></label></div>
                            <div class=\"col col-2\"><label for=\"fname\"><span>$pro_title</span></label></div>
                            <div class=\"col col-2\"><label for=\"fname\"><span>$pro_brand</span></label></div>
                            <div class=\"col col-2\"><label for=\"fname\"><span>$pro_cat</span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span>$pro_price</span></label></div>
                            <div class=\"col col-2\"><label for=\"fname\"><span>$pro_desc</span></label></div>
                            <div class=\"col col-2\"><label for=\"fname\"><span>$pro_keywords</span></label></div>
                        </div>";

                        echo "<div class=\"row\">
                                    <div class=\"col col-4\" style='margin-bottom: 2%; margin-top: 2%;'>
                                        <a href=\"index.php?del_pro=$pro_id\" class=\"btn btn-danger\">
                                        <i class=\"fa fa-trash-alt\"></i> Delete
                                        </a>
                                     </div>
                                     
                                     <div class=\"col col-4\" style='margin-bottom: 2%; margin-top: 2%'>
                                        <button>
                                            <a href=\"logout.php\">
                                            <i class=\"fa fa-sign-out-alt\"></i>Edit</a>
                                        </button>
                                     </div>
                             </div>";
                    }
                    ?>
        </div>
    </div>
</main>

<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>

</body>
</html>
