<?php
ob_start();

include('functions.php');
if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mobitel Hacking Competition - (intern)</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="body_bg">


        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>You are the Winner, Congratulations!</h1>
                                <p>“Most hackers are young because young people tend to be adaptable. As long as you remain adaptable, you can always be a good hacker.” </p>
                                <a href="#pricing_part" class="btn_1">Gifts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!-- pricing part start-->
        <section class="pricing_part" id="pricing_part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_tittle text-center">
                            <h2>Gift plans</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
                            <!-- <p>Gold Package</p> -->
                            <h3>Gold Package</h3>
                            <ul>
                                <li>Beautiful Cup <i class=" fa fa-check-square"></i></li>
                                <li>Beautiful Bottle <i class="fa fa-spinner fa-spin"></i></li>
                                <li>Beautiful Pen <i class="fa fa-spinner fa-spin"></i></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
                            <!-- <p>Silver Package</p> -->
                            <h3>Silver Package</h3>
                            <ul>
                                <li>Beautiful Cup <i class=" fa fa-spinner fa-spin"></i></li>
                                <li>Beautiful Bottle <i class="fa fa-check-square"></i></li>
                                <li>Beautiful Pen <i class="fa fa-spinner fa-spin"></i></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_pricing_part">
                            <!-- <p>Bronze Package</p> -->
                            <h3>Bronze Package</h3>
                            <ul>
                                <li>Beautiful Cup <i class="fa fa-spinner fa-spin"></i></li>
                                <li>Beautiful Bottle <i class="fa fa-spinner fa-spin"></i></li>
                                <li>Beautiful Pen <i class="fa fa-check-square"></i></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- pricing part end-->

        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="copygight_text">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="copyright_text">
                                <P>
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | <i class="ti-heart" aria-hidden="true"></i> Lakshitha Perera
                                        </P>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer_icon social_icon">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
<?php
ob_end_flush();
?> 