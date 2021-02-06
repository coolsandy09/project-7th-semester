<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment Tracker</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">


    <?php
        //require functions.php file
        require('functions.php'); 
    ?>
</head>
<body style="background-color:#232F3E;">

    <!-- start #header 
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-12 text-black-50 m-0">CMRIT Calderon 430-985 Eleifend St. Duluth Washington 92611 (427) 930-5255</p>
                <div class="font-rale font-size-14">
                    <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                    <a href="#" class="px-3 border-right text-dark">Register</a>
                </div>
            </div> -->

<!--Navbar-->
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark color-lol" style="background-color:black;">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">ENTTRAC</a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Shows</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index_movies.php">Movies</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index_songs.php">Music</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index_games.php">Games</a>
      </li>       
    </ul>
    <!-- Links -->  
  </div>

  
<?php
session_start();
$email = $_SESSION['email'];
?>

  

  <div class="container-fluid">
		<div class="dropdown navbar-right" id="right" style="margin-left:auto;">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>  
  <ul class="dropdown-menu">
  	<li><a href="cart.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
  </div>	

  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
<!--/.Navbar-->

        </header>
    <!-- !start #header --> 

    <!-- start #main-site -->
        <main id="main-site">
</body>
</html>