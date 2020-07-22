<?php
	if(isset($_GET["email"])&& isset($_GET["token"]))
	{
		$connection=new mysqli("localhost", "root", "", "studentlogin");
		$email=$connection->real_escape_string($_GET["email"]);
		$token=$connection->real_escape_string($_GET["token"]);
		$data=$connection->query("SELECT id FROM users WHERE email='$email' AND token='$token'");
		
		if($data->num_rows>0)
		{
			$str="01234qwrrtgdfgedgyrtter";
			$str=str_shuffle($str);
			$str=substr($str,0,15);
			$password=sha1($str);
			$connection->query("UPDATE users SET password='$password',token='' WHERE email='$email'");
			
			echo"Your new password is: $str";
		}
		else
		{
			echo"Please check your link";
		}
	}
	else
	{
		header("Location: studen login.php");
		exit();
	}
?>	