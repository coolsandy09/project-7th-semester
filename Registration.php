<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header_home.php');
include_once('link.php');
?>

<div id="frmRegistration" style="color:white; padding-top:150px; padding-right:70px;">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required="required">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname" required="required">
    </div>
  </div>
  
  <div class="form-group">
  <center>
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male" required>Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female" required>Female</label>
    </div>
  </center>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required="required">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Register</button>
    </div>
  </div>
  <div> 
    <h6>Already have an account?</h6>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn" style="color:white;"><a href="Login.php">Login</a></button>
    </div>
  </div>

</form>
</div>
