<?php 
include ("rheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Birth Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped table-responsive">
					   <tr>
					   <th>BIRTH ID</th>
					   <th>BIRTH CHILDNAME</th>
					   <th>BIRTH FATHERNAME</th>
					   <th>BIRTH MOTHERNAME</th>
					   <th>BIRTH DATE</th>
					   <th>BIRTH GENDER</th>
					   <th>BIRTH BORNADDRESS</th>
					   <th>BIRTH PARMENENTADDRESS</th>
					   <th>BIRTH PINCODE</th>
					   <th>BIRTH PLACE</th>
					   <th>BIRTH EMAIL</th>
					   <th>BIRTH MOBILE</th>
					   	<th>USER NAME</th>

					   <!--<th>Edit</th>-->
					   <th>Delete</th>
					   <th>View</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from birth_application where user_id=$user_id";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['birth_id'];?></td>
					  <td><?php print $row['birth_childname'];?></td>
					  <td><?php print $row['birth_fathername'];?></td>
					  <td><?php print $row['birth_mothername'];?></td>
					  <td><?php print $row['birth_date'];?></td>
					  <td><?php print $row['birth_gender'];?></td>
					  <td><?php print $row['birth_bornaddress'];?></td>
					  <td><?php print $row['birth_permanentaddress'];?></td>
					  <td><?php print $row['birth_pincode'];?></td>
					  <td><?php print $row['birth_place'];?></td>
					  <td><?php print $row['birth_email'];?></td>
					  <td><?php print $row['birth_mobile'];?></td>
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

					  <!--<td><a href="birth_editdata.php?birth_id=<?php print $row['birth_id'];?>">Edit</a></td>-->
					  <td><a class="btn btn-danger" href="r_birth_delete.php?birth_id=<?php print $row['birth_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					  <td><a class="btn btn-info" href="r_birth_remarks.php?birth_id=<?php print $row['birth_id'];?>"><img src="images/eye1.png" width="30px" height="30px">View</i></a></td>
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