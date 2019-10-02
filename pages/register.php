<?php
require ('../koneksi.php');
session_start();
if (isset($_POST['login'])) {
$mail = mysql_real_escape_string(htmlentities($_POST['email']));
$user = mysql_real_escape_string(htmlentities($_POST['username']));
$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
$captcha = $_POST['captcha'];

    $sql = mysqli_query($conf, "SELECT * from `users` WHERE `email`= '$mail'") or die(mysqli_error($conf));
	if(mysqli_num_rows($sql) == 0){
		$sql = mysqli_query($conf, "SELECT * from `users` WHERE `username`= '$user'") or die(mysqli_error($conf));
		if(mysqli_num_rows($sql) == 0){
			if($captcha == $_SESSION['captcha']){
				header('Location: main.php?profile');
			}else{
				echo '<script language="javascript">alert("Wrong captcha!"); document.location="signup.php";</script>';
			}
		}else{
			echo '<script language="javascript">alert("Username alredy in use"); document.location="signup.php";</script>';
		}
	}else{
      echo '<script language="javascript">alert("Email alredy registered"); document.location="signup.php";</script>';
	}
}
?>