<?php
	session_start();
	include "../page/page_config.php";

	$username = $_POST['username'];
	$password = $_POST['passs'];

	if ($username&&$password){
		$get_log = mysql_query("SELECT * FROM admin WHERE username='$username'");
		$num_log = mysql_num_rows ($get_log);
		if ($num_log!=0){
			while ($row = mysql_fetch_assoc($get_log)){
				$dbusername = $row['username'];
				$dbpassword = $row['passs'];
				$id         = $row['id'];
				
			}
			
			if ($username==$dbusername&&($password)==$dbpassword){
				
				$_SESSION['username'] = $username;
				$_SESSION['id']       = $id;
				
				$update_log = mysql_query("UPDATE admin SET level ='1' WHERE username = '$username' AND passs = '$password'");
					echo "<script> document.location.href='+home.php'; </script>";
				exit();
				
			}else{
				header("location:index.php?pro=sandisalah");
			}
		}else{
			header("location:index.php?pro=idusersalah");
		}
	}else{
		header("location:index.php?pro=idkatasandi");
	}
?>