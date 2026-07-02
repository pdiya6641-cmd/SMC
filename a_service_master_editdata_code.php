<?php 
		include("connect.php");

		$s_id=$_POST['s_id'];
		
		$s_name=$_POST['s_name'];
		$s_description=$_POST['s_description'];
		
		$s_icon="s_icon/".$_FILES['s_icon']['name'];
		move_uploaded_file($_FILES['s_icon']['tmp_name'],$s_icon);
		
		$q="update service_master set s_name='$s_name',s_description='$s_description',s_icon='$s_icon' where s_id='$s_id'";
		
		mysqli_query($cn,$q);

		echo "Record saved...";

?>