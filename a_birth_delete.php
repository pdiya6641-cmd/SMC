<?php 
		include("connect.php");

		$birth_id=$_GET['birth_id'];
		
		$q="delete from birth_application where birth_id='$birth_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: a_birth_application_view.php");
?>