<?php
session_start();
require_once("config.php");
$nama = $_POST['nama'];
$password = md5($_POST['password']);
if (!empty($nama) && !empty($password)) {
	$sql = mysqli_query($con, "select * from user where nama = '$nama' and password = '$password'");
	$hasil = mysqli_num_rows($sql);
	$data = mysqli_fetch_array($sql);
	if($hasil) {
		$_SESSION['nama'] = $data["nama"];
		$_SESSION['npm'] = $data["npm"];
		
		header("location:Home.php");
	} else {
		echo '<script language="javascript">
		alert("Userid atau Password Yang anda Masukkan Salah");
		window.location="login.php";
		</script>';
		exit();
	}
}
else {
	echo '<script language="javascript">
	alert("Tidak Terdaftar");
	window.location="login.php";
	</script>';
	exit();
}
?>
