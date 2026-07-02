<?php session_start();
if($_SESSION["username"]==null)
{
	header("location:login.php");
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
      <title>aheader</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
	  
	  
	  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
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
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <!--<a class="navbar-brand" href="index.html" color="white">SURENDRANAGAR</a>-->
				<div><img src="images/logo8.png" height="100px" width="100px"></div>

              
			   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
				  <ul class="nav nav-tabs">
				  
                     <li class="nav-item active">
                        <a class="nav-link" href="admin_home.php">Dashboard</a>
					</li>
					      <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Community hall
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="a_community_hall.php">Add</a>
						  <a class="dropdown-item" href="a_community_hall_view.php">View</a>
						</div>
					  </li>
					  
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Service
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="a_service_master.php">Add</a>
						  <a class="dropdown-item" href="a_service_master_view.php">View</a>
						</div>
					  </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User applications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="a_birth_application_view.php">Birth application</a>
          <a class="dropdown-item" href="a_death_application_view.php">Death application</a>
          <a class="dropdown-item" href="a_mrg_application_view.php">Marriage application</a>
          <a class="dropdown-item" href="a_divorce_application_view.php">Divorce application</a>
          </div>
      </li>

                     <li class="nav-item">
                        <a class="nav-link" href="a_hallbooking_view.php">Hall booking</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="a_user_view.php">User</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="a_feedback_view.php">Feedback</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
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
     