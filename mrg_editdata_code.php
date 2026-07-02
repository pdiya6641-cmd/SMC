<?php
	include("connect.php");
	
	$mrg_id=$_POST['mrg_id'];
	$groom_name=$_POST['groom_name'];
	$groom_fathername=$_POST['groom_fathername'];
	$groom_mothername=$_POST['groom_mothername'];
	$groom_birth_of_date=$_POST['groom_birth_of_date'];
	$groom_address=$_POST['groom_address'];
	$groom_religion=$_POST['groom_religion'];
	$groom_nationality=$_POST['groom_nationality'];
	$groom_marital_status=$_POST['groom_marital_status'];
	$groom_mobile=$_POST['groom_mobile'];
	$groom_email=$_POST['groom_email'];
	$bride_name=$_POST['bride_name'];
	$bride_fathername=$_POST['bride_fathername'];
	$bride_mothername=$_POST['bride_mothername'];
	$bride_birth_of_date=$_POST['bride_birth_of_date'];
	$bride_address=$_POST['bride_address'];
	$bride_religion=$_POST['bride_religion'];
	$bride_nationality=$_POST['bride_nationality'];
	$bride_marital_status=$_POST['bride_marital_status'];
	$bride_mobile=$_POST['bride_mobile'];
	$bride_email=$_POST['bride_email'];
	
	$mrg_date=$_POST['mrg_date'];
	$mrg_place	=$_POST['mrg_place'];
	$brahmin_id=$_POST['brahmin_id'];
	$brahmin_name=$_POST['brahmin_name'];
	$witness_id=$_POST['witness_id'];
	$witness_name=$_POST['witness_name'];
	$witness_mobile=$_POST['witness_mobile'];
	
	$mrg_photo="mrg_photo/".$_FILES['mrg_photo']['name'];
	move_uploaded_file($_FILES['mrg_photo']['tmp_name'],$mrg_photo);
	
	$mrg_invitation="mrg_invitation/".$_FILES['mrg_invitation']['name'];
	move_uploaded_file($_FILES['mrg_invitation']['tmp_name'],$mrg_invitation);
	
	$mrg_witness_aadhar_card="mrg_witness_aadhar_card/".$_FILES['mrg_witness_aadhar_card']['name'];
	move_uploaded_file($_FILES['mrg_witness_aadhar_card']['tmp_name'],$mrg_witness_aadhar_card);
	
	$brahmin_aadhar_card="brahmin_aadhar_card/".$_FILES['brahmin_aadhar_card']['name'];
	move_uploaded_file($_FILES['brahmin_aadhar_card']['tmp_name'],$brahmin_aadhar_card);
		
	$q="update mrg_application set groom_name='$groom_name',groom_fathername='$groom_fathername',groom_mothername='$groom_mothername',groom_birth_of_date='$groom_birth_of_date',groom_address='$groom_address',groom_religion='$groom_religion',groom_nationality='$groom_nationality',groom_marital_status='$groom_marital_status',groom_mobile='$groom_mobile',groom_email='$groom_email',bride_name='$bride_name',bride_fathername='$bride_fathername',bride_mothername='$bride_mothername',bride_birth_of_date='$bride_birth_of_date',bride_address='$bride_address',bride_religion='$bride_religion',bride_nationality='$bride_nationality',bride_marital_status='$bride_marital_status',bride_mobile='$bride_mobile',bride_email='$bride_email',mrg_invitation='$mrg_invitation',mrg_date='$mrg_date',mrg_place='$mrg_place',mrg_photo='$mrg_photo',brahmin_id='$brahmin_id',brahmin_name='$brahmin_name',brahmin_aadhar_card='$brahmin_aadhar_card',witness_id='$witness_id',witness_name='$witness_name',mrg_witness_aadhar_card='$mrg_witness_aadhar_card',witness_mobile='$witness_mobile' where mrg_id=$mrg_id";
	print $q;
	mysqli_query($cn,$q);
	echo "Recored saved...";
?>