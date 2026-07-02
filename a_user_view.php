<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">User data view</h1>
                     <form action="">
					 
                       <table class="table table-striped">
					   <tr>
					   <th>Id</th>
					   <th>Name</th>
					   <th>Address</th>
					   <th>City</th>
					   <th>Pincode</th>
					   <th>Email</th>
					   <th>Password</th>
					   <th>Mobile</th>
					   <th>Delete</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from user_master";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['user_id'];?></td>
					  <td><?php print $row['user_name'];?></td>
					  <td><?php print $row['user_address'];?></td>
					  <td><?php print $row['user_city'];?></td>
					  <td><?php print $row['user_pincode'];?></td>
					  <td><?php print $row['user_email'];?></td>
					  <td><?php print $row['user_password'];?></td>
					  <td><?php print $row['user_mobile'];?></td>
					  <!--<td><a href="user_editdata.php?user_id=<?php print $row['user_id'];?>">Edit</a></td>-->
					  <td><a class="btn btn-danger" href="user_delete.php?user_id=<?php print $row['user_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
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