<?php
session_start();

if(isset($_SESSION["nama"]))
{
  header("Location:home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> 

<style>
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 0%;
}



/* Change styles for span and cancel button on extra small screens */

</style>
</head>
<body>
<?php

require_once("header.php");

?>

<form action="loginproses.php" method="post">
  <div class="imgcontainer">
    <img src="img/logo.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name = "nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"> 
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#myModal">Daftar</button>
  </div>
</form>
<!-- Tombol untuk menampilkan modal-->
	
<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<h4 class="modal-title">Daftar Baru</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<form action = "daftarproses.php" method="post">
					<div class="input-group mb-3">
  						<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-default">Username</span>
  						</div>
  						<input type="text" placeholder="Enter Your Name" name="nama" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
    					<div class="input-group mb-3">
  						<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-default">Npm</span>
  						</div>
  						<input type="number" name="npm" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
  						<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  						</div>
  						<input type="text" name="email" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>	
					<div class="input-group mb-3">
  						<div class="input-group-prepend">
    							<span class="input-group-text" id="inputGroup-sizing-default">Password</span>
  						</div>
  						<input type="password" name="password" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>	
					<button type="submit" class="btn btn-success"> Daftar</button>	
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
   </div>
</body>
</html>
