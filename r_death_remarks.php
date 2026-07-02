<?php 
include ("rheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Death Data</h1>
                     <form action="">
					  
					 
                       <table class="table table-striped" border="1px solid red">
					   <?php
					   $death_id=$_GET['death_id'];

					  include ("connect.php");
					  $q="select * from death_application where death_id='$death_id'";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					 
					   <tr>
					   <th>DEATH ID</th>
					  <td><?php print $row['death_id'];?></td>
					   </tr>
					   
					   <tr>
					   <th>DEATH DATE</th>
					  <td><?php print $row['death_date'];?></td>
					   </tr>
					   
					   <tr>
					   <th>DEATH TIME</th>
					   	<td><?php print $row['death_time'];?></td>
						</tr>
						
						<tr>
					   <th>GENDER</th>
					  <td><?php print $row['death_gender'];?></td>
					   </tr>
					   
					   <tr>
					   <th>NAME</th>
					  <td><?php print $row['death_name'];?></td>
					  </tr>

						<tr>
					   <th>FAMILY DETAIL</th>
                      <td>Father Name :<?php print $row['death_fathername'];?><br>
					  Mother Name :<?php print $row['death_mothername'];?></td>
					  </tr>
						
						<tr>
					   <th>DEATH PLACE</th>
					  <td><?php print $row['death_place'];?></td>
					  </tr>

						<tr>
					   <th>DEATH REASON</th>
					  <td><?php print $row['death_reason'];?></td>
					</tr>
					
					<tr>
					   <th>DEATH ADDRESS</th>
					  <td><?php print $row['death_address'];?></td>
					   </tr>
					   
					   <tr>
					   <th>FAMILY CONTACT</th>
					  <td><?php print $row['death_familycontact'];?></td>
						</tr>
						
						<tr>
					   <th>AADHAR CARD NO</th>
					  <td><?php print $row['death_aadhar_card_no'];?></td>
					  </tr>

					<tr>
					   <th>AADHAR CARD</th>
					  <td><img height="100px" width="100px" src="<?php print $row['death_aadhar_card'];?>"></td>
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