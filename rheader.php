<?php session_start();
if($_SESSION["r_username"]==null)
{
	header("location:login.php");
}
else
{
	$r_username=$_SESSION['r_username'];
	$user_id=$_SESSION['r_userid'];
	
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>rheader</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
	  
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/font-awesome.css">
      <!-- fonts -->
      <link href="css/swap.css" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
   

 <!-- header section start -->
      <div class="header_section" style="font-weight:bold;">
         <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <!--<a class="navbar-brand"href="index.html">SURENDRANAGAR</a>-->
				<div><img src="images/logo8.png" height="100px" width="100px"></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
				  <ul class="nav nav-tabs">

                     <li class="nav-item active">
                        <a class="nav-link"  href="register_home.php">Home</a>
						
                     </li>
                     <li class="nav-item">
                        <a class="nav-link "  href="r_aboutus.php">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link "  href="service.php">Services</a>
                     </li>
                     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Applications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="r_birth_application_view.php">Birth application</a>
          <a class="dropdown-item" href="r_death_application_view.php">Death application</a>
          <a class="dropdown-item" href="r_mrg_application_view.php">Marriage application</a>
          <a class="dropdown-item" href="r_divorce_application_view.php">Divorce application</a>
          </div>
      </li>
<li class="nav-item">
                        <a class="nav-link" href="r_mybooking.php">My Booking</a>
                     </li>
					 <li class="nav-item">
                        <a class="nav-link"   href="feedback_master.php">Feedback</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link"  href="rcontact.php">Contact Us</a>
                     </li>
					 <li class="nav-item">
                        <a class="nav-link"  href="logout.php">LogOut</a>
                     </li>
                     
                  </ul>
				  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
     