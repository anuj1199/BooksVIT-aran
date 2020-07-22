<?php
	session_start();
	
	$email=$_POST['email'];
	
	
	
	$email=stripcslashes($email);
	
	
	$email=mysql_real_escape_string($email);
	
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("studentlogin");
	
	
	if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM users where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_email=$row['email'];
	$email=$row['email'];
	$password=$row['password'];
	if($email==$fetch_email) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: mathuranuj01@gmail.com" . "\r\n" .
                "CC: mathuranuj01@gmal.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid email';
				}
}
?>