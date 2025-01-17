
            <!-- Body Container -->
            <div id="page-content" class="mb-0">
                <!--Home Slideshow-->
                <!--Products Slider-->
                
                <section class="slideshow slideshow-wrapper">
                    <div class="home-slideshow slick-arrow-dots rounded-dots circle-arrow">
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:767px)" srcset="assets/images/rakuuu/photocard-2.PNG" width="1000" height="990">
                                    <img class="blur-up lazyload" src="assets/images/rakuuu/photocard-2.PNG" alt="slideshow" title="" width="1920" height="990" />
                                </picture> 
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1 whiteText">
                                                <h2 class="ss-mega-title">Photocard best<br>Collection</h2>
                                                <p class="ss-sub-title">dengan kualitas terbaik harga bersahabat<br>  dijamin ke originalitas nya</p>
                                                <div class="ss-btnWrap">
                                                    <?php if($this->session->userdata('logged_in')): ?>
                                                        <a class="btn btn-primary" href="<?php echo base_url('shop');?>">Join Now</a>
                                                    <?php else:?>
                                                        <a class="btn btn-primary" href="<?php echo base_url('signup');?>">Join Now</a>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:767px)" srcset="assets/images/rakuuu/all.png" width="1000" height="990">
                                    <img class="blur-up lazyload" src="assets/images/rakuuu/all.png" alt="slideshow" title="" width="1920" height="990"/>
                                </picture> 
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-left">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1 whiteText">
                                                <h2 class="ss-mega-title">Lengkapi Hobimu <br>Bersama kami</h2>
                                                <div class="ss-btnWrap">
                                                    <?php if($this->session->userdata('logged_in')): ?>
                                                        <a class="btn btn-primary" href="<?php echo base_url('shop');?>">Join Now</a>
                                                    <?php else:?>
                                                        <a class="btn btn-primary" href="<?php echo base_url('signup');?>">Join Now</a>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:767px)" srcset="assets/images/rakuuu/erigo.png" width="1000" height="990">
                                    <img class="blur-up lazyload" src="assets/images/rakuuu/erigo.png" alt="slideshow" title="" width="1920" height="990"/>
                                </picture> 
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay top-left">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1 whiteText">
                                                <h2 class="ss-mega-title">Top Branded <br>Things</h2>
                                                <p class="ss-sub-title">Dapatkan Discount menarik! <span class="text-primary fw-bold">50% </span>Discount</p>
                                                <div class="ss-btnWrap">
                                                    <?php if($this->session->userdata('logged_in')): ?>
                                                        <a class="btn btn-primary" href="<?php echo base_url('shop');?>">Join Now</a>
                                                    <?php else:?>
                                                        <a class="btn btn-primary" href="<?php echo base_url('signup');?>">Join Now</a>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section product-slider pb-0">
                    <div class="container container-1330">
                        <div class="section-header">
                            <h2>Idoling</h2>
                    </div>

                        <div class="product-slider-4items gp15 arwOut5 hov-arrow circle-arrow grid-products pro-hover3">  
                         <?php if(!empty($product)): ?>
                            <?php foreach ($product as $item){ ?>                                         
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="<?php echo base_url('product/' . $item->slug); ?>" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload" data-src="<?php echo base_url('assets/images/upload/' . $item->image); ?>" src="<?php echo base_url('assets/images/upload/' . $item->image); ?>" alt="Product" title="Product" width="400" height="400" />
                                            <!-- End Image -->
                                        </a>
                                        <!-- End Product Image -->   
                                        <!-- Product label -->
                                        <div class="product-labels round-pill"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End Product label -->
                                        <!--Countdown Timer-->
                                        <div class="saleTime horizonal dark" data-countdown="2024/12/15"></div>
                                        <!--End Countdown Timer-->                                                       
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-left">
                                        <!--Product Vendor-->
                                        <div class="product-vendor"><?php echo $item->vendor; ?></div>
                                        <!--End Product Vendor-->
                                        <div class="product-name-price">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="<?php echo base_url('product/' . $item->slug); ?>"><?php echo $item->nama; ?></a>
                                                
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
                            </div>
                        <?php } endif;?>                   
                        </div>  
                    </div>
                </section>

                
                <!--End Products Slider-->
                <!--Products With Tabs-->
                <section class="section product-slider tab-slider-product">
                    <div class="container container-1330">
                        <div class="section-header">
                            <h2>Our Best Products</h2>
                        </div>

                        <div class="tabs-listing">
                            <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-uppercase active body-font" id="fruits-tab" data-bs-toggle="tab" data-bs-target="#fruits" type="button" role="tab" aria-controls="fruits" aria-selected="true">JKT48</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-uppercase body-font" id="vegetables-tab" data-bs-toggle="tab" data-bs-target="#vegetables" type="button" role="tab" aria-controls="vegetables" aria-selected="false">Lumina</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-uppercase body-font" id="dryfruits-tab" data-bs-toggle="tab" data-bs-target="#dryfruits" type="button" role="tab" aria-controls="dryfruits" aria-selected="false">AKB48</button>
                                </li>
                            </ul>
                            

                            <div class="tab-content" id="productTabsContent">
                                <div class="tab-pane show active" id="fruits" role="tabpanel" aria-labelledby="fruits-tab">
                                    <!--Product Grid-->
                                    <div class="grid-view-items">
                                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">    
                                        <?php if (!empty($product_jkt48)) : ?>
                                            <?php foreach ($product_jkt48 as $item) : ?>                                       
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="<?php echo base_url('product/' . $item->slug); ?>" class="product-img rounded-4">
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
                                                                <a href="<?php echo base_url('product/' . $item->slug); ?>"><?php echo $item->nama;?></a>
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
                                    <!--End Product Grid-->
                                </div>                         

                                <div class="tab-pane" id="vegetables" role="tabpanel" aria-labelledby="vegetables-tab">
                                    <!--Product Grid-->
                                    <div class="grid-view-items">
                                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">    
                                        <?php if (!empty($product_lumina)) : ?>
                                            <?php foreach ($product_lumina as $item) : ?>                                       
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="<?php echo base_url('product/' . $item->slug); ?>" class="product-img rounded-4">
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
                                                                <a href="<?php echo base_url('product/' . $item->slug); ?>"><?php echo $item->nama;?></a>
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
                                    <!--End Product Grid-->
                                </div>

                                <div class="tab-pane" id="dryfruits" role="tabpanel" aria-labelledby="dryfruits-tab">
                                    <!--Product Grid-->
                                    <div class="grid-view-items">
                                        <div class="grid-products pro-hover3 row col-row row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">    
                                        <?php if (!empty($product_akb48)) : ?>
                                            <?php foreach ($product_akb48 as $item) : ?>                                       
                                            <div class="item col-item">
                                                <div class="product-box">
                                                    <!-- Start Product Image -->
                                                    <div class="product-image">
                                                        <!-- Start Product Image -->
                                                        <a href="<?php echo base_url('product/' . $item->slug); ?>" class="product-img rounded-4">
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
                                                                <a href="<?php echo base_url('product/' . $item->slug); ?>"><?php echo $item->nama;?></a>
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
                                    <!--End Product Grid-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Products With Tabs-->

                <!--Parallax Banner-->
                <div class="section parallax-banner-style1 py-0">
                    <div class="hero hero-large hero-overlay bg-size">
                        <img class="bg-img" src="assets/images/rakuuu/bannerjkt-3.png" alt="parallax-banner" width="1920" height="645" />
                        <div class="hero-inner d-flex-justify-center">
                            <div class="container">
                                <div class="wrap-text mx-auto text-center">
                                    <h1 class="hero-title">Super Deals Of The Week <br><span class="text-primary">50% OFF</span></h1>
                                    <!--Countdown Timer-->
                                    <div class="hero-saleTime dark saleTime-circle d-flex-justify-center text-center" data-countdown="2025/01/01"></div>
                                    <!--End Countdown Timer-->
                                    <?php if($this->session->userdata('logged_in')): ?>
                                        <a href="<?php echo base_url('cart');?>" class="hero-btn btn btn-primary rounded-pill">Shop now</a>
                                    <?php else:?>
                                        <a href="<?php echo base_url('login');?>" class="hero-btn btn btn-primary rounded-pill">Shop now</a>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Parallax Banner-->

                <!--List Products Section-->
                <div class="section mini-product">
                    <div class="container container-1330">
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                <h4 class="column-ttl">Best Seller</h4>
                                <div class="mini-product-list">   
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="<?php echo base_url('./assets/images/upload/' . $item->image); ?>" src="<?php echo base_url('./assets/images/upload/' . $item->image); ?>" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">Twoshot with member JKT48</a></div>
                                            <div class="product-price"><span class="old-price">Rp 200.000</span><span class="price">Rp 180.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">3 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/photocard-3.png" src="assets/images/rakuuu/photocard-3.png" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">Photocard JKT48</a></div>
                                            <div class="product-price"><span class="price">Rp 50.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                <span class="caption hidden ms-2">9 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/lightstick.jpg" src="assets/images/rakuuu/lightstick.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">lightstick JKT48</a></div>
                                            <div class="product-price"><span class="price">Rp 180.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">30 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 mt-4 mt-sm-0">
                                <h4 class="column-ttl">New Products</h4>
                                <div class="mini-product-list">   
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/photopack.png" src="assets/images/rakuuu/photopack.png" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">Photopack JKT48</a></div>
                                            <div class="product-price"><span class="old-price">Rp 80.000</span><span class="price">Rp 40.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">20 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/album.png" src="assets/images/rakuuu/album.png" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">Album AKB48</a></div>
                                            <div class="product-price"><span class="price">Rp 250.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                <span class="caption hidden ms-2">9 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/kaosjkt.png" src="assets/images/rakuuu/kaosjkt.png" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">T-shirt New Era</a></div>
                                            <div class="product-price"><span class="price">Rp 180.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">30 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 mt-4 mt-sm-0">
                                <h4 class="column-ttl">Top Rated</h4>
                                <div class="mini-product-list">   
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/riverjkt.jpg" src="assets/images/rakuuu/riverjkt.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">T-shirt River</a></div>
                                            <div class="product-price"><span class="price">Rp 180.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">10 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/sticker.png" src="assets/images/rakuuu/sticker.png" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">Sticker</a></div>
                                            <div class="product-price"><span class="price">Rp 15.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                <span class="caption hidden ms-2">30 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                        <div class="mini-image"><a class="item-link" href="<?php echo base_url('product/' . $item->slug); ?>"><img class="primary rounded-5 blur-up lazyload" data-src="assets/images/rakuuu/cheki.jpg" src="assets/images/rakuuu/cheki.jpg" alt="image" title="product" width="85" height="85" /></a></div>
                                        <div class="ms-3 details text-break">
                                            <div class="product-name"><a class="item-title" href="<?php echo base_url('product/' . $item->slug); ?>">Cheki with Idol</a></div>
                                            <div class="product-price"><span class="price">Rp 40.000</span></div>
                                            <div class="product-review d-flex align-items-center justify-content-start">
                                                <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                <span class="caption hidden ms-2">30 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 mt-4 mt-sm-5 mt-lg-0">
                                <div class="ctg-bnr-wrap position-relative h-100">
                                    <a href="shop-left-sidebar.html" class="ctg-image ratio ratio-1x1 h-100 rounded-4 d-block">
                                        <img class="rounded-4 blur-up lazyload" data-src="assets/images/rakuuu/banner-product.png" src="assets/images/rakuuu/banner-product.png" alt="collection" width="307" height="419" />
                                    </a>
                                    <div class="ctg-content d-flex-center flex-nowrap flex-column h-100">  
                                        <span class="ctg-small-title mb-1 fs-6 d-block alt-font">Semua Barang 100 % Original</span>
                                        <h2 class="ctg-title m-0">Berkualitas</h2>  
                                        <p class="ctg-des">mulai dari Rp 15.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End List Products Section-->
                <!--End Brand Logo-->
            </div>
            <!-- End Body Container -->

