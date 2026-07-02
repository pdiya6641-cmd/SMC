<?php 
		include("connect.php");


		$ac_name=$_POST['ac_name'];
		$ac_date=$_POST['ac_date'];
		$ac_description=$_POST['ac_description'];
		
		$q="insert into activity_master(ac_name,ac_date,ac_description)values('$ac_name','$ac_date','$ac_description')";
		print $q;

		mysqli_query($cn,$q);
		echo "Record saved...";

?>