<?php 
		include("connect.php");

		$birth_id=$_POST['birth_id'];
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
		
		$q="update birth_application set birth_childname='$birth_childname',birth_fathername='$birth_fathername',birth_mothername='$birth_mothername',birth_date='$birth_date',birth_gender='$birth_gender',birth_bornaddress='$birth_bornaddress',birth_permanentaddress='$birth_permanentaddress',birth_pincode='$birth_pincode',birth_place='$birth_place',birth_email='$birth_email',birth_mobile='$birth_mobile' where birth_id='$birth_id'";
		print $q;
		mysqli_query($cn,$q);
		echo "Record saved...";

?>