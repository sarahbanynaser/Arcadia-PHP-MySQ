<?php
session_start();

include 'includes/config.php';

	$Error ='';
	






	
if(isset($_POST['Submit']))
{
	
$Name=mysqli_real_escape_string($dbConn,$_POST['Name']);
$Phone_Number=mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);
$Email_Address=mysqli_real_escape_string($dbConn,$_POST['Email_Address']);
$Password=mysqli_real_escape_string($dbConn,$_POST['Password']);

$query1 = mysqli_query($dbConn,"SELECT * FROM users WHERE Email_Address='$Email_Address'"); 
		

	
if (mysqli_num_rows($query1)>0)
{


	$Error ='Sorry ! This Email Address Is Already Exist !';

	
}else{
	
	
	
	
$insert = mysqli_query($dbConn,"insert into users (Name,Email_Address,Password,Status) values ('$Name','$Email_Address','$Password','Active')");


	  	$Error ='Thank You For Registeration ! You Can Login Now !';

	  
	  
	  
$query = mysqli_query($dbConn,"SELECT * FROM users WHERE Email_Address='$Email_Address'"); 
		
		
		
		$row=mysqli_fetch_array($query);
$U_ID=$row['ID'];
$_SESSION['U_Log'] = $U_ID;









	echo '<script language="JavaScript">
            document.location="Users/index.php";
          </script>';
		
		
		
		
		
	

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
                <div class="logo-small" >
                                        <a href="index.php"><img src="assets/img/logo-white.png?" alt="" class="" /></a>

                    <h5><span class="text-muted fw-light">Inspire. Design. Live</span></h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="signin.php" target="_self" class="text-white">
                    Sign In
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->








    <!-- Begin page content -->
   <main class="container-fluid h-100">
        <div class="row h-100">
				<form method="post" action="#">


            <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-4">
                <h2 class="mb-4"><span class="text-secondary fw-light">Create</span><br />new account</h2>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control " value="" required name="Name" placeholder="Name" id="name">
                    <label for="name">Name</label>
                </div>
				
				
			
                
				   <div class="form-floating mb-3">
                    <input type="email" class="form-control " value="" required name="Email_Address" placeholder="Email Address" id="emailphone">
                    <label for="emailphone">Email Address</label>
                </div>
				
				
				
             
                
                <div class="form-floating mb-3">
                    <input type="password" class="form-control " value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" required name="Password" placeholder="Password" id="password">
                    <label for="password">Password</label>
                </div>
                
                <p class="mb-3"><span class="text-muted">By clicking on Sign up button, you are agree to the our </span>
                    <a href="terms.php">Terms and Conditions</a>
                </p>
            </div>
							<center><font style="color:red"><?php echo $Error; ?></font></center>

            <div class="col-11 col-sm-11 mt-auto mx-auto py-4">
                <div class="row ">
                    <div class="col-12 d-grid">
					                        <button type="submit" name="Submit" class="btn btn-default btn-lg btn-rounded shadow-sm">Sign Up</button>

                    </div>
                </div>
            </div>
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