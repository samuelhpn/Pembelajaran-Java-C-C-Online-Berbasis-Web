<?php

session_start();

unset($_SESSION['nama']);
unset($_SESSION['npm']);

header("Location:login.php");





?>