<?php
session_start();
require_once 'db_connection.php';
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:index.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login To Hunngry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Food Delivey">
    <meta name="keywords" content="huungry login, huungry sign in,huungry login page, huungry sign in page">
    <meta name="author" content="Rana Faizan Ur Rahman Khan, Hamza Rehman">

    <link rel="stylesheet" href="../css\style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="col col-12">
<header>
    <nav>
        <div>
            <a href="index.php"><img src="../images/logo1.png" alt="Home"></a>
        </div>

        <ul>
            <li><a href="../about.php">About</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../login.php">Login</a></li>
            <li><a href="../register.php">Register</a></li>
            <li><a href="../forget-password.php">Forget-Password</a></li>
            <li><div class="search_bar"><input type="text" name="search" placeholder="Search.."></div></li>
        </ul>
    </nav>
</header>
<!--<hr>-->
<main class="cform">
    <div class="fullcontainer">
        <div class="container col-10">
            <form action="login.php" method="post"">

            <div class="row">
                <div class="col-12">
                    <h1>Admin Login</h1>
                    <div class="col col-12" style="padding-left: 35%;padding-bottom: 1%; color: #b21f2d">
                        <b>
                            <h3>
                                <?php echo $error_msg;?>
                            </h3>
                        </b>
                    </div>
                </div>
            </div>

            <div class="col col-12" style="padding-left: 35%;padding-bottom: 1%; color: #b21f2d">
                <b>
                    <h3 class="text-danger"><?php echo @$_GET['not_admin']?></h3>
                    <h3 class="text-primary"><?php echo @$_GET['logged_out']?></h3>
                </b>
            </div>

            <div class="row">

                <div class="col col-3"><label for="email"><span>Email</span></label></div>
                <div class="col col-7"><input type="text" id="user_email" name="user_email" value="<?php echo @$_COOKIE['user_email']?>" placeholder="Your email address.." required pattern="[a-z]+(\w|\.|)?(([a-z]|[0-9])*)?@(([a-z]{3,7}\.com)|([a-z]{3,5}\.[^com]{3,5}\.pk))"></div>

                <div class="col col-3"><label for="pass"><span>Password</span></label></div>
                <div class="col col-7"><input type="password" id="user_pass" name="user_pass" value="<?php echo @$_COOKIE['user_pass']?>" placeholder="Your passwordr.." required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$"></div>

            </div>

            <div class="col col-12" style="padding-left: 34%;padding-bottom: 2%">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember" style="color: #721c24"><b>Remember me</b></label>
            </div>

            <div class="row">
                <div class="col col-2">
                    <input class="submitBTTN" type="submit" name="login" value="Sign In">
                </div>

                <div class="col col-2">
                    <input class="submitBTTN" type="button" value="Forgot Password" onclick="window.location.href='forget-password.html'">
                </div>
            </div>

            </form>
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
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>