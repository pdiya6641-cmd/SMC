<?php 
		include("connect.php");

		$s_id=$_GET['s_id'];
		
		$q="delete from service_master where s_id='$s_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: service_master_view.php");
?>