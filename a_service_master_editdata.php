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
                     <form action="service_master_editdata_code.php" method="post" enctype="multipart/form-data">
                        <?php
							include("connect.php");
							$s_id=$_GET['s_id'];
							
							$q="select * from service_master where s_id=$s_id";
							
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
						?>
					
					<div class="mail_section_1">
							
							<div class="input-group mb-3">
								<div class="input-group-prepend"></div>
							<input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['s_id'];?>" name="s_id">
							</div>
					
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Service Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['s_name'];?>" name="s_name">
							</div>
							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Description of Service</span>
								</div>
								<textarea class="form-control"  placeholder="Enter description of service" rows="5" id="comment" name="s_description"><?php print $row['s_description'];?></textarea>
							</div>
							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Service Icon</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['s_icon'];?>" name="s_icon">
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