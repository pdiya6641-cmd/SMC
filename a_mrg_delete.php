<?php 
		include("connect.php");

		$mrg_id=$_GET['mrg_id'];
		
		$q="delete from mrg_application where mrg_id='$mrg_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: a_mrg_application_view.php");
?>