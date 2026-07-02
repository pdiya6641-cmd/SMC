<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Death Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped table-responsive">
					   <tr>
					   <th>DEATH ID</th>
					   <th>DEATH DATE</th>
					   <th>DEATH TIME</th>
					   <th>GENDER</th>
					   <th>NAME</th>
					   <th>FAMILY DETAIL</th>
					   <th>DEATH PLACE</th>
					   <th>DEATH REASON</th>
					   <th>DEATH ADDRESS</th>
					   <th>FAMILY CONTACT</th>
					   <th>AADHAR CARD NO</th>
					   <th>AADHAR CARD</th>
					   <th>USER NAME</th>

					   <th>Delete</th>
					   <th>View</th>

					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from death_application";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['death_id'];?></td>
					  <td><?php print $row['death_date'];?></td>
					  <td><?php print $row['death_time'];?></td>
					  <td><?php print $row['death_gender'];?></td>
					  <td><?php print $row['death_name'];?></td>
					  <td>Father Name :<?php print $row['death_fathername'];?><br>
					  Mother Name :<?php print $row['death_mothername'];?></td>
					  <td><?php print $row['death_place'];?></td>
					  <td><?php print $row['death_reason'];?></td>
					  <td><?php print $row['death_address'];?></td>
					  <td><?php print $row['death_familycontact'];?></td>
					  <td><?php print $row['death_aadhar_card_no'];?></td>

					  <td><img height="100px" width="100px" src="<?php print $row['death_aadhar_card'];?>"></td>
					  					  <td><?php
					  $user_id=$row['user_id'];
					  $q1="select * from user_master where user_id=$user_id";
					  $res1=mysqli_query($cn,$q1);
					  if($row1=mysqli_fetch_array($res1))
						  
					  {
						print $row1['user_name'];
					  }
					  ?></td>
					  
					  <td><a class="btn btn-danger" href="a_death_delete.php?death_id=<?php print $row['death_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					  <td><a class="btn btn-info" href="a_death_remarks.php?death_id=<?php print $row['death_id'];?>"><img src="images/eye1.png" width="40px" height="40px">View</a></td>

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