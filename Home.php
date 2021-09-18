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
        <title>Mulai</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
require_once("header.php");
require_once("menu.php");
?>


</body>
</html>
