<?php 
		include("connect.php");

		$div_id=$_GET['div_id'];
		
		$q="delete from divorce_application where div_id='$div_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: a_divorce_application_view.php");
?>