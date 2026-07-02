<?php 
include ("rheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Death Application</h1>
                     <form action="death_application_code.php" method="post" enctype="multipart/form-data">
                        <div class="mail_section_1">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death date" name="death_date">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Time</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death time" name="death_time">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death gender" name="death_gender">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death name" name="death_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Fathername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death fathername" name="death_fathername">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Mothername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death mothername" name="death_mothername">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Place</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death place" name="death_place">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Reason</span>
								</div>
								<textarea class="form-control"  placeholder="Enter death reason" rows="5" id="comment" name="death_reason"></textarea>
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter death address" rows="5" id="comment" name="death_address"></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Family Contact</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death family contact" name="death_familycontact">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Aadhar Card No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter death aadhar card no" name="death_aadhar_card_no">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Death Aadhar Card</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="select photo" name="death_aadhar_card">
							</div>

                           <div class="send_bt"><input type="submit" value="SUBMIT" class="btn btn-primary"></div>
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