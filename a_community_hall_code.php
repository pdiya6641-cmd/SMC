<?php 
		include("connect.php");

		$ch_name=$_POST['ch_name'];
		$ch_address=$_POST['ch_address'];
		$ch_capacity=$_POST['ch_capacity'];
		$ch_contact_person=$_POST['ch_contact_person'];
		$ch_contact_no=$_POST['ch_contact_no'];
		
		$ch_location_photo="ch_location_photo/".$_FILES['ch_location_photo']['name'];
		move_uploaded_file($_FILES['ch_location_photo']['tmp_name'],$ch_location_photo);
		
		$q="insert into community_hall(ch_name,ch_address,ch_capacity,ch_contact_person,ch_contact_no,ch_location_photo)values('$ch_name','$ch_address','$ch_capacity','$ch_contact_person','$ch_contact_no','$ch_location_photo')";
		print $q;										
		mysqli_query($cn,$q);

		echo "Record saved...";

?>