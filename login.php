<?php
	include 'koneksi.php';
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	if (!empty($Username) && !empty($Password)) {
		$sql = mysqli_query($connect, "SELECT *  FROM admin WHERE username = '$Username' AND password = '$Password'");
		if ($sql) {
			echo "Anda berhasil masuk!";
			header('location:customer.php');
		} else {
			echo "username dan password salah";
		}
	} else {
		echo "email dan password anda kosong, silahkan diisi.";
		}
?>
