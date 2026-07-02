<?php 
include ("aheader.php");
?>

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Hall Booking Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped table-responsive">
					   <tr>
					   <!--<th>BOOKING ID</th>-->
					   <th>FIRST NAME</th>
					   <th>MIDDLE NAME</th>
					   <th>SURNAME</th>
					   <th>ADDRESS</th>
					   <th>MOBILE</th>
					   <th>OTHER MOBILE NO</th>
					   <th>EMAIL</th>
					   <th>ID PROOF</th>
					   <th>ID PROOF NO</th>
					   <th>GST NO</th>
					   <th>COMMUNITY NAME </th>
					   <th>PURPOSE OF BOOKING</th>
					   <th>SELECT DATE</th>
					   <th>NO OF DAYS</th>
					   <th>USER NAME</th>

					   <th>Delete</th>
					   <th>View</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from hallbooking";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <!--<td><?php print $row['booking_id'];?></td>-->
					  <td><?php print $row['first_name'];?></td>
					  <td><?php print $row['middle_name'];?></td>
					  <td><?php print $row['surname'];?></td>
					  <td><?php print $row['address'];?></td>
					  <td><?php print $row['mobile'];?></td>
					  <td><?php print $row['other_mobile_no'];?></td>
					  <td><?php print $row['email'];?></td>
					  <td><?php print $row['id_proof'];?></td>
					  <td><?php print $row['id_proof_no'];?></td>
					  <td><?php print $row['gst_no'];?></td>
					  
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

					  <td><?php print $row['purpose_of_booking'];?></td>
					  <td><?php print $row['select_date'];?></td>
					  <td><?php print $row['no_of_days'];?></td>
					  					  <td><?php
					  $user_id=$row['user_id'];
					  $q1="select * from user_master where user_id=$user_id";
					  $res1=mysqli_query($cn,$q1);
					  if($row1=mysqli_fetch_array($res1))
						  
					  {
						print $row1['user_name'];
					  }
					  ?></td>

					  <!--<td><a href="hallbooking_editdata.php?booking_id=<?php print $row['booking_id'];?>">Edit</a></td>-->
					  <td><a class="btn btn-danger" href="a_hallbooking_delete.php?booking_id=<?php print $row['booking_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					  <td><a class="btn btn-info" href="a_hallbooking_remarks.php?booking_id=<?php print $row['booking_id'];?>"><img src="images/eye1.png" width="40px" height="40px">View</a></td>
					  
					  </tr>
					  <?php
						}
					  ?>
					  </table>
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