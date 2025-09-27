<?php
session_start();

include 'includes/config.php';

$DID = $_GET['DID'];
$user_ID = $_GET['user_ID'];

	




?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>ARCADIA</title>

    <!-- manifest meta -->
    <meta name="mobile-web-app-capable" content="yes">
    

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/logo.png" sizes="180x180">
    <link rel="icon" href="assets/img/logo.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/logo.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- style css for this template -->
    <link href="assets/scss/style.css" rel="stylesheet" id="style">
	
	
	
	
</head>

<body class="body-scroll d-flex flex-column h-100 theme-pink" data-page="signin">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="circular-loader">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p class="mt-4">
                    <span class="text-secondary">ARCADIA</span><br><strong>Please
                        wait...</strong>
                </p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

 
 <!-- Header -->
    <header class="header position-fixed bg-theme-round-opac text-white">
        <div class="row">
            <div class="col">
                <div class="logo-small">
                    <a href="index.php"><img src="assets/img/logo-white.png?" alt="" class="" /></a>
                    <h5><span class="text-muted fw-light">Inspire. Design. Live</span></h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="signup.php" target="_self" class="text-white">
                    Sign Up
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->


    <!-- Begin page content -->
    <main class="container-fluid h-100 ">
       <div class="main-container container">
            <!-- Content text -->
            <br>
			<h5>Terms and Conditions</h5>
			<br>
            <p style="text-align:justify">



    <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
	Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text 
	Text Text Text Text Text Text Text Text Text Text Text Text Text </p>


			</p>
            
        </div>
    </main>


    <!-- Required jquery and libraries -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="assets/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="assets/js/app.js"></script>

</body>

</html>