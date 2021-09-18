<?php
require_once("config.php");
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if (!empty($nama) && !empty($npm) && !empty($email) && !empty($password)) {
$strSQL = "insert into user (nama,npm,email,password) values('$nama','$npm','$email','$password')";
$strSQL1 = "insert into java(npm) values ('$npm')";
$strSQL2 = "insert into cpp(npm) values ('$npm')";
$strSQL3 = "insert into c(npm) values ('$npm')";
$qry = mysqli_query($con, $strSQL);
$qry = mysqli_query($con, $strSQL1);
$qry = mysqli_query($con, $strSQL2);
$qry = mysqli_query($con, $strSQL3);
echo '<script language="javascript">
	alert("Daftar berhasil");
	window.location="login.php";
	</script>';
	exit();
} else {
echo '<script language="javascript">
	alert("Daftar Gagal");
	window.location="daftar.php";
	</script>';
	exit();
}

mysqli_close($conn);
?>

</body>
</html>