<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">EDIT DATA</h1>
                     <form action="a_community_hall_editdata_code.php" method="post">
                        <?php
							include("connect.php");
							$ch_id=$_GET['ch_id'];
							
							$q="select * from community_hall where ch_id=$ch_id";
							
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
						?>
					
					<div class="mail_section_1">
							
							<div class="input-group mb-3">
								<div class="input-group-prepend"></div>
							<input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['ch_id'];?>" name="ch_id">
							</div>
					
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Community Hall Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['ch_name'];?>" name="ch_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Address of Community Hall</span>
								</div>
								<textarea class="form-control"  placeholder="Enter address" rows="5" id="comment" name="ch_address"><?php print $row['ch_address'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Capacity of Community Hall</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['ch_capacity'];?>" name="ch_capacity">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Location Photo of Community Hall</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['ch_location_photo'];?>" name="ch_location_photo">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Contact Name of Community Hall</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['ch_contact_person'];?>" name="ch_contact_person">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Contact No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['ch_contact_no'];?>" name="ch_contact_no">
							</div>
							<?php
							}
							?>
                           <div class="send_bt"><input type="submit" value="UPDATE" class="btn btn-primary"></div>
                        </div>
                     </form>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
<?php
include ("footer.php");
?> 