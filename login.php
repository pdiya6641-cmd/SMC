<?php 
include ("vheader.php");

?>


      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="contact_taital">LOGIN</h1>
                     <form action="login_check.php" method="post">
                        <div class="mail_section_1">
						
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
						</div>
						<input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter user name" name="username">
						</div>
						
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-default">Password</span>
						</div>
						<input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter password" name="password">
						</div>
						
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						</div>
						<select name="usertype" class="mail_text">
						   <option value="none">Select User</option>
						   <option value="admin">Administrator</option>
						   <option value="user">User</option>
						   </select>
						</div>
						
							
                       <div class="send_bt"><input type="submit" value="LOGIN" class="btn btn-primary"></div>
						   
						   
                        </div>
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