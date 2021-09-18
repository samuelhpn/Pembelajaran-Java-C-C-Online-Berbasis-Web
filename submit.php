<?php
session_start();
$nomor=$_GET["soal"];
$output=$_POST["output"];
$output= rtrim($output);
$con = mysqli_connect("localhost", "root", "","pi_soal");
$sql = mysqli_query($con, "select * from kasus where jawab = '$output' and nomor = '$nomor'");
$hasil = mysqli_num_rows($sql);
if ($hasil) {
	echo '<script language="javascript">
		alert("jawaban anda benar");

		</script>';
		exit();
}
else {
	echo '<script language="javascript">
	alert("Jawaban anda salah");
	
		</script>';
		exit();
}
?>