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

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }

        // save for later
        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['item_id']);
        }
    }
?>

<div style="background-color:#37475A;padding:20px;color:white;">
	<center>
		<h1>Welcome to your profile, <?php echo $fname." ".$lname; ?>
        <img src="./assets/shows/DeathNote.jpg" alt="Admin" class="rounded-circle" width="50px"></h1>
	</center>
</div>

<!-- Shopping cart section  -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20" style="color:white;">Your recent updates</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/blog/empty_cart.jpg" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                            <p class="font-baloo font-size-16" style="color:white">Empty Tracker</p>
                        </div>
                    </div>
                <!-- .Empty Cart -->
            </div>
            <!-- subtotal section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2" style="color:white;">
                    <div class="border-top py-4">
                    <h5>Total entries: <?php echo isset($subTotal) ? count($subTotal) : 0; ?> &nbsp; </h5>
                    <span> Average Rating: <?php echo isset($subTotal) ? round(($Cart->getSum($subTotal)/(count($subTotal))),2,PHP_ROUND_HALF_UP) : 0; ?></span> </span> </h5>
                    </div>
                </div>
            </div>
            <!-- !subtotal section-->
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->