<?php include("vheader.php");?>

<!-- service section start -->
      <div class="service_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="service_taital">Our Services</h1>
               </div>
            </div>
            <div class="row service_section_2">
			<?php
		include("connect.php");
		$q="select * from service_master";
		$res=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<div class="col-lg-4 col-sm-3">
			<div class="service_box">
			<div class="building_icon"><img src="<?php print $row['s_icon'];?>" width="150px" height="100px"></div>
				<h4 class="residential_text"><?php print strtoupper($row['s_name']);?></h4><br>
				<p class="service_text"><?php print $row['s_description'];?></p>
				</div>
          
		 <!-- <div class="readmore_bt">
		  <a href="sdemo.php?s_id=<?php print $row['s_id'];?>">Apply Now</a>
		  </div>-->
		  
        </div>  		  
		<?php
		}
		?>
		
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
<?php include("footer.php");?>