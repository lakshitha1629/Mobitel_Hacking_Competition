<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobitel Hacking Competition - (intern)</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

                <form class="login100-form validate-form" action="" method="post" id="login">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="Username" id="txt_uname" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="txt_pwd" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                    </div>

                    
                        <div style="text-align: center;padding-bottom: 10px;color: red;">
                            <?php
                            ob_start();
                            session_start();

                            require_once('connect.php');

                            // call the login() function if register_btn is clicked
                            if (isset($_POST['login_btn'])) {
                                login();
                            }

                            if (isset($_GET['logout'])) {
                                session_destroy();
                                unset($_SESSION['user']);
                                header("Login.php");
                            }

                            function login()
                            {
                                //  require_once ('connect.php');
                                global $con, $username;
                                // grap form valuese($_POST['username']);
                                $username = e($_POST['Username']);
                                $password = e($_POST['password']);

                                // attempt login if no errors on form

                                $password = md5($password);

                                //$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
                                $query = "SELECT * FROM `user_account` WHERE `user_name`='$username' AND `password`='$password' AND `activated`='1' LIMIT 1";
                                $results = mysqli_query($con, $query);


                                if (mysqli_num_rows($results) == 1) { // user found
                                    // check if user is admin or user
                                    $logged_in_user = mysqli_fetch_assoc($results);

                                    if ($logged_in_user['user_type'] == '1') {
                                        //$_SESSION['user'] = $logged_in_userid['user_id'];
                                        $_SESSION['user_name'] = $logged_in_user['user_name'];
                                        $_SESSION['user'] = $logged_in_user;
                                        $_SESSION['user_type'] = "Admin";
                                        $_SESSION['success']  = "You are now logged in";
                                        header('location: dashboard.php');

                                    } else {
                                        echo "*Undefined User";
									}
									
                                } else {

                                    echo "*Wrong username/password combination";
                                }
                            }

                            function getUserById($id)
                            {
                                global $con;
                                //$query = "SELECT * FROM users WHERE id=" . $id;
                                $query = "SELECT * FROM `user_account` WHERE `user_id`" . $id;
                                //SELECT * FROM `cbm_user_account` WHERE `user_id`
                                $result = mysqli_query($con, $query);

                                $user = mysqli_fetch_assoc($result);
                                return $user;
                            }

                            function isLoggedIn()
                            {
                                if (isset($_SESSION['user'])) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                            function isAdmin()
                            {
                                if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == '1') {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                            // escape string
                            function e($val)
                            {
                                global $con;
                                return mysqli_real_escape_string($con, trim($val));
                            }

                            function display_error()
                            {
                                global $errors;

                                if (count($errors) > 0) {
                                    echo '<div class="error">';
                                    foreach ($errors as $error) {
                                        echo $error . '<br>';
                                    }
                                    echo '</div>';
                                }
                            }




                            ?>
                        </div>
                    

                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" id="but_submit" name="login_btn" type="submit" value="Login" />

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<?php
ob_end_flush();
?> 