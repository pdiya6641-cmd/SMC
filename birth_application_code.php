<?php 
		include("connect.php");

		$user_id=$_POST['user_id'];

		$birth_childname=$_POST['birth_childname'];
		$birth_fathername=$_POST['birth_fathername'];
		$birth_mothername=$_POST['birth_mothername'];
		$birth_date=$_POST['birth_date'];
		$birth_gender=$_POST['birth_gender'];
		$birth_bornaddress=$_POST['birth_bornaddress'];
		$birth_permanentaddress=$_POST['birth_permanentaddress'];
		$birth_pincode=$_POST['birth_pincode'];
		$birth_place=$_POST['birth_place'];
		$birth_email=$_POST['birth_email'];
		$birth_mobile=$_POST['birth_mobile'];

		
		$q="insert into birth_application(user_id,birth_childname,birth_fathername,birth_mothername,birth_date,birth_gender,birth_bornaddress,birth_permanentaddress,birth_pincode,birth_place,birth_email,birth_mobile)values(1,'$birth_childname','$birth_fathername','$birth_mothername','$birth_date','$birth_gender','$birth_bornaddress','$birth_permanentaddress','$birth_pincode','$birth_place','$birth_email','$birth_mobile')";
		print $q;

		mysqli_query($cn,$q);
		echo "Record saved...";

?>