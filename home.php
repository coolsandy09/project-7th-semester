
<?php
include_once('header_home.php');
include_once('link.php');
?>

<div class="card text-white" style="background-color:black;"> 
  <img class="card-img" src="./assets/homewallp.jpg" alt="Card image" style="width:100%; height:10%; object-fit: cover; padding-top:0px;">
  <center>
  <div class="card-img-overlay" style="padding-top:250px">
    <h5 class="card-title" style="font-size:72px;">Welcome to Entracc</h5>
    <p class="card-text" style="font-size:32px;">Keep track of your shows,movies,songs and games. All in one place</p>
    <p class="card-text">Please login or register to continue</p>
        <div class="container-fluid" style="padding-left:550px;">
        <ul class="nav navbar-nav">
          <button class="btn" style="color:white; background:black; text-decoration: none;"> <li><a href="registration.php">Register</a></li> </button>
          <button class="btn btn-light" style="color:white; background:black;"> <li><a href="login.php">Login</a></li></button>
        </ul>
      </div>
  </div>
  
</center>
</div>

<?php
include_once('footer.php');
?>
