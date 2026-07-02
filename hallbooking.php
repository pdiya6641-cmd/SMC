<?php 
include ("rheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">HallBooking</h1>
                     <form action="hallbooking_code.php" method="post" >
                        <div class="mail_section_1">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter first name" name="first_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter middle name" name="middle_name">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Surname</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter surname" name="surname">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Address</span>
								</div>
								<textarea class="form-control"  placeholder="Enter address" rows="5" id="comment" name="address"></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Mobile No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter mobile no." name="mobile">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Other Mobile No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter other mobile no" name="other_mobile_no">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
								</div>
								<input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter Email" name="email">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">ID Proof</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter id proof" name="id_proof">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">ID Proof No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter id proof no" name="id_proof_no">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">GST No</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter gst no" name="gst_no">
							</div>
							
							<!--<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Category</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter category" name="category">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Hall Name</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter hall name" name="hall_name">
							</div>-->
							
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						</div>
						
						<select name="hallname" class="mail_text">
						   <option value="0">SELECT HALL</option>
							<?php
							include("connect.php");
							$q1="select * from community_hall";
							$res1=mysqli_query($cn,$q1);
							while($row1=mysqli_fetch_array($res1))
							{
							?>
							<option value="<?php print $row1['ch_id'];?>"><?php print $row1['ch_name'];?></option>
							<?php
							}
							?>
						</select>
						
						</div>
						
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Purpose</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter purpose of booking" name="purpose_of_booking">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Select Date</span>
								</div>
								<input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Select date" name="select_date">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">No of Days</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter no of days" name="no_of_days">
							</div>
						<div class="send_bt"><input type="submit" value="GO" class="btn btn-primary"></div> 
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