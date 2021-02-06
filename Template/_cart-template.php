<!-- Shopping cart section  -->
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

$cartid = $userid = $itemid = $rating = '';
$sql2 = "SELECT * FROM cart";
$result2 = mysqli_query($conn, $sql2);
if(mysqli_num_rows($result2) > 0)
{
	while($row = mysqli_fetch_assoc($result2))
	{
		$cartid = $row["cart_id"];
		$userid = $row["user_id"];
    $itemid = $row["item_id"];
    $rating = $row["rating"];
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

<div style="background-color:#37475A;padding:20px;">
	<center>
		<h1>Welcome to your profile, <?php echo $fname." ".$lname; ?> 
        <!--<h1>Your User id is <?php echo $id ?></h1>-->
        <!--<h1>Your Target user id is <?php echo $id ?></h1>-->
        <!-- <img src="./assets/shows/DeathNote.jpg" alt="Admin" class="rounded-circle" width="50px"></h1> -->
	</center>
</div>



<section id="cart" class="py-3 mb-5" style="margin-left:150px;">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20" style="color:white;">Your recent updates</h5>
     
        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getProfileData('cart',$id) as $item) :
                        $cart = $product->getProduct($item['item_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-3">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8" style="color:white;">
                    <h5 class="font-baloo font-size-20" style="font-weight:bold;color:white;" ><?php echo $item['item_name'] ?? "Unknown"; ?><small class="font-baloo font-size-14" style="padding-left:7px;">  by <?php echo $item['item_studio'] ?? "Unknown"; ?></small></h5>
                        <!-- product rating -->
                        
                        <div class="d-flex">

                        <?php if (round($item['item_price'],0,PHP_ROUND_HALF_UP)==0){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div> 

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==1){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>    

                            <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==2){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                        </div>

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==3){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                        </div>

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==4){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                        </div>

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==5){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                        </div>

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==6){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                        </div>  

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==7){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>

                            <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==8){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>

                        <?php } elseif(round($item['item_price'],0,PHP_ROUND_HALF_UP)==9){ ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                             </div>                                         

                        <?php } else { ?>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        <?php } ?>

                            <div style="padding-bottom:15px; padding-top:0px; padding-left:10px;">                                                                  
                               <div class="px-0 font-size-14" style="color:white;">   from <?php echo $item['noOfRatings'] ?? 5000; ?> ratings</div>                                
                                   
                        
                            </div>
                        </div>
                        <!--  !product rating-->

                        <!-- product qty -->
                        <div class="qty d-flex pt-2">

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">                          
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Remove from tracker</button>
                                
                            </form> 


                        </div>
                        <!-- !product qty -->

                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 font-baloo">
                            <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- !cart item -->
                <?php
                            return $item['item_price'];                            
                        }, $cart); // closing array_map function
                        
                    endforeach;
                ?>
            </div>
        
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->

<style> <?php include 'Accountstyle.css'; ?> </style>

<div class="container" style="padding-bottom:20px;">
    <div class="main-body">
    
         

            <div class="col-md-8" style="width:100%;margin-left:150px;">
              <div class="card mb-8">
                <div class="card-body">
                  <div class="row py-0">
                    <div class="col-sm-3">
                      <h3 class="mb-0" style="font-style:bold;">First Name</h3>
                    </div>
                    <div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
						<?php echo $fname; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0" style="font-style:bold;">Last Name</h3>
                    </div>
                    <div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
						<?php echo $lname; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Email</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
						<?php echo $email; ?>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">Gender</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
					<?php echo $gender?>
                    </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-3">
                    <h3 class="mb-0" style="font-style:bold; font-size:20px;">Total Entries</h3>
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
					<?php echo isset($subTotal) ? count($subTotal) : 0; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                    <h3 class="mb-0" style="font-style:bold; font-size:20px;">Mean Rating</h3> 
                    
                    </div>
					<div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
					<?php echo isset($subTotal) ? round(($Cart->getSum($subTotal)/(count($subTotal))),2,PHP_ROUND_HALF_UP) : 0; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0" style="font-style:bold;font-size:16px;padding-top:5px;">Your latest rating</h3>
                    </div>
                    <div class="col-sm-9" style="color:white;padding-top:25px; font-size:15px;">
                    <?php echo $item['rating'] ?? "N/A"; ?> 
                    </div>
                  </div>


                </div>
              </div>
              