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
                     <form action="birth_editdata_code.php" method="post">
                        <?php
							include("connect.php");
							$birth_id=$_GET['birth_id'];
							
							$q="select * from birth_application where birth_id=$birth_id";
							
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
						?>
					
					<div class="mail_section_1">
							
							<div class="input-group mb-3">
								<div class="input-group-prepend"></div>
							<input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_id'];?>" name="birth_id">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Birth Childname</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_childname'];?>" name="birth_childname">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Fathername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_fathername'];?>" name="birth_fathername">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Mothername</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_mothername'];?>" name="birth_mothername">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Birth Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_date'];?>" name="birth_date">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_gender'];?>" name="birth_gender">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Child Birth Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter child birth address" rows="5" id="comment" name="birth_bornaddress"><?php print $row['birth_bornaddress'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Parent's Permanent Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter birth permanent address" rows="5" id="comment" name="birth_permanentaddress"><?php print $row['birth_permanentaddress'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Pincode</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_pincode'];?>" name="birth_pincode">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Birth Place</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_place'];?>" name="birth_place">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
								</div>
								<input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_email'];?>" name="birth_email">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Mobile No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['birth_mobile'];?>" name="birth_mobile">
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