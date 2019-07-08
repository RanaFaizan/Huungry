<?php
session_start();
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
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

    <link rel="stylesheet" href="../css\style.css">
    <link rel="stylesheet" href="css\navbar.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body class="col col-12">
<header>
    <nav style="margin-top: -1%;">
        <div>
            <a href="index.php"><img src="../images/logo1.png" alt="Home"></a>
        </div>

        <ul>
             <li>
                 <div class="dropdown">
                     <button class="dropbtn">
                         Products
                     </button>
                     <div class="dropdown-content">
                         <a href="index.php?insert_product">Insert New Product</a>
                         <a href="index.php?view_products">View All Products</a>
                     </div>
                 </div>
             </li>

            <li>
                <div class="dropdown">
                    <button class="dropbtn">
                        Categories
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?insert_category">Insert New Category</a>
                        <a href="index.php?view_categories">View All Categories</a>
                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown">
                    <button class="dropbtn">
                        Brands
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?insert_brand">Insert New Brand</a>
                        <a href="index.php?view_brands">View All Brand</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">
                        Customers
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?view_customers">View All Customers</a>
                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown">
                    <button class="dropbtn">
                        Orders
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?view_orders">View All Orders</a>
                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown">
                    <button class="dropbtn">
                        Payments
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?view_payments">View All Payments</a>
                    </div>
                </div>
            </li>

            <li>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="logout.php">
                            <i class="fa fa-sign-out-alt"></i> Admin logout</a>
                    </button>
                </div>
            </li>
        </ul>
    </nav>
</header>
<!--<hr>-->
<main class="homeindex">
    <div id="content">
        <div>
            <h2><?php echo @$_GET['logged_in']?></h2>
            <?php
            if(isset($_GET['insert_product'])){
                include ('insert_product.php');
            }
            else if(isset($_GET['view_products'])){
                include ('view_products.php');
            }
            else if(isset($_GET['edit_pro'])){
                include ('edit_pro.php');
            }
            else if(isset($_GET['edit_pro_page'])){
                include ('edit_pro_page.php');
            }
            else if(isset($_GET['del_pro'])){
                include ('del_pro.php');
            }
            else if(isset($_GET['view_categories'])){
                include ('view_categories.php');
            }
            else if(isset($_GET['insert_category'])){
                include ('insert_category.php');
            }
            else if(isset($_GET['edit_cat'])){
                include ('edit_cat.php');
            }
            else if(isset($_GET['edit_cat_page'])){
                include ('edit_cat_page.php');
            }
            else if(isset($_GET['del_cat'])){
                include ('del_cat.php');
            }
            else if(isset($_GET['view_brands'])) {
                include('view_brands.php');
            }
            else if(isset($_GET['insert_brand'])) {
                include('insert_brand.php');
            }
            else if(isset($_GET['edit_brand'])) {
                include('edit_brand.php');
            }
            else if(isset($_GET['edit_brand_page'])) {
                include('edit_brand_page.php');
            }
            else if(isset($_GET['del_brand'])) {
                include('del_brand.php');
            }
            else if(isset($_GET['view_customers'])){
                include ('view_customers.php');
            }
            else if(isset($_GET['del_cus'])){
                include ('del_cus.php');
            }
            ?>
        </div>
    </div>
</main>
<!--<hr>-->
<footer>

    <div class="row">

        <div class="hide col-3 column">

            <ul>
                <a href="index.php"><img class="logo" src="../images/logo.png" alt="Home"></a>
            </ul>

        </div>

        <div class="col-3 column">
            <a href="../about.php"><h2>About Us</h2></a>
            <div>
                <address>
                    Developed By<br>
                    Rana Faizan Ur Rahman Khan,<br>
                    Hamza Rehman<br>
                </address>
            </div>

        </div>

        <div class="col-3 column">

            <a  href="../contact.php"><h2>Contact Us</h2></a>
            <div>
                <address>
                    Email: faizi_733@ucp.edu.pk<br>
                    Phone: 090078601
                </address>
            </div>

        </div>

        <div class="col-3 column">

            <a href="../about.php"><h2>Stay Connected</h2></a>
            <div class="icons">
                <a class="icon1" href="../about.php"><i class="fab fa-facebook-square"></i></a>
                <a class="icon2" href="../about.php"><i class="fab fa-twitter"></i></a>
                <a class="icon3" href="../about.php"><i class="fab fa-youtube"></i></a>
                <a class="icon4" href="../about.php"><i class="fab fa-instagram"></i></a>
            </div>

        </div>

    </div>

</footer>

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