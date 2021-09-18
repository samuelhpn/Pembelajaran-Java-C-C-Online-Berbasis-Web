<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}

button {
  background-color: #9e32a8;
  color: white;
  padding: 14px 20px;
  margin: 10px 152px;
  border: none;
  cursor: pointer;
  width: 16%;
}
ul {
  text-align: left;
  text-indent: 100px;
	}


</style>
</head>
<body>
<?php 

<form action="submit.php?soal=<?= $_GET['soal'];?>" method="post">
  <div class="container">
	  </ul>
	  <br>
     <p><textarea name="submit" rows="10" cols="30"></textarea>
  <br>
    <button type="submit">Submit</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>

</body>
</html>


