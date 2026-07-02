<?php
include("aheader.php");
?>

<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>
            </div>
		</div>
             
             <div class="row">
				<?php
				include("connect.php");
				$q="select count(*) from service_master";
				$res=mysqli_query($cn,$q);
				if($res)
				{
					$row=mysqli_fetch_row($res);
				?>
				
            
              <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="birth_application.php"><div class="building_icon"><img src="s_icon/birth_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from birth_application";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							<h4 style="color:brown;font-weight:bold;">BIRTH APPLICATIONS</h4>
					  </div>
              </div>   
              <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="death_application.php"><div class="building_icon"><img src="s_icon/death_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from death_application";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							
                            <h4 style="color:brown;font-weight:bold;">DEATH APPLICATIONS</h4>
					  </div>
              </div>
			  <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="mrg_application.php"><div class="building_icon"><img src="s_icon/mrg_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from mrg_application";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
                            <h4 style="color:brown;font-weight:bold;">MARRIAGE APPLICATIONS</h4>
					  </div>
              </div>
			  <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="divorce_application.php"><div class="building_icon"><img src="s_icon/div_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from divorce_application";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							
                            <h4 style="color:brown;font-weight:bold;">DIVORCE APPLICATIONS</h4>
					  </div>
              </div>					
			  <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="community_hall.php"><div class="building_icon"><img src="s_icon/ch_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from community_hall";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							
                            <h4 style="color:brown;font-weight:bold;">COMMUNICATION HALLS</h4>
					  </div>
              </div>
					<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="hallbooking.php"><div class="building_icon"><img src="s_icon/bk_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from hallbooking";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							
                            <h4 style="color:brown;font-weight:bold;">HALL BOOKINGS</h4>
					  </div>
              </div>
				<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="user_master.php"><div class="building_icon"><img src="s_icon/user_icon.png" width="100px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from user_master";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							
                            <h4 style="color:brown;font-weight:bold;">REGISTERED USERS</h4>
					  </div>
              </div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
							<a href="feedback_master.php"><div class="building_icon"><img src="s_icon/fb_icon.png" width="150px" height="100px"></div>
							<?php
							include("connect.php");
							$q="select count(*) from feedback_master";
							$res=mysqli_query($cn,$q);
							
							while($row=mysqli_fetch_array($res))
							{
							?>
							<h3 style="color:brown;font-weight:bold;"><?php print $row[0];?></h3>
							<?php
							}
							?>
							
                            <h4 style="color:brown;font-weight:bold;">FEEDBACK</h4>
					  </div>
              </div>
				<?php
					}
					?>


        </div>              
             <div class="row">

              <div class="col-md-8 col-sm-8 col-xs-12">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/1.jpg" alt="" />
                           
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" alt="" />
                          
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt="" />
                           
                        </div>
                    </div>
					</div>
					</div>

	</div>
	</div>

	</div>
	
<?php
include("footer.php");
?>