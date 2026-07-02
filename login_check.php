<?php
include ("connect.php");

		$username=$_POST['username'];
		$password=$_POST['password'];
		$usertype=$_POST['usertype'];
		
		if($usertype=="admin")
		{
			$q="select * from admin_login where admin_email='$username' and admin_password='$password'";
			
			$res=mysqli_query($cn,$q);
			if($row=mysqli_fetch_array($res))
			{
				session_start();
				$_SESSION["username"]=$username;
				$_SESSION["password"]=$password;
				header("location:admin_home.php");
			}
			else
			{
				echo "Invalid Username or Password....";
			}
		}
		elseif($usertype=="user")
		{
				$q="select * from user_master where user_email='$username' and user_password='$password'";
			
				$res=mysqli_query($cn,$q);
				if($row=mysqli_fetch_array($res))
				{
					session_start();
				$_SESSION["r_username"]=$username;
				$_SESSION["r_password"]=$password;
				$_SESSION["r_userid"]=$row[0];
				
				header("location:register_home.php");
				}
				else
				{
				echo "Invalid Username or Password....";
				}
			
		}
		else
		{
				echo "select usertype first...";
		}
		
?>