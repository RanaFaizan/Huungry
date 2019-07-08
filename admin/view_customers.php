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
        <div class="container col-12" style="margin-top: 25%;">
            <form action="/action_page.php">

                <div class="row">
                    <div class="col-12">
                        <h1>Our Customers</h1>
                    </div>
                </div>

                <div class="row" style="font-size: larger; margin-bottom: 5%">

                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>ID</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>Fname</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>Lname</b></span></label></div>
                    <div class="col col-3"><label for="fname"><span style="color: #721c24"><b>Email</b></span></label></div>
                    <div class="col col-2"><label for="fname"><span style="color: #721c24"><b>Phone</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>Gender</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>Dob</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>City</b></span></label></div>
                    <div class="col col-1"><label for="fname"><span style="color: #721c24"><b>pass</b></span></label></div>

                </div>


                <?php
                $catQuery = "select * from customers";
                $catQueryResult = mysqli_query($con,$catQuery);

                while($row = mysqli_fetch_assoc($catQueryResult))
                {
                    $cus_id = $row['cus_id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $gender = $row['gender'];
                    $dob = $row['dob'];
                    $city = $row['city'];
                    $cus_pass = $row['cus_pass'];
                    echo "<div class=\"row\">
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$cus_id</b></span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$first_name</b></span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$last_name</b></span></label></div>
                            <div class=\"col col-3\"><label for=\"fname\"><span><b>$email</b></span></label></div>
                            <div class=\"col col-2\"><label for=\"fname\"><span><b>$phone</b></span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$gender</b></span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$dob</b></span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$city</b></span></label></div>
                            <div class=\"col col-1\"><label for=\"fname\"><span><b>$cus_pass</b></span></label></div>
                        </div>";

                    echo "<div class=\"row\">
                                    <div class=\"col col-4\" style='margin-bottom: 2%; margin-top: 2%;'>
                                        <a href=\"index.php?del_pro=$cus_id\" class=\"btn btn-danger\" style=' width: 100%;background-color: darkred;color: white;padding: 12px 20px;border: none;border-radius: 10px;cursor: pointer;' '>
                                        <i class=\"fa fa-trash-alt\"></i> Delete
                                        </a>
                                     </div>
                                     
                                     <div class=\"col col-4\" style='margin-bottom: 2%; margin-top: 2%;'>
                                        <a href=\"index.php?edit_pro = $cus_id\" class=\"btn btn-danger\"style=' width: 100%;background-color: #45a049;color: white;padding: 12px 20px;border: none;border-radius: 10px;cursor: pointer;'>
                                        <i class=\"fas fa-edit\"></i> Edit
                                        </a>
                                     </div>
                             </div>";
                }
                ?>





            </form>
        </div>
    </div>
</main>

<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>

</body>
</html>
