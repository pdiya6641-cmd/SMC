<?php 
		include("connect.php");

		$booking_id=$_POST['booking_id'];
		
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
		
		$q="update hallbooking set first_name='$first_name',middle_name='$middle_name',surname='$surname',address='$address',mobile='$mobile',other_mobile_no='$other_mobile_no',email='$email',id_proof='$id_proof',id_proof_no='$id_proof_no',gst_no='$gst_no',purpose_of_booking='$purpose_of_booking',select_date='$select_date',no_of_days='$no_of_days' where booking_id='$booking_id'";
		

		mysqli_query($cn,$q);

		echo "Record saved...";

?>