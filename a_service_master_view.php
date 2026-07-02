<?php 
include ("aheader.php");
?>
   
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Service's Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped">
					   <tr>
					   <th>SERVICE ID</th>
					   <th>SERVICE NAME</th>
					   <th>SERVICE DESCRIPTION</th>
					   <th>SERVICE ICON</th>
					   <th>Edit</th>
					   <th>Delete</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from service_master";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['s_id'];?></td>
					  <td><?php print $row['s_name'];?></td>
					  <td><?php print $row['s_description'];?></td>
					  <td><img width="150px" height="150px" src="<?php print $row['s_icon'];?>"></td>
					  <td><a class="btn btn-info" href="service_master_editdata.php?s_id=<?php print $row['s_id'];?>"><img src="images/edit1.png" width="40px" height="40px">Edit</a></td>
					  <td><a class="btn btn-danger" href="service_master_delete.php?s_id=<?php print $row['s_id'];?>"><img src="images/delete1.png" width="40px" height="40px">Delete</a></td>
					  
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