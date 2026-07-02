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
                     <form action="hallbooking_editdata_code.php" method="post">
                        <?php
							include("connect.php");
							$booking_id=$_GET['booking_id'];
							
							$q="select * from hallbooking where booking_id=$booking_id";
							
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
						?>
					
					<div class="mail_section_1">
							
							<div class="input-group mb-3">
								<div class="input-group-prepend"></div>
							<input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['hall_id'];?>" name="hall_id">
							</div>
					
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['first_name'];?>" name="first_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['middle_name'];?>" name="middle_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Surname</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['surname'];?>" name="surname">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter address" rows="5" id="comment" name="address"><?php print $row['address'];?></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Mobile No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['mobile'];?>" name="mobile">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Other Mobile No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['other_mobile_no'];?>" name="other_mobile_no">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
								</div>
								<input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['email'];?>" name="email">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">ID Proof</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['id_proof'];?>" name="id_proof">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">ID Proof No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['id_proof_no'];?>" name="id_proof_no">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">GST No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['gst_no'];?>" name="gst_no">
							</div>
							
							<!--<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Category</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['category'];?>" name="category">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Hall Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['hall_name'];?>" name="hall_name">
							</div>-->
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Purpose</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['purpose_of_booking'];?>" name="purpose_of_booking">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Select Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['select_date'];?>" name="select_date">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">No of Days</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php print $row['no_of_days'];?>" name="no_of_days">
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