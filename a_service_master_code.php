<?php 
		include("connect.php");

		$s_name=$_POST['s_name'];
		$s_description=$_POST['s_description'];
		
		$s_icon="s_icon/".$_FILES['s_icon']['name'];
		move_uploaded_file($_FILES['s_icon']['tmp_name'],$s_icon);
		
		$q="insert into service_master(s_name,s_description,s_icon)values('$s_name','$s_description','$s_icon')";
		print $q;
		mysqli_query($cn,$q);

		echo "Record saved...";

?>