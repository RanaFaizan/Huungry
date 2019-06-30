<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Food Delivey">
    <meta name="keywords" content="huungry signup, huungry register, huungry new account, huungryregistration">
    <meta name="author" content="Rana Faizan Ur Rahman Khan, Hamza Rehman">

    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\form.css">
    <link rel="stylesheet" href="css\coloumns.css">
    <link rel="stylesheet" href="css\responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body class="col col-12">
<header>
    <nav>
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
<main class="rform">
    <div class="fullcontainer">
        <div class="container col-10">
            <form action="/action_page.php">

                <div class="row">
                    <div class="col-12">
                        <h1>Sign Up</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col col-2"><label for="fname"><span>First Name</span></label></div>
                    <div class="col col-4"><input type="text" id="fname" name="firstname" placeholder="Your name.." required pattern="([A-Z]|[a-z]){2,}"></div>

                    <div class="col col-2"><label for="lname"><span>Last Name</span></label></div>
                    <div class="col col-4"><input type="text" id="lname" name="lastname" placeholder="Your last name.." required pattern="([A-Z]|[a-z]){2,}"></div>

                </div>

                <div class="row">

                    <div class="col col-2"><label for="email"><span>Email</span></label></div>
                    <div class="col col-4"><input type="text" id="email" name="email" placeholder="Your email address.." required pattern="[a-z]+(\w|\.|)?(([a-z]|[0-9])*)?@(([a-z]{3,7}\.com)|([a-z]{3,5}\.[^com]{3,5}\.pk))"></div>

                    <div class="col col-2"><label for="pnum"><span>Phone Number</span></label></div>
                    <div class="col col-4"><input type="text" id="pnum" name="phone" placeholder="Your phone number.." required pattern="(((03)[0-4][0-9]\d[0-9]{6})|((03)[0-4][0-9]-[0-9]{7})|(\+(923)[0-4][0-9]\d[0-9]{6})|(\+(923)[0-4][0-9]-[0-9]{7}))"></div>

                </div>

                <div class="row">

                    <div class="col col-2"><label for="gender"><span>Gender</span></label></div>

                    <div  class="col col-4">
                        <select id="gender" class="selection" name="city">
                            <option value="lahore">Male</option>
                            <option value="lahore">Female</option>
                            <option value="lahore">Un-specified</option>
                        </select>
                    </div>

                    <div class="col col-2"><label for="birth"><span>Date of Birth</span></label></div>
                    <div class="col col-4"><input type="date" id="birth" name="birth"></div>

                </div>

                <div class="row">

                    <div class="col col-2"><label for="city"><span>City</span></label></div>

                    <div  class="col col-10">
                        <select id="city" class="selection" name="city">
                            <option value="lahore">Lahore</option>
                            <option value="lahore">Karachi</option>
                            <option value="lahore">Peshawar</option>
                            <option value="lahore">Queta</option>
                            <option value="lahore">Islamabad</option>
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col col-2"><label for="pass"><span>Password</span></label></div>
                    <div class="col col-4"><input type="password" id="pass" name="email" placeholder="Your password.." required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$"></div>

                    <div class="col col-2"><label for="cpass"><span>Confirm</span></label></div>
                    <div class="col col-4"><input type="password" id="cpass" name="cpass" placeholder="Confirm password.." required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$"></div>

                </div>

                <div class="row">
                    <div class="col col-2">
                        <input class="submitBTTN" type="submit" value="Sign Up">
                    </div>

                    <div class="col col-2">
                        <input class="submitBTTN" type="button" value="Login" onclick="window.location.href='login.html'">
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
</body>
</html>