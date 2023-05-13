<?php
include('db_con.php');
?>
<?php
session_start();
if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //echo $email . " - " . $pass;
    $sql = "SELECT * FROM registration WHERE reg_email='$email' AND reg_pass='$pass'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) == 1) {
        // print_r(mysqli_num_rows($res));
        $_SESSION['pass'] = true;
        header("Location:order.php");
    }
    else{
        echo "<script>alert('invalid username or password')</script>";
    }
}
?>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Account Login</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    <input class="text email" type="text" name="email" placeholder="Email" required="">
                    <input class="text email" type="password" name="pass" placeholder="Password" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="Submit" name="save">
                    <a href="register.php">Register</a>
                    <br><br>
                    <a href="">Forget Password ?</a>
                </form>

            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/"
                    target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html>