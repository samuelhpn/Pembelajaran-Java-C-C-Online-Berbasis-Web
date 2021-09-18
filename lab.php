<?php

session_start();

if(!isset($_SESSION["nama"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['nama']))
{
  $nama=$_SESSION['nama'];
  $npm =$_SESSION['npm'];
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
<style>
body {
    background-color: #e0dee0 ;
    background: url("img/7.png") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    
    
}
.cls {
  background: #fff;
  padding: 1em 2em 11em;
  max-width: 600px;
  margin: 10px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
  }
.clr {
  background: #fff;
  padding: 1em 2em 11em;
  max-width: 600px;
  margin: 50px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
  }
</style>
        <title>Mulai</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script> 
</head>
<body>
<?php
require_once("header.php");
require_once("config.php");
$soal = $_GET['soal'];
$lg = $_GET['lg'];
?>


<div class="clr">
<?php
$nomor = 'soal'.$soal;
$qr = mysqli_query($con, "select $nomor from $lg where npm = '$npm'");
$res = mysqli_fetch_row($qr);
$res[0];
if ($res[0] == 1){
  echo "<div class='alert alert-success' role='alert'>
  Status = Sudah Dikerjakan
</div>";
}
else "Status : Blom dikerjakan" ; 
?>

<?php
$conn= mysqli_connect("localhost","root","","pi_soal");
$query = mysqli_query($conn, "select soal from kasus where nomor = $soal");
$jml = mysqli_fetch_array($query);
echo "<font color='#ff0000'>Gunakan Class Main agar tidak terjadi erorr!!</font><br>";
echo "<br>"; 
echo nl2br(htmlspecialchars($jml['soal']));
?>
</div>
<div class="cls">

<br>
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="<?= $_GET['lg']?>"><?= $_GET['lg']?></option>
</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>

</form>
<script type="text/javascript">
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");
     });
  });


</script>

<script>
//wait for page load to initialize script

$(document).ready(function(){
  //listen for form submission
  $('#form').on('submit', function(e){
    //prevent form from submitting and leaving page
    e.preventDefault();
    // AJAX 
    $.ajax({
          type: "POST", //type of submit
          cache: false, //important or else you might get wrong data returned to you
          url: "compile.php", //destination
          datatype: "html", //expected data format from process.php
          data: $('form').serialize(), //target your form's data and serialize for a POST
          success: function(result) { // data is the var which holds the output of your process.php

              // locate the div with #result and fill it with returned data from process.php
              $('#div').html(result);
          }
      });
  });
});
</script>

<form action="" method="POST" enctype="multipart/form-data" >
<label for="out">Output</label>
<textarea id='div' class="form-group" name="output" readonly rows="10" cols="50"></textarea><br><br>
<input type="submit" id="sbt" class="btn btn-success"  value="Submit"><br><br><br>
</form>
<?php
if ($_POST) {
$output=$_POST["output"];
$output= rtrim($output);
$sql = mysqli_query($conn, "select * from kasus where jawab = '$output' and nomor = '$soal'");
$hasil = mysqli_num_rows($sql);
if ($hasil) {
  $ins = "UPDATE $lg SET `$nomor`= '1' where npm = '$npm'";
  mysqli_query($con, $ins);
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
}
?>


</body>
</html>
