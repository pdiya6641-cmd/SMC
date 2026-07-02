<?php 
		include("connect.php");

		$booking_id=$_GET['booking_id'];
		
		$q="delete from hallbooking where booking_id='$booking_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: a_hallbooking_view.php");
?>