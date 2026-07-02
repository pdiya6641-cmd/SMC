<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
           <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
				  <center>

                     <h1 class="contact_taital">Birth Data</h1>
                     <form action="">
					 
                       <table class="table table-striped" border="2px solid red">
					   <?php
					   		$birth_id=$_GET['birth_id'];

					  include ("connect.php");
					  $q="select * from birth_application where birth_id='$birth_id'";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  
					   <tr>
					   <th>BIRTH ID</th>
					   <td><?php print $row['birth_id'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH CHILDNAME</th>
					   <td><?php print $row['birth_childname'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH FATHERNAME</th>
					   <td><?php print $row['birth_fathername'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH MOTHERNAME</th>
					   <td><?php print $row['birth_mothername'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH DATE</th>
					  <td><?php print $row['birth_date'];?></td>
					   </tr>
					   
					   <tr>
					   <th>BIRTH GENDER</th>
					   <td><?php print $row['birth_gender'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH BORNADDRESS</th>
					  <td><?php print $row['birth_bornaddress'];?></td>
					   </tr>
					   
					   <tr>
					   <th>BIRTH PARMENENTADDRESS</th>
					   <td><?php print $row['birth_permanentaddress'];?></td>
					   </tr>

						<tr>
					   <th>BIRTH PINCODE</th>
					   <td><?php print $row['birth_pincode'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH PLACE</th>
					   <td><?php print $row['birth_place'];?></td>
						</tr>
						
						<tr>
					   <th>BIRTH EMAIL</th>
					   <td><?php print $row['birth_email'];?></td>
					   </tr>

						<tr>
					   <th>BIRTH MOBILE</th>
					   <td><?php print $row['birth_mobile'];?></td>
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
					 </center>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
<?php
include ("footer.php");
?> 