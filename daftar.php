<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {
  background: #fff;
  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 50px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
  }
input[type=text], input[type=password], input[type=number] {
  width: 90%;
  padding: 7px 15px;
  margin: 3px 60px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #9e32a8;
  color: white;
  padding: 12px 16px;
  margin: 8px 292px;
  border: none;
  cursor: pointer;
  width: 16%;
}

</style>
</head>
<body>
<form action = "daftarproses.php" method="post">
	<h2> Silahkan isi Data anda </h2>
		<label for="name"><b>Nama Lengkap</b></label>
    			<input type="text" placeholder="Enter Your Name" name="nama" required>
			<br>
		<label for="npm"><b>NPM</b></label>
    			<input type="text" placeholder="" name="npm" required>
			<br>
		<label for="email"><b>Email</b></label>
    			<input type="text" placeholder="" name="email" required>
			<br>		
		<label for="password"><b>Password</b></label>
    			<input type="password" placeholder="" name="password" required>
			<br>			
<button type="submit"> Daftar</button>		
</form>
</body>
</html>