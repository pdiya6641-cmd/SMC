<?php 
		include("connect.php");

		$user_id=$_POST['user_id'];
		$death_date=$_POST['death_date'];
		$death_time=$_POST['death_time'];
		$death_gender=$_POST['death_gender'];
		$death_name=$_POST['death_name'];
		$death_fathername=$_POST['death_fathername'];
		$death_mothername=$_POST['death_mothername'];
		$death_place=$_POST['death_place'];
		$death_reason=$_POST['death_reason'];
		$death_address=$_POST['death_address'];
		$death_familycontact=$_POST['death_familycontact'];
		$death_aadhar_card_no=$_POST['death_aadhar_card_no'];
		$death_aadhar_card="death_aadhar_card/".$_FILES['death_aadhar_card']['name'];
		move_uploaded_file($_FILES['death_aadhar_card']['tmp_name'],$death_aadhar_card);
		
		$q="insert into death_application(user_id,death_date,death_time,death_gender,death_name,death_fathername,death_mothername,death_place,death_reason,death_address,death_familycontact,death_aadhar_card_no,death_aadhar_card)values(1,'$death_date','$death_time','$death_gender','$death_name','$death_fathername','$death_mothername','$death_place','$death_reason','$death_address','$death_familycontact','$death_aadhar_card_no','$death_aadhar_card')";
		

		mysqli_query($cn,$q);

		echo "Record saved...";

?>