<?php
session_start();

$sessionName = $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    // echo "You are not logged in";
} else {
    //echo "Welcome, $sessionName";
}
?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>InstaSnack</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.html">InstaSnack</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-md-auto">
        <li class="nav-item active">
          <a class="nav-link" href="profile.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
		<?php
		

		$sessionName = $_SESSION['username'];	
		
	   if (!isset($_SESSION['username'])) {
              // echo "You are not logged in";
	   } else {
    	     echo '<a name="logout" class="nav-link" href="index.html?logout=true">Logout</a>';
	   }
	   if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            $_SESSION = array();
            header("location: index.html");
       }
	   ?>
		
        <li class="nav-item">
          <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
        </li>
        <!--
        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        -->
      </ul>
      <!--
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      -->
    </div>
  </nav>

  <main role="main" class="container">
    <div class="jumbotron shadow p-3 mb-5 bg-white rounded">
      <h1>Get your favorite snacks delivered home!</h1>
      <p class="lead"></p>
    </div>
    <div class="col-12 mt-3 ">
      <div class="card ">
        <div class="card-horizontal">
          <div class="img-square-wrapper">
            <img class="homecardimg" src="https://d2lnr5mha7bycj.cloudfront.net/product-image/file/large_d2b36f8c-e7e7-4c85-9947-b668123bcdd5.jpg" alt="The World Wide Web">
          </div>
          <div class="card-body">
            <h4 class="card-title">Doritos</h4>
            <p class="card-text">Nacho cheese doritos</p>
			<form method = "post" action="item1.php">
			    <input class="btn btn-primary" type="submit" name="item1" value="Add to cart">
            </form>  
          </div>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div> -->
      </div>
    </div>
    <div class="col-12 mt-3 ">
      <div class="card ">
        <div class="card-horizontal">
          <div class="img-square-wrapper">
            <img class="homecardimg" src="https://cdn.influenster.com/media/product/image/download_6F7gcrX.jpg.355x355_q85ss0_progressive.jpg" alt="Building the world wide web">
          </div>
          <div class="card-body">
            <h4 class="card-title">Chips Ahoy (Chunky)</h4>
            <p class="card-text"></p>
            <form method = "post" action="item2.php">
			    <input class="btn btn-primary" type="submit" name="item2" value="Add to cart">
            </form> 
          </div>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div> -->
      </div>
    </div>
    <div class="col-12 mt-3 ">
      <div class="card ">
        <div class="card-horizontal">
          <div class="img-square-wrapper">
            <img class="homecardimg" src="https://db535g4onu9gg.cloudfront.net/eyJidWNrZXQiOiJtZXJjYXRvLWltYWdlcyIsImVkaXRzIjp7InJlc2l6ZSI6eyJmaXQiOiJpbnNpZGUiLCJoZWlnaHQiOjcyMH0sIndlYnAiOnsicXVhbGl0eSI6NjB9fSwia2V5IjoicHJvZHVjdC1pbWFnZXMvbXBDeGRIaVFBN0x4SFVzUUdGTWtkQjlCekV4WUF4ZU5WQXJxQldqWi5qcGVnIn0=" alt="How to access the world wide web">
          </div>
          <div class="card-body">
            <h4 class="card-title">Tropicana Orange Juice</h4>
            <p class="card-text"></p>
            <form method = "post" action="item3.php">
			    <input class="btn btn-primary" type="submit" name="item3" value="Add to cart">
            </form> 
          </div>
        </div>
        <!--<div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div> -->
      </div>
    </div>

    <p></p> <!-- Create extra space at end -->

    <div class="row">
      <div class="col-xl-4">

      </div>
      <div class="col-xl-4">

      </div>
      <div class="col-xl-4">

      </div>
    </div>
    <!-- /.container -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!--
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-131126828-1', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    -->
    <footer class="page-footer font-small">
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a > InstaSnack</a>
      </div>
    </footer>

</body>

</html>
