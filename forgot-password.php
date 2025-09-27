<?php
session_start();

include 'includes/config.php';

	$Error ='';

$DID = $_GET['DID'];
$user_ID = $_GET['user_ID'];



if(isset($_POST['Submit']))
{
	
$Email_Address=$_POST['Email_Address'];




$sql = mysqli_query($dbConn,"select * from users where Email_Address='$Email_Address'");

if (mysqli_num_rows($sql)>0){

$row = mysqli_fetch_array($sql);
$U_ID = $row['ID'];

$Password = substr(sha1(mt_rand()),17,7);

$sql1 = mysqli_query($dbConn,"update users set Password='$Password' where ID='$U_ID'");




$email_to = $Email_Address;
$email_subject = "ARCADIA App - Reset Password";


  
  
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: NABEEL STORE <info@nabeel-store.com>" . "\r\n";
$headers .= "Reply-To: info@nabeel-store.com" . "\r\n";







$message = "<html><head>
<title>ARCADIA App - Reset Password</title>
</head>
<body>
Your New Password Is: ".$Password." 
</body>";

mail($email_to,$email_subject,$message,$headers);

















	$Error = 'Your New Password Has Been Sent To Your Email Address !';

	
	
}else{
	
	



	$Error = 'Error - Please Check Email Address !';

	


}





}




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

<body class="body-scroll d-flex flex-column h-100 theme-pink" data-page="forgot-password">

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
                  <a href="index.php">   <a href="index.php"><img src="assets/img/logo-white.png?" alt="" class="" /></a></a>
                    <h5><span class="text-muted fw-light">Inspire. Design. Live</span></h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="signin.php" target="_self" class="text-white">
                    Sign in
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
	
	
	
	

    <!-- Begin page content -->
    <main class="container-fluid h-100 ">
        <div class="row h-100">
				<form method="post" action="#">
				
		
		

            <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
                <h2 class="mb-3"><span class="text-secondary fw-light">Forget your</span><br />Password?</h2>
                <p class="text-secondary mb-4">Provide your registered email address to change password.</p>
                <div class="form-group form-floating mb-3 ">
                    <input type="text" class="form-control" required name="Email_Address" value="" id="email" placeholder="Email Address">
                    <label class="form-control-label" for="email">Email Address</label>
                </div>
            </div>
							<center><font style="color:red"><?php echo $Error; ?></font></center>

            <div class="col-11 col-sm-11 mt-auto mx-auto py-4">
                <div class="row ">
                    <div class="col-12 d-grid">
							                        <button type="submit" name="Submit" class="btn btn-default btn-lg shadow-sm btn-rounded">Reset
                            Password</button>

                    </div>
                </div>
            </div>
			</form>
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