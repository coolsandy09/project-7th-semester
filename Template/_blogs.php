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
    <div class="container py-0" style="color:white;">
        <h4 class="font-rubik font-size-20" style="font-weight:bold">Upcoming Shows</h4>
        <hr>
        <!-- owl carousel -->
        <style> <?php include 'style.css'; ?> </style>
        <div class="owl-carousel owl-theme" style="font-weight:bold; padding-bottom:40px;">
        
        <?php foreach ($product_shuffle as $item) if (($item['item_release']=='N/A')&&($item['item_type']=='Show')){ ?> 
           
            <div class="item py-2 flip-card">
                <div class="product font-rale flip-card-inner">                 
               
                <div class="flip-card-front" style="width:200px; height:200px;">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                </div>

                    <div class="text-center flip-card-back" style="padding-top:20px;">
                        <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>                       

                        
                        <div class="price py-2">
                            <span><?php echo $item['item_price'] ?? '0' ; ?></span>
                        </div>

                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><button class="btn btn-primary" type="button">See more</button></a>
                    
                    </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->