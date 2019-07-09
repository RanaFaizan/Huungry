<?php
$con = mysqli_connect("localhost","root","","huungry");
if(!$con)
{
    echo "Not Connected";
}
if(isset($_POST['send_message']))
{
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $city =  $_POST['city'];
    $cus_message =  $_POST['message'];
    print_r($_POST);

    $q = "insert into contactus (first_name,last_name,email,phone,city,message)
            values('$fname','$lname','$email','$phone','$city','$cus_message')";
    mysqli_query($con,$q);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Food Delivey">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
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
<main>
    <div class="fullcontainer">
        <div class="container col-10">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-12">
                        <h1>Contact US</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col col-2"><label for="fname"><span>First Name</span></label></div>
                    <div class="col col-4"><input type="text" id="fname" name="fname" placeholder="Your name.." required pattern="([A-Z]|[a-z]){2,}"></div>

                    <div class="col col-2"><label for="lname"><span>Last Name</span></label></div>
                    <div class="col col-4"><input type="text" id="lname" name="lname" placeholder="Your last name.." required pattern="([A-Z]|[a-z]){2,}"></div>

                </div>

               <div class="row">

                   <div class="col col-2"><label for="email"><span>Email</span></label></div>
                   <div class="col col-4"><input type="text" id="email" name="email" placeholder="Your email address.." required pattern="[a-z]+(\w|\.|)?(([a-z]|[0-9])*)?@(([a-z]{3,7}\.com)|([a-z]{3,5}\.[^com]{3,5}\.pk))"></div>

                   <div class="col col-2"><label for="pnum"><span>Phone Number</span></label></div>
                   <div class="col col-4"><input type="text" id="phone" name="phone" placeholder="Your phone number.." required pattern="(((03)[0-4][0-9]\d[0-9]{6})|((03)[0-4][0-9]-[0-9]{7})|(\+(923)[0-4][0-9]\d[0-9]{6})|(\+(923)[0-4][0-9]-[0-9]{7}))"></div>

               </div>

                <div class="row">

                    <div class="col col-2"><label for="city"><span>City</span></label></div>

                    <div  class="col col-10">
                        <select id="city" class="selection" name="city">
                            <option value="lahore">Lahore</option>
                            <option value="karachi">Karachi</option>
                            <option value="peshawar">Peshawar</option>
                            <option value="queta">Queta</option>
                            <option value="islamabad">Islamabad</option>
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col col-2"><label for="message"><span>Message</span></label></div>
                    <div class="col col-10"><textarea id="message" rows="7" name="message" placeholder="Write something.."></textarea></div>

                </div>

                <div class="row">
                    <div class="col col-2">
                        <input class="submitBTTN" type="submit" value="Submit" name="send_message">
                    </div>
                </div>

            </form>
        </div>
    </div>


    <div class="fullcontainer">
        <div class="col-10">
            <h1 style="margin-top: 1em; margin-bottom: 0em;">Our Location</h1>
            <div id="map"></div>
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

<script>
    function initMap() {
        var test= {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: test
        });
        var marker = new google.maps.Marker({
            position: test,
            map: map
        });
    }
</script>
<script async defer
        src=
                "https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>

</body>
</html>