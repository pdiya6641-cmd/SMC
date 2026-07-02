<?php 
include ("rheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Marriage Application</h1>
                     <form action="mrg_application_code.php" method="post" enctype="multipart/form-data">
                        <div class="mail_section_1">
							<div class="input-group mb-3">
								
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom name" name="groom_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Fathername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom fathername" name="groom_fathername">
							</div>

						    <div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Mothername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom mothername" name="groom_mothername">
							</div>
									   
                            <div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom Birth of Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom birth of date" name="groom_birth_of_date">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter groom address" rows="5" id="comment" name="groom_address"></textarea>
							</div>
						
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Religion</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom religion" name="groom_religion">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Nationality</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom nationality" name="groom_nationality">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Marital Status</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom marital status" name="groom_marital_status">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Mobile</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom mobile" name="groom_mobile">
							</div>
							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Groom's Email</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter groom email" name="groom_email">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride name" name="bride_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Fathername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride fathername" name="bride_fathername">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Mothername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride mothername" name="bride_mothername">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride Birth of Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride birth of date" name="bride_birth_of_date">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter bride address" rows="5" id="comment" name="bride_address"></textarea>							
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Religion</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride religion" name="bride_religion">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Nationality</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride nationality" name="bride_nationality">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Marital Status</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride marital status" name="bride_marital_status">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Mobile</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride mobile no." name="bride_mobile">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Bride's Email</span>
								</div>
								<input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter bride email" name="bride_email">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Marriage Invitation</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"  placeholder="Enter marriage invitation" name="mrg_invitation">							
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Marriage Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter marriage date" name="mrg_date">
							</div>
							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Marriage Place</span>
								</div>
								<textarea class="form-control"  placeholder="Enter marriage place" rows="5" id="comment" name="mrg_place"></textarea>							
							</div>

							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Marriage Photos</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter mrg photos" name="mrg_photo">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Brahmin ID</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter brahmin id" name="brahmin_id">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Brahmin Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter brahmin name" name="brahmin_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Brahmin Aadhar Card</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter brahmin aadhar card" name="brahmin_aadhar_card">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness ID</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter witness id" name="witness_id">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter witness name" name="witness_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness Aadhar Card</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter witness aadhar card" name="mrg_witness_aadhar_card">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness Mobile No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter witness mobile no." name="witness_mobile">
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