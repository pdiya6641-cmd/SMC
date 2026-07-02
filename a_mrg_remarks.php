<?php 
include ("aheader.php");
?>

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Marriage Data</h1>
                     <form action="">
					 					 
                       <table class="table table-striped" border="2px solid red">
					    <?php
					$mrg_id=$_GET['mrg_id'];

					  include ("connect.php");
					  $q="select * from mrg_application where mrg_id='$mrg_id'";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					 
					   <tr>
					   <th>MRG ID</th>
					   <td><?php print $row['mrg_id'];?></td>
						</tr>
						
						<tr>
					   <th>GROOM NAME </th>
					  <td><?php print $row['groom_name'];?></td>
			   		 </tr>
					   
					   <tr>
					   <th> GROOM FATHERNAME</th>
					  <td><?php print $row['groom_fathername'];?></td>
						</tr>
					   
					   <tr>
					   <th>GROOM MOTHERNAME</th>
					  <td><?php print $row['groom_mothername'];?></td>
					</tr>
					   
					   <tr>
					   <th>GROOM BOD</th>
					  <td><?php print $row['groom_birth_of_date'];?></td>
						</tr>
					   
					   <tr>
					   <th>GROOM ADDRESS</th>
					  <td><?php print $row['groom_address'];?></td>
					   </tr>
					   
					   <tr>
					   <th>GROOM RELIGION</th>
					  <td><?php print $row['groom_religion'];?></td>
					   </tr>
					   
					   <tr>
					   <th>GROOM NATIONALITY</th>
					  <td><?php print $row['groom_nationality'];?></td>
					    </tr>
					   
					   <tr>
					   <th>GROOM MARITAL STATUS</th>
					  <td><?php print $row['groom_marital_status'];?></td>
					   </tr>
					   
					   <tr>
					   <th>GROOM MOBILE </th>
					  <td><?php print $row['groom_mobile'];?></td>
					   </tr>
					   
					   <tr>
					   <th> GROOM EMAIL</th>
					  <td><?php print $row['groom_email'];?></td>
					   </tr>

					   <tr>
					   <th>BRIDE NAME</th>					  
					   <td><?php print $row['bride_name'];?></td>
						</tr>
						
						<tr>
					   <th>BRIDE FATHERNAME</th>
					  <td><?php print $row['bride_fathername'];?></td>
						</tr>
						
						<tr>
					   <th>BRIDE MOTHERNAME</th>
					  <td><?php print $row['bride_mothername'];?></td>
					  </tr>

						<tr>
					   <th>BRIDE BOD</th>
					  <td><?php print $row['bride_birth_of_date'];?></td>
						</tr>
						
						<tr>
					   <th>BRIDE ADDRESS</th>
					  <td><?php print $row['bride_address'];?></td>
						</tr>
						
						<tr>
					   <th>BRIDE RELIGION</th>
					  <td><?php print $row['bride_religion'];?></td>
						</tr>
						
						<tr>
					   <th>BRIDE NATIONALITY</th>
					  <td><?php print $row['bride_nationality'];?></td>
						</tr>
						
						<tr>
					   <th>BRIDE MARITAL STATUS</th>
					  <td><?php print $row['bride_marital_status'];?></td>
					   </tr>
					   
					   <tr>
					   <th>BRIDE MOBILE</th>
					  <td><?php print $row['bride_mobile'];?></td>
					   </tr>
					   
					   <tr>
					   <th>BRIDE EMAIL</th>
					  <td><?php print $row['bride_email'];?></td>
					   </tr>
					   
					   <tr>
					   <th>MRG INVITATION</th>
					  <td><?php print $row['mrg_invitation'];?></td>
					   </tr>
					   
					   <tr>
					   <th>MRG DATE</th>
					  <td><?php print $row['mrg_date'];?></td>
					  </tr>

						<tr>
					   <th>MRG PLACE</th>
					  <td><?php print $row['mrg_place'];?></td>
					   </tr>
					   
					   <tr>
					   <th>MRG PHOTO</th>
					  <td><img width="200px" height="200px" src="<?php print $row['mrg_photo'];?>"></td>
					   </tr>
					   
					   <tr>
					   <th>BRAHMIN ID</th>
					  <td><?php print $row['brahmin_id'];?></td>
					  </tr>
						
						<tr>
					   <th>BRAHMIN NAME</th>
					  <td><?php print $row['brahmin_name'];?></td>
					   </tr>
					   
					   <tr>
					   <th>BRAHMIN AADHAR CARD</th>
					  <td><img width="200px" height="200px" src="<?php print $row['brahmin_aadhar_card'];?>"></td>
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
					  <td><img width="200px" height="200px" src="<?php print $row['mrg_witness_aadhar_card'];?>"></td>
					   </tr>
					   
					   <tr>
					   <th>WITNESS MOBILE</th>
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