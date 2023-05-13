<?php
include("db_con.php");
?>
<?php
session_start();
if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //echo $email . " - " . $pass;
    $sql = "SELECT * FROM user WHERE usr_email='$email' AND usr_pass='$pass'";
    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) == 1) {
        // print_r(mysqli_num_rows($res));
        $_SESSION['pass'] = true;
        header("Location:home.php");
    }
    else{
        echo "<script>alert('invalid username or password')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            margin-top: 10%;
            margin-bottom: 10%;
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 40px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container form label,
        .login-container form input {
            margin-bottom: 20px;
        }

        .login-container form input {
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
        }

        .login-container form button {
            margin-top: 20px;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        .login-container form button:hover {
            background-color: #0056b3;
        }

        .login-container .alert {
            margin-top: 20px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-container">
                    <h1>Admin Login</h1>
                    <form id="login-form" method="post">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="email" required>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="pass" required>
                        <button type="submit" name="save">Login</button>
                    </form>
                    <div class="alert alert-danger" role="alert"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            // Perform authentication logic here
            // Example: You can use AJAX to send the username and password to a server-side script for verification
            // If authentication is successful, redirect to admin dashboard
            // If authentication fails, show error message in the alert div
            var alertDiv = document.querySelector('.alert');
            if (username === 'admin' && password === 'password') {
                window.location.href = '/admin-dashboard'; // Replace with your actual admin dashboard URL
            } else {
                alertDiv.innerText = 'Invalid username or password';
                alertDiv.style.display = 'block';
            }
        });
    </script> -->
</body>

</html>