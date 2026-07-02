<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Fill Up Details</h1>
                     <form action="service_master_code.php" method="post" enctype="multipart/form-data">
                        <div class="mail_section_1">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Service Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter service name" name="s_name">
							</div>
							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Service Description</span>
								</div>
								<textarea class="form-control"  placeholder="Enter description of service" rows="5" id="comment" name="s_description"></textarea>
							</div>
							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Service icon</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  name="s_icon">
							</div>
						
                           <div class="send_bt"><input type="submit" value="SEND" class="btn btn-primary"></div>
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