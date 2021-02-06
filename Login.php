<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header_home.php');
include_once('link.php');

?>


<div id="frmRegistration" style="color:white; padding-top:150px; padding-right:190px; ">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>User Login</h1>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
  <div> 
    <h6>Don't have an account?</h6>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="register" class="btn" style="color:white;"><a href="registration.php">Register</a></button>
    </div>
  </div>
</form>
</div>
