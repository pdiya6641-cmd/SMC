<?php 
include ("aheader.php");
?>

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Hall Booking Data</h1>
                     <form action="">
					 
                       <table class="table table-striped" border="2px solid black">
					  <?php
					  $booking_id=$_GET['booking_id'];

					  include ("connect.php");
					  $q="select * from hallbooking where booking_id='$booking_id'";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  
					  <tr>
					   <th>BOOKING ID</th>
					  <td><?php print $row['booking_id'];?></td>
					   </tr>
					   
					   <tr>
					   <th>FIRST NAME</th>
					  <td><?php print $row['first_name'];?></td>
					   </tr>
					   
					   <tr>
					   <th>MIDDLE NAME</th>
					   <td><?php print $row['middle_name'];?></td>
						</tr>
						
						<tr>
					   <th>SURNAME</th>
					  <td><?php print $row['surname'];?></td>
						</tr>
						
						<tr>
					   <th>ADDRESS</th>
					  <td><?php print $row['address'];?></td>
						</tr>
						
						<tr>
					   <th>MOBILE</th>
					  <td><?php print $row['mobile'];?></td>
					   </tr>
					   
					   <tr>
					   <th>OTHER MOBILE NO</th>
					  <td><?php print $row['other_mobile_no'];?></td>
						</tr>
						
						<tr>
					   <th>EMAIL</th>
					  <td><?php print $row['email'];?></td>
						</tr>
						
						<tr>
					   <th>ID PROOF</th>
					  <td><?php print $row['id_proof'];?></td>
					  </tr>

						<tr>
					   <th>ID PROOF NO</th>
					  <td><?php print $row['id_proof_no'];?></td>
						</tr>
						
						<tr>
					   <th>GST NO</th>
					  <td><?php print $row['gst_no'];?></td>
						</tr>
						
						<tr>
					   <th>COMMUNITY NAME </th>
					<td><?php
					  $ch_id=$row['ch_id'];
					  $q2="select * from community_hall where ch_id=$ch_id";
					  $res2=mysqli_query($cn,$q2);
					  if($row2=mysqli_fetch_array($res2))
						  
					  {
						print $row2['ch_name'];
					  }
					  ?>
					  </td>
					   </tr>
					   
					   <tr>
					   <th>PURPOSE OF BOOKING</th>
					  <td><?php print $row['purpose_of_booking'];?></td>
					   </tr>
					   
					   <tr>
					   <th>SELECT DATE</th>
					  <td><?php print $row['select_date'];?></td>
					  </tr>

						<tr>
					   <th>NO OF DAYS</th>
					  <td><?php print $row['no_of_days'];?></td>
					  </tr>

						<tr>
					   <th>USER NAME</th>
						<td><?php
					  $user_id=$row['user_id'];
					  $q1="select * from user_master where user_id=$user_id";
					  $res1=mysqli_query($cn,$q1);
					  if($row1=mysqli_fetch_array($res1))
						  
					  {
						print $row1['user_name'];
					  }
					  ?></td>				
					   </tr>
					  <?php
						}
					  ?>
					  </table>
					   <div class="send_bt"><input type="submit" value="ACCEPT" class="btn btn-success"></div>
					 <div class="send_bt"><input type="submit" value="REJECT" class="btn btn-danger"></div>

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