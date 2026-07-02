<?php 
		include("connect.php");

		$death_id=$_GET['death_id'];
		
		$q="delete from death_application where death_id='$death_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: a_death_application_view.php");
?>