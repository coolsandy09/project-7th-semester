<!-- Top Sale -->
<?php

    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<section id="top-sale">
    <div class="container py-5" style="color:#123C69">
        <h4 class="font-rubik font-size-20" style="font-weight:bold; color:white">Upcoming Movies</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme" style="font-weight:bold">
        <?php foreach ($product_shuffle as $item) if (($item['item_release']=='N/A')&&($item['item_type']=='Movie')){ ?> 
            <div class="item py-2">
                <div class="product font-rale" style="font-weight:bold; color:white">
                    <a href="<?php printf('%s?item_id=%s', 'product_movies.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center" >
                        <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>

                        
                        <div class="price py-2">
                            <span><?php echo 'N/A' ?></span>
                        </div>
                    
                    </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->