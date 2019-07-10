<?php

require_once "db_connection.php";
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

    <link rel="stylesheet" href="css\style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="col col-12">
<header>
    <nav style="margin-left: -1.3%">
        <div>
            <a href="index.php"><img src="images/logo1.png" alt="Home"></a>
        </div>

        <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="forget-password.php">Forget-Password</a></li>
            <li><div class="search_bar"><input class="search_b" type="text" name="search" placeholder="Search.."></div></li>
        </ul>
    </nav>
</header>
<!--<hr>-->
<main class="homeindex">
    <div class="fullcontainer">

        <div class="col col-12" style="margin-top: 4.8%;margin-bottom: -55%;">
            <img class="mySlides" src="images/slider1.jpg">
            <img class="mySlides" src="images/slider2.jpg">
            <img class="mySlides" src="images/slider3.jpg">
            <img class="mySlides" src="images/slider4.jpg">
        </div>

        <div class="container col-10" style="margin-top: 25%;">



            <div class="row">
                <div class="col-12">
                    <h1>Our Products</h1>
                </div>
            </div>

            <div class="row" style="font-size: larger; margin-bottom: 5%">

                <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>IMAGE</b></span></label></div>
                <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>TITLE</b></span></label></div>
                <div class="col col-3"><label for="fname"><span style="color: #721c24"><b>BRAND</b></span></label></div>
                <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>PRICE</b></span></label></div>

            </div>


            <?php
            $catQuery = "select * from products";
            $catQueryResult = mysqli_query($con,$catQuery);


            while($row = mysqli_fetch_assoc($catQueryResult))
            {
                $pro_title = $row['pro_title'];
                $pro_brand = $row['pro_brand'];
                $pro_price = $row['pro_price'];
                $pro_img = $row['pro_img'];
                echo "<hr>";
                echo "<div class=\"row\">
                            
                            <div class=\"col col - 3\"><label for=\"fname\"><img src='admin/product_images/$pro_img' width='80' height='80'></label></div>
                            <div class=\"col col-3\"  style='margin-top: 2%;'><label for=\"fname\"><span>$pro_title</span></label></div>
                            <div class=\"col col-3\"  style='margin-top: 2%;'><label for=\"fname\"><span>$pro_brand</span></label></div>
                            <div class=\"col col-2\"  style='margin-top: 2%;'><label for=\"fname\"><span>$pro_price</span></label></div>
                        </div>";
            }
            echo "<hr>";
            ?>
        </div>
    </div>
</main>



<div id="content">
    <div>
        <h2><?php echo @$_GET['logged_in']?></h2>
        <?php
        if(isset($_GET['index2'])){
            include ('index2.php');
        }
        ?>
    </div>
</div>

<!--<hr>-->
<footer>

    <div class="row">

        <div class="hide col-3 column">

            <ul>
                <a href="index.php"><img class="logo" src="images/logo.png" alt="Home"></a>
            </ul>

        </div>

        <div class="col-3 column">
            <a href="about.php"><h2>About Us</h2></a>
            <div>
                <address>
                    Developed By<br>
                    Rana Faizan Ur Rahman Khan,<br>
                    Hamza Rehman<br>
                </address>
            </div>

        </div>

        <div class="col-3 column">

            <a  href="contact.php"><h2>Contact Us</h2></a>
            <div>
                <address>
                    Email: faizi_733@ucp.edu.pk<br>
                    Phone: 090078601
                </address>
            </div>

        </div>

        <div class="col-3 column">

            <a href="about.php"><h2>Stay Connected</h2></a>
            <div class="icons">
                <a class="icon1" href="about.php"><i class="fab fa-facebook-square"></i></a>
                <a class="icon2" href="about.php"><i class="fab fa-twitter"></i></a>
                <a class="icon3" href="about.php"><i class="fab fa-youtube"></i></a>
                <a class="icon4" href="about.php"><i class="fab fa-instagram"></i></a>
            </div>

        </div>

    </div>

</footer>
<script src="js/slider.js"></script>
</body>
</html>