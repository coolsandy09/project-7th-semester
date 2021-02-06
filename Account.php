<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}

?>
<div style="background-color:#37475A;padding:20px;">
	<center>
		<h1>Welcome to your profile, <?php echo $fname." ".$lname; ?></h1>
	</center>
</div>

<style> <?php include 'Accountstyle.css'; ?> </style>

<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="./assets/shows/DeathNote.jpg" alt="Admin" class="rounded-circle" width="150px">
                    <div class="mt-3">
                      <h4><?php echo $fname." ".$lname; ?></h4>
                      <p class=" mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8" style="width:40px">
              <div class="card mb-8">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0" style="font-style:bold;">Full Name</h3>
                    </div>
                    <div class="col-sm-9" style="color:white;padding-top:2px; font-size:15px;">
						<?php echo $fname." ".$lname; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Email</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:2px; font-size:15px;">
						<?php echo $email; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Phone</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:2px; font-size:15px;">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Mobile</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:2px; font-size:15px;">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Gender</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:2px; font-size:15px;">
					<?php echo $gender?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
					<h3 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2" style="padding-right:70px;"></i>Project Status</h3>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h3 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2" style="padding-right:70px;"></i>Project Status</h3>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>