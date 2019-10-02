<?php
require ('../koneksi.php');
session_start();
if (isset($_POST['login'])) {
$user = mysql_real_escape_string(htmlentities($_POST['username']));
$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));

    $sql = mysqli_query($conf, "SELECT * from `users` WHERE `username`= '$user' and `password`= '$pass'") or die(mysqli_error($conf));
	
	//(T_T)
	
	if(mysqli_num_rows($sql) == 0){
      echo '<script language="javascript">alert("Wrong username or password!"); document.location="login.php";</script>';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if ($row['level'] == "CUSTOMER"){
			$_SESSION['username'] = $user;
			header('Location: index.php');
		}elseif ($row['level'] == "ADMIN"){
			$_SESSION['unique'] = $user;
			header('Location: ../unique/index.php');
		}else{
			echo '<script language="javascript">alert("No access!"); document.location="login.php";</script>';
		}
	}
}
?>