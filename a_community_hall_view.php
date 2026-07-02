<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Community Hall Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped">
					   <tr>
					   <th>COMMUNITY HALL ID</th>
					   <th>COMMUNITY HALL NAME</th>
					   <th>COMMUNITY HALL ADDRESS</th>
					   <th>COMMUNITY HALL CAPACITY</th>
					   <th>COMMUNITY HALL LOCATION PHOTO</th>
					   <th>COMMUNITY HALL CONTACT PERSON</th>
					   <th>COMMUNITY HALL CONTACT NO</th>
					   

					   <th>Edit</th>
					   <th>Delete</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from community_hall";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['ch_id'];?></td>
					  <td><?php print $row['ch_name'];?></td>
					  <td><?php print $row['ch_address'];?></td>
					  <td><?php print $row['ch_capacity'];?></td>
					  <td><img src="<?php print $row['ch_location_photo'];?>" height="100px" width="100px"></td>
					  <td><?php print $row['ch_contact_person'];?></td>
					  <td><?php print $row['ch_contact_no'];?></td>

					  <td><a class="btn btn-info" href="a_community_hall_editdata.php?ch_id=<?php print $row['ch_id'];?>"><img src="images/edit1.png" width="40px" height="40px">Edit</a></td>
					  <td><a class="btn btn-danger"href="a_community_hall_delete.php?ch_id=<?php print $row['ch_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					  
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