<?php 
		include("connect.php");

		$div_id=$_POST['div_id'];
		
		$husband_name=$_POST['husband_name'];
		$husband_nationality=$_POST['husband_nationality'];
		$husband_date_of_birth=$_POST['husband_date_of_birth'];
		$wife_name=$_POST['wife_name'];
		$wife_nationality=$_POST['wife_nationality'];
		$wife_date_of_birth=$_POST['wife_date_of_birth'];
		$date_of_divorce=$_POST['date_of_divorce'];
		$city_and_country_of_divorce=$_POST['city_and_country_of_divorce'];
		$other_relevant_info=$_POST['other_relevant_info'];
		$translators_name=$_POST['translators_name'];
			$witness_id=$_POST['witness_id'];

		$witness_name=$_POST['witness_name'];
		$witness_mobile=$_POST['witness_mobile'];
		
		
		$mrg_photos="mrg_photos/".$_FILES['mrg_photos']['name'];
		move_uploaded_file($_FILES['mrg_photos']['tmp_name'],$mrg_photos);
		
		$translators_signature="translators_signature/".$_FILES['translators_signature']['name'];
		move_uploaded_file($_FILES['translators_signature']['tmp_name'],$translators_signature);
		
		$witness_aadhar_card="witness_aadhar_card/".$_FILES['witness_aadhar_card']['name'];
		move_uploaded_file($_FILES['witness_aadhar_card']['tmp_name'],$witness_aadhar_card);
		
		$q="update divorce_application set husband_name='$husband_name',husband_nationality='$husband_nationality',husband_date_of_birth='$husband_date_of_birth',wife_name='$wife_name',wife_nationality='$wife_nationality',wife_date_of_birth='$wife_date_of_birth',date_of_divorce='$date_of_divorce',city_and_country_of_divorce='$city_and_country_of_divorce',other_relevant_info='$other_relevant_info',translators_name='$translators_name',witness_id='$witness_id',witness_name='$witness_name',witness_mobile='$witness_mobile',mrg_photos='$mrg_photos',translators_signature='$translators_signature',witness_aadhar_card='$witness_aadhar_card' where div_id=$div_id";
		print $q;

		mysqli_query($cn,$q);

		echo "Record saved...";

?>