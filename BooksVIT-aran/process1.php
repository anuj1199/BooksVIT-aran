<?php
	$username=$_POST['user'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	
	$username=stripcslashes($username);
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$username=mysql_real_escape_string($username);
	$email=mysql_real_escape_string($email);
	$password=mysql_real_escape_string($password);
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("facultylogin");
	
	$result=mysql_query("select * from users where username='$username' and email='$email' and password='$password'")
					or die("Failed to query database" .mysql_error());
	$row=mysql_fetch_array($result);
	if ($row['username']== $username && $row['email'] == $email && $row['password']== $password)
	{
		echo "Login success!! ".$row['username'];
		echo "<script> location.href='fbranch.php'; </script>";
        exit;
	}
	else
	{
		echo "Failed to login";
	}
?>	