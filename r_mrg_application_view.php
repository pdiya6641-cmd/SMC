<?php 
include ("rheader.php");
?>

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Marriage Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped table-responsive">
					   <tr>
					   <th>MRG ID</th>
					   <th>GROOM NAME </th>
					   <th> GROOM FATHERNAME</th>
					   <th>GROOM MOTHERNAME</th>
					   <th>GROOM BOD</th>
					   <th>GROOM ADDRESS</th>
					   <th>GROOM RELIGION</th>
					   <th>GROOM NATIONALITY</th>
					   <th>GROOM MARITAL STATUS</th>
					   <th>GROOM MOBILE </th>
					   <th> GROOM EMAIL</th>

					   
					   <th>BRIDE NAME</th>
					   <th>BRIDE FATHERNAME</th>
					   <th>BRIDE MOTHERNAME</th>
					   <th>BRIDE BOD</th>
					   <th>BRIDE ADDRESS</th>
					   <th>BRIDE RELIGION</th>
					   <th>BRIDE NATIONALITY</th>
					   <th>BRIDE MARITAL STATUS</th>
					   <th>BRIDE MOBILE</th>
					   <th>BRIDE EMAIL</th>
					   
					   <th>MRG INVITATION</th>
					   <th>MRG DATE</th>
					   <th>MRG PLACE</th>
					   <th>MRG PHOTO</th>
					   
					   
					   <th>BRAHMIN ID</th>
					   <th>BRAHMIN NAME</th>
					   <th>BRAHMIN AADHAR CARD</th>
					   
					   <th>WITNESS ID</th>
					   <th>WITNESS NAME</th>
					   <th>WITNESS AADHAR CARD</th>
					   <th>WITNESS MOBILE</th>
					    <th>USER NAME</th>

					   <th>Delete</th>
					   <th>View</th>

					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from mrg_application where user_id=$user_id";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['mrg_id'];?></td>
					  <td><?php print $row['groom_name'];?></td>
					  <td><?php print $row['groom_fathername'];?></td>
					  <td><?php print $row['groom_mothername'];?></td>
					  <td><?php print $row['groom_birth_of_date'];?></td>
					  <td><?php print $row['groom_address'];?></td>
					  <td><?php print $row['groom_religion'];?></td>
					  <td><?php print $row['groom_nationality'];?></td>
					  <td><?php print $row['groom_marital_status'];?></td>
					  <td><?php print $row['groom_mobile'];?></td>
					  <td><?php print $row['groom_email'];?></td>
					  
					  <td><?php print $row['bride_name'];?></td>
					  <td><?php print $row['bride_fathername'];?></td>
					  <td><?php print $row['bride_mothername'];?></td>
					  <td><?php print $row['bride_birth_of_date'];?></td>
					  <td><?php print $row['bride_address'];?></td>
					  <td><?php print $row['bride_religion'];?></td>
					  <td><?php print $row['bride_nationality'];?></td>
					  <td><?php print $row['bride_marital_status'];?></td>
					  <td><?php print $row['bride_mobile'];?></td>
					  <td><?php print $row['bride_email'];?></td>
					  
					  <td><?php print $row['mrg_invitation'];?></td>
					  <td><?php print $row['mrg_date'];?></td>
					  <td><?php print $row['mrg_place'];?></td>
					  <td><img width="200px" height="200px" src="<?php print $row['mrg_photo'];?>"></td>
       
					  <td><?php print $row['brahmin_id'];?></td>
					  <td><?php print $row['brahmin_name'];?></td>
					  <td><img width="200px" height="200px" src="<?php print $row['brahmin_aadhar_card'];?>"></td>
					  
					  <td><?php print $row['witness_id'];?></td>
					  <td><?php print $row['witness_name'];?></td>
					  <td><img width="200px" height="200px" src="<?php print $row['mrg_witness_aadhar_card'];?>"></td>
					  <td><?php print $row['witness_mobile'];?></td>
					  					  <td><?php
					  $user_id=$row['user_id'];
					  $q1="select * from user_master where user_id=$user_id";
					  $res1=mysqli_query($cn,$q1);
					  if($row1=mysqli_fetch_array($res1))
						  
					  {
						print $row1['user_name'];
					  }
					  ?></td>

					 <!--<td><a href="mrg_editdata.php?mrg_id=<?php print $row['mrg_id'];?>">Edit</a></td>-->
					 
					 <td><a class="btn btn-danger" href="r_mrg_delete.php?mrg_id=<?php print $row['mrg_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					 <td><a class="btn btn-info" href="r_mrg_remarks.php?mrg_id=<?php print $row['mrg_id'];?>"><img src="images/eye1.png" width="40px" height="40px">View</a></td>
					 
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