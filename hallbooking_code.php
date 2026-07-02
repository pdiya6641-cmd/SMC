<?php 
		include("connect.php");

		$user_id=$_POST['user_id'];
		$first_name=$_POST['first_name'];
		$middle_name=$_POST['middle_name'];
		$surname=$_POST['surname'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$other_mobile_no=$_POST['other_mobile_no'];
		$email=$_POST['email'];
		$id_proof=$_POST['id_proof'];
		$id_proof_no=$_POST['id_proof_no'];
		$gst_no=$_POST['gst_no'];
		/*$category=$_POST['category'];
		$hall_name=$_POST['hall_name'];*/
		$purpose_of_booking=$_POST['purpose_of_booking'];
		$select_date=$_POST['select_date'];
		$no_of_days=$_POST['no_of_days'];
		
		$q="insert into hallbooking(user_id,first_name,middle_name,surname,address,mobile,other_mobile_no,email,id_proof,id_proof_no,gst_no,purpose_of_booking,select_date,no_of_days)values(1,'$first_name','$middle_name','$surname','$address','$mobile','$other_mobile_no','$email','$id_proof','$gst_no','$id_proof_no','$purpose_of_booking','$select_date','$no_of_days')";
		

		mysqli_query($cn,$q);

		echo "Record saved...";

?>