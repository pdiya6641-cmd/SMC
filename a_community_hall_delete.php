<?php 
		include("connect.php");

		$ch_id=$_GET['ch_id'];
		
		$q="delete from community_hall where ch_id='$ch_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: a_community_hall_view.php");
?>