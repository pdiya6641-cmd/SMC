<?php 
include ("rheader.php");
?>
  
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Divorce Data</h1>
                     <form action="">
					 
                       <table class="table table-striped" border="2px solid black">
					    <?php
						$div_id=$_GET['div_id'];

					  include ("connect.php");
					  $q="select * from divorce_application where div_id='$div_id'";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					   <tr>
					   <th>DIVORCE ID</th>
					  <td><?php print $row['div_id'];?></td>
					  </tr>

						<tr>
					   <th>HUSBAND NAME</th>
					  <td><?php print $row['husband_name'];?></td>
						</tr>
						
						<tr>
					   <th>HUSBAND NATIONALITY</th>
					  <td><?php print $row['husband_nationality'];?></td>
						</tr>
						
						<tr>
					   <th>HUSBAND DOB</th>
					  <td><?php print $row['husband_date_of_birth'];?></td>
						</tr>
						
						<tr>
					   <th>WIFE NAME</th>
					  <td><?php print $row['wife_name'];?></td>
						</tr>
						
						<tr>
					   <th>WIFE NATIONALITY</th>
					  <td><?php print $row['wife_nationality'];?></td>
						</tr>
						
						<tr>
					   <th>WIFE DOB</th>
					  <td><?php print $row['wife_date_of_birth'];?></td>
						</tr>
						
						<tr>
					   <th>DATE OF DIVORCE</th>
					  <td><?php print $row['date_of_divorce'];?></td>
						</tr>
						
						<tr>
					   <th>CITY & COUNTRY OF DIVORCE</th>
					  <td><?php print $row['city_and_country_of_divorce'];?></td>
						</tr>
						
						<tr>
					   <th>OTHER RELEVANT INFO.</th>
					  <td><?php print $row['other_relevant_info'];?></td>
					  </tr>

						<tr>
					   <th>MARRIAGE PHOTO</th>
					  <td><img width="200px" height="200px" src="<?php print $row['mrg_photos'];?>"></td>
					   </tr>
					   
					   <tr>
					   <th>TRANSLATOR'S SIGN</th>
					  <td><img width="200px" height="200px" src="<?php print $row['translators_signature'];?>"></td>
						</tr>
						
						<tr>
					   <th>TRANSLATOR'S NAME</th>
					  <td><?php print $row['translators_name'];?></td>
						</tr>
						
						<tr>
					   	<th>WITNESS ID</th>
					  <td><?php print $row['witness_id'];?></td>
						</tr>
						
						<tr>
					   <th>WITNESS NAME</th>
					  <td><?php print $row['witness_name'];?></td>
					  </tr>

						<tr>
					   <th>WITNESS AADHAR CARD</th>
					   <td><img width="200px" height="200px" src="<?php print $row['witness_aadhar_card'];?>"></td>
					   </tr>
					   
					   <tr>
					   <th>WITNESS MOBILE NO.</th>
					  <td><?php print $row['witness_mobile'];?></td>
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
					  ?>
					  </td>

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