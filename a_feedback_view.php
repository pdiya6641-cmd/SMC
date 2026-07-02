<?php 
include ("aheader.php");
?>
  
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <h1 class="contact_taital">Feedback Data View</h1>
                     <form action="">
					 
                       <table class="table table-striped">
					   <tr>
					   <th>Feedback_Id</th>
					   <th>Message</th>
					   <th>Date</th>
					   <th>User Name</th>
					   </tr>
					   
					  <?php
					  include ("connect.php");
					  $q="select * from feedback_master";
					  $res=mysqli_query($cn,$q);
					  
					  while($row=mysqli_fetch_array($res))
					  {

					  ?>
					  <tr>
					  <td><?php print $row['feedback_id'];?></td>
					  <td><?php print $row['feedback_message'];?></td>
					  <td><?php print $row['feedback_date'];?></td>
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