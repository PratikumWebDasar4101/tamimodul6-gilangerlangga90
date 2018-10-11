<?php  
session_start();
error_reporting(0);
$user = array(
				"username" => "mahasiswa",
				"password" => "1234"
			);
if (isset($_POST['masuk'])) {
	if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
		$_SESSION['username'] = $_POST['username'];
		header("Location: halamanawal.php");
	}else{
		echo "Username atau Password Salah!";
	}
}
?>