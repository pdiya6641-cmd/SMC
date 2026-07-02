
<?php

	$s_id =$_GET['s_id'];
	
	if($s_id=="10")
	{
		header("location:birth_application.php");
		
	}
	elseif($s_id=="11")
	{
		header("location:death_application.php");
	}
	elseif($s_id=="12")
	{
		header("location:mrg_application.php");
	}
	elseif($s_id=="13")
	{
		header("location:divorce_application.php");
	}
	elseif($s_id=="14")
	{
		header("location:community_hall.php");
	}
	else
	{
		print("not available");
	}
	
			
		
		
?>

