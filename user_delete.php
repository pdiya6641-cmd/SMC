<?php 
		include("connect.php");

		$user_id=$_GET['user_id'];
		
		$q="delete from user_master where user_id='$user_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record deleted...";
		header("Location: user_view.php");
?>