 <!--   product  -->
 <?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
 <section id="product" class="py-3">     
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top:10px;">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">

                                <div class="col">
                                    <!-- <button type="submit" class="btn btn-danger form-control">Wite a Review</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-2">
                        <h5 class="font-baloo font-size-20" style="font-weight:bold;color:white;" ><?php echo $item['item_name'] ?? "Unknown"; ?><small class="font-baloo font-size-14" style="padding-left:7px;">  by <?php echo $item['item_studio'] ?? "Unknown"; ?></small></h5>
                            
                            <div class="d-flex" style="padding-top:5px; padding-bottom:15px;">
                                <div class="price" style="font-weight: bold; font-size:20px; color:white">

                                <button type="button" class="btn btn-dark btn-rounded waves-effect" style="font-weight:bold;"><span><?php echo $item['item_price'] ?? 0 ?></span></button>
                                    
                                </div>

                                <div style="padding-top:10px; padding-left:5px;">
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
                        </div>
                        
                                <div style="padding-bottom:15px; padding-top:10px;">
                                                                  
                                  <div class="px-2 font-size-14" style="color:white;"> from <?php echo $item['noOfRatings'] ?? 5000; ?> ratings</div>
                                </div>
                            </div>
                            <hr class="m-0" style="padding-bottom: 15px; color:white;">                          
                          
                            <form method="post">
                                  <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                  <input type="hidden" name="user_id" value="<?php echo $item['user_id'] ?? '1'; ?>">                                                                		   
                                  <div class="font-baloo font-size-16" style="font-weight:bold;color:white;padding-right:20px; padding-bottom:5px;">Select rating between 0 to 10 <input type="number" min="1" max="10" name="rating" value="<?php echo $item['rating'] ?? '1'; ?>"> 
                                           
                                  <?php
                                  if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                      echo '<button type="submit" disabled class="btn btn-success font-size-12"><i class="fas fa-check"></i> Added</button>';                        
                                  }else{
                                      echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Profile</button>';
                                  }
                                  ?>
                                  </div>
                              </form>                             
                             <hr>

                            <!-- size -->
                                <div class="size my-3">
                                    <h6 class="font-baloo" style="padding-top:0px; padding-bottom:0px; font-weight:bold; color:white" >Genres</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        
                                    <div class="font-rubik p-2">   
                                            <button class="btn btn-dark btn-rounded waves-effect p-2 font-size-14"><?php echo $item['item_brand'] ?? "DefaultVal" ; ?> </button>
                                    </div>     
                                              
                                              <?php if ($item['item_brand2']!='')
                                                  { ?>
                                                    
                                                    <div class="font-rubik p-2">   
                                                        <button class="btn btn-dark btn-rounded waves-effect p-2 font-size-14"><?php echo $item['item_brand2'] ?? "DefaultVal" ; ?> </button>
                                                    </div> 

                                              <?php } ?>                                                                     
                                       
                                    <div class="font-rubik p-2">
                                            <button class="btn btn-dark btn-rounded waves-effect p-2 font-size-14">Slice of Life</button>
                                    </div>
               

                                    </div>
                                </div>
                            <!-- !size -->                

                            
                            <h6 class="font-baloo" style="padding-top:0px; font-weight:bold; color:silver">Other Information</h6>
                            <div class="card-deck">
                              
                              <div class="card text-white mb-1" style="background:#37475A">                              
                                <div class="card-body">
                                  <h5 class="card-title">Format</h5>
                                  <p class="card-text"><?php echo $item['item_format'] ?? 'N/A' ?></p>                
                                </div>
                              </div>
                              <div class="card text-white mb-1" style="background:#37475A">                               
                                <div class="card-body">
                                  <h5 class="card-title">Episodes</h5>
                                  <p class="card-text">1</p>                              
                                </div>
                              </div>
                              <div class="card text-white mb-1" style="background:#37475A">                               
                                <div class="card-body">
                                  <h5 class="card-title">Duration</h5>
                                  <p class="card-text">1 hour, 47 mins</p>                              
                                </div>
                              </div>
                            
                            </div>
                            
                            <div class="card-deck" style="padding-top:10px;">
                              
                              <div class="card text-white mb-1" style="background:#37475A">                              
                                <div class="card-body">
                                  <h5 class="card-title">Status</h5>
                                  <p class="card-text">Finished</p>                
                                </div>
                              </div>
                              <div class="card text-white mb-1" style="background:#37475A">                               
                                <div class="card-body">
                                  <h5 class="card-title">Release Date</h5>
                                  <p class="card-text"><?php echo $item['item_release'] ?? 'N/A' ?></p>                              
                                </div>
                              </div>                              
                            
                            </div>


                      </div>

                        <div class="col-12" style="padding-top:0px;">
                            <h6 class="font-rubik font-size-20" style="font-weight:bold; color:white;">Synopsis</h6>
                            <hr>
                            <p class="font-rubik font-size-14" style="color:white;">
                              
                            <?php echo $item['item_synopsis'] ?? "Synopsis Unknown"; ?>
                              
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <!--   !product  -->

      <?php
          endif;
          endforeach;
      ?>