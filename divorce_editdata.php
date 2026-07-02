<?php 
include ("header.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">EDIT DATA</h1>
                     <form action="divorce_editdata_code.php" method="post" enctype="multipart/form-data">
                        <?php
							include("connect.php");
							$div_id=$_GET['div_id'];
							
							$q="select * from divorce_application where div_id=$div_id";
							
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
						?>
					
					<div class="mail_section_1">
							
							<div class="input-group mb-3">
								<div class="input-group-prepend"></div>
							<input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['div_id'];?>" name="div_id">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Husband Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['husband_name'];?>" name="husband_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Husband Nationality</span>
								</div>
								<textarea class="form-control"  placeholder="Enter husband nationality" rows="5" id="comment" name="husband_nationality"><?php print $row['husband_nationality'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Husband Date of Birth</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['husband_date_of_birth'];?>" name="husband_date_of_birth">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Wife Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['wife_name'];?>" name="wife_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Wife Nationality </span>
								</div>
								<textarea class="form-control"  placeholder="Enter wife nationality " rows="5" id="comment" name="wife_nationality"><?php print $row['wife_nationality'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Wife Date of Birth</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['wife_date_of_birth'];?>" name="wife_date_of_birth">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Date of Divorce</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['date_of_divorce'];?>" name="date_of_divorce">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">City and Country of Divorce</span>
								</div>
								<textarea class="form-control"  placeholder="Enter ward,city and country of divorce" rows="5" id="comment" name="city_and_country_of_divorce"><?php print $row['city_and_country_of_divorce'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Other Relevent Info</span>
								</div>
								<textarea class="form-control"  placeholder="Enter other relevant info" rows="5" id="comment" name="other_relevant_info"><?php print $row['other_relevant_info'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Marriage Photos</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['mrg_photos'];?>" name="mrg_photos">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Translators Signature</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['translators_signature'];?>" name="translators_signature">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Translators Name </span>
								</div>
								<input type="datetext-local" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['translators_name'];?>" name="translators_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness ID</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['witness_id'];?>" name="witness_id">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['witness_name'];?>" name="witness_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness Aadhar Card</span>
								</div>
								<input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['witness_aadhar_card'];?>" name="witness_aadhar_card">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Witness Mobile</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['witness_mobile'];?>" name="witness_mobile">
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