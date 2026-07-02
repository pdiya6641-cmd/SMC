<?php 
include ("aheader.php");
?>
  
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Divorce Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped table-responsive">
					   <tr>
					   <th>DIVORCE ID</th>
					   <th>HUSBAND NAME</th>
					   <th>HUSBAND NATIONALITY</th>
					   <th>HUSBAND DOB</th>
					   <th>WIFE NAME</th>
					   <th>WIFE NATIONALITY</th>
					   <th>WIFE DOB</th>
					   <th>DATE OF DIVORCE</th>
					   <th>CITY & COUNTRY OF DIVORCE</th>
					   <th>OTHER RELEVANT INFO.</th>
					   <th>MARRIAGE PHOTO</th>
					   <th>TRANSLATOR'S SIGN</th>
					   <th>TRANSLATOR'S NAME</th>
					   	<th>WITNESS ID</th>
					   <th>WITNESS NAME</th>
					   <th>WITNESS AADHAR CARD</th>
					   <th>WITNESS MOBILE NO.</th>
					   <th>USER NAME</th>

					   
					   <th>Delete</th>
					   <th>View</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from divorce_application";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['div_id'];?></td>
					  <td><?php print $row['husband_name'];?></td>
					  <td><?php print $row['husband_nationality'];?></td>
					  <td><?php print $row['husband_date_of_birth'];?></td>
					  
					  <td><?php print $row['wife_name'];?></td>
					  <td><?php print $row['wife_nationality'];?></td>
					  <td><?php print $row['wife_date_of_birth'];?></td>
					  
					  <td><?php print $row['date_of_divorce'];?></td>
					  <td><?php print $row['city_and_country_of_divorce'];?></td>
					  <td><?php print $row['other_relevant_info'];?></td>
					  
					  <td><img width="200px" height="200px" src="<?php print $row['mrg_photos'];?>"></td>
					  <td><img width="200px" height="200px" src="<?php print $row['translators_signature'];?>"></td>
					  
					  <td><?php print $row['translators_name'];?></td>
					  <td><?php print $row['witness_id'];?></td>

					  <td><?php print $row['witness_name'];?></td>
					   <td><img width="200px" height="200px" src="<?php print $row['witness_aadhar_card'];?>"></td>
					  <td><?php print $row['witness_mobile'];?></td>
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

					  
					<!--<td><a class="btn btn-info" href="divorce_editdata.php?div_id=<?php print $row['div_id'];?>">Edit</a></td>-->
					  <td><a class="btn btn-danger" href="a_divorce_delete.php?div_id=<?php print $row['div_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					  <td><a class="btn btn-info" href="a_divorce_remarks.php?div_id=<?php print $row['div_id'];?>"><img src="images/eye1.png" width="40px" height="40px">View</a></td>
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