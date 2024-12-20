
    <h1>Search Results</h1>
    <div class="grid-view-items">
                                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">    
                                        <?php if (!empty($product)) : ?>
                                            <?php foreach ($product as $item) : ?>                                       
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="<?php echo base_url('product/' . $item->id); ?>" class="product-img rounded-4">
                                                            <!-- Image -->
                                                            <img class="primary rounded-4 blur-up lazyload" data-src="<?php echo base_url('./assets/images/upload/' . $item->image); ?>" src="<?php echo base_url('./assets/images/upload/' . $item->image); ?>" alt="Product" title="Product" width="400" height="400" />
                                                            <!-- End Image -->
                                                            <!-- Hover Image -->                                                            <!-- End Hover Image -->
                                                        </a>
                                                        <!-- End Product Image -->    
                                                        <!-- Product label -->
                                                        <div class="product-labels round-pill"><span class="lbl on-sale">Sale</span></div>
                                                        <!-- End Product label -->
                                                        <!--Countdown Timer-->
                                                        <div class="saleTime horizonal dark" data-countdown="2025/01/01"></div>
                                                        <!--End Countdown Timer-->                                                       
                                                    </div>
                                                    <!-- End Product Image -->
                                                    <!-- Start Product Details -->
                                                    <div class="product-details text-left">
                                                        <!--Product Vendor-->
                                                        <div class="product-vendor"><?php echo $item->vendor;?></div>
                                                        <!--End Product Vendor-->
                                                        <div class="product-name-price">
                                                            <!-- Product Name -->
                                                            <div class="product-name">
                                                                <a href="<?php echo base_url('product/' . $item->id); ?>"><?php echo $item->nama;?></a>
                                                            </div>
                                                            <!-- End Product Name -->
                                                            <!-- Product Price -->
                                                            <div class="product-price m-0">
                                                                <span class="price"> <?php echo number_format($item->harga, 0, ',', '.'); ?></span>
                                                            </div>
                                                            <!-- End Product Price -->
                                                        </div>
                                                        <!-- Product Review -->
                                                        <div class="product-review">
                                                            <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                            <span class="caption hidden ms-1">3 Reviews</span>
                                                        </div>
                                                        <!-- End Product Review -->
                                                        <!--Product Button-->
                                                        <div class="button-bottom-action style1">
                                                            <div class="button-left">
                                                                <!--Cart Button-->
                                                                <?php if($this->session->userdata('logged_in')): ?>
                                                                    <div class="button-left">
                                                                            <a href="<?php echo base_url('cart/add/'. $item->id);?>" class="btn btn-primary btn-md rounded-pill addtocart quick-shop-modal"> 
                                                                                <span class="text">Add to Cart</span>
                                                                            </a>
                                                                    </div>
                                                                <?php else:?>
                                                                    <div class="button-left">
                                                                        <a href="<?php echo base_url('login');?>" class="btn btn-primary btn-md rounded-pill addtocart quick-shop-modal"> 
                                                                            <span class="text">Add to Cart</span>
                                                                        </a>
                                                                    </div>
                                                                <?php endif;?>
                                                            
                                                            <!--End Cart Button-->
                                                        </div>
                                                                <!--End Cart Button-->
                                                            </div>
                                                            <div class="button-right">
                                                                <!--Quick View Button-->
                                                                <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                                    <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View"><i class="icon anm anm-search-plus-l"></i></span>
                                                                </a>
                                                                <!--End Quick View Button-->
                                                                <!--Wishlist Button-->
                                                                <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i></a>
                                                                <!--End Wishlist Button-->
                                                                <!--Compare Button-->
                                                                <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Compare"><i class="icon anm anm-random-r"></i></a>
                                                                <!--End Compare Button-->
                                                            </div>
                                                        </div>
                                                        <!--End Product Button-->
                                                        
                                                    </div>
                                                    <!-- End product details --> 
                                                                      
                                                </div>
                                                <?php endforeach;?>
                                            <?php endif;?>    
                                            </div>    
                                    </div>