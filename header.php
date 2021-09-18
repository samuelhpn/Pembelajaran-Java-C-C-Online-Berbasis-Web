<?php
$u=0;
if(isset($_SESSION['nama']))
{
  $nama=$_SESSION['nama'];
  $npm =$_SESSION['npm'];
  $u=1;

}

?>
<html>
<head>
<meta name="description" content="">
        <meta name="viewport" content="width=device"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
	
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #7b84e1;">
  <a class="navbar-brand" href="#">Coding Lab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <span class="navbar-text">
    <?php
if($u==1)
                  {
		    echo "<li class=\"space2\"><a href=\"logout.php\">Log Out</a>";
                  }
                  else
                  {
                  }
                ?>   


<?php
if($u==1)
                  {
		    echo "$nama"," (","$npm",")";
                  }
                  else
                  {
                  }
                ?>   
    </span>
  </div>
</nav>

</div>
</div>                 
</body>
</html>
