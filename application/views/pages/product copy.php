<?php if (!empty($product)):?>
<div class="container">     
                    <!--Product Content-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                                <!-- Product Horizontal -->
                                <div class="product-details-img product-horizontal-style">
                                    <!-- Product Main -->
                                    <div class="zoompro-wrap">
                                        <!-- Product Image -->
                                        <div class="zoompro-span"><img id="zoompro" class="zoompro" src="<?php echo base_url('assets/images/upload/' . $product->image); ?>" data-zoom-image="<?php echo base_url('assets/images/upload/' . $product->image); ?>" alt="product" width="625" height="808" /></div>
                                        <!-- End Product Image -->
                                        <!-- Product Label -->
                                        <div class="product-labels"><span class="lbl pr-label1">Best seller</span></div>
                                        <!-- End Product Label -->
                                        <!-- End Product Buttons -->
                                        <div class="product-buttons">
                                            <a href="#" class="btn prlightbox" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom Image"><i class="icon anm anm-expand-l-arrows"></i></a>
                                        </div>
                                        <!-- End Product Buttons -->
                                    </div>
                                    <!-- End Product Main -->

                                    <!-- Product Thumb -->
                                    <div class="product-thumb product-horizontal-thumb mt-3">
                                        <div id="gallery" class="product-thumb-horizontal">
                                            <a data-image="<?php echo base_url('assets/images/upload/' . $product->image); ?>" data-zoom-image="<?php echo base_url('assets/images/upload/' . $product->image); ?>" class="slick-slide slick-cloned active">
                                                <img class="blur-up lazyload" data-src="<?php echo base_url('assets/images/upload/' . $product->image); ?>" src="<?php echo base_url('assets/images/upload/' . $product->image); ?>" alt="product" width="625" height="808" />
                                            </a>
                                            <a data-image="assets/images/products/product1-1.jpg" data-zoom-image="assets/images/products/product1-1.jpg" class="slick-slide slick-cloned">
                                                <img class="blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="product" width="625" height="808" />
                                            </a>
                                            <a data-image="assets/images/products/product1-2.jpg" data-zoom-image="assets/images/products/product1-2.jpg" class="slick-slide slick-cloned">
                                                <img class="blur-up lazyload" data-src="assets/images/products/product1-2.jpg" src="assets/images/products/product1-2.jpg" alt="product" width="625" height="808" />
                                            </a>
                                            <a data-image="assets/images/products/product1-3.jpg" data-zoom-image="assets/images/products/product1-3.jpg" class="slick-slide slick-cloned">
                                                <img class="blur-up lazyload" data-src="assets/images/products/product1-3.jpg" src="assets/images/products/product1-3.jpg" alt="product" width="625" height="808" />
                                            </a>
                                            <a data-image="assets/images/products/product1-4.jpg" data-zoom-image="assets/images/products/product1-4.jpg" class="slick-slide slick-cloned">
                                                <img class="blur-up lazyload" data-src="assets/images/products/product1-4.jpg" src="assets/images/products/product1-4.jpg" alt="product" width="625" height="808" />
                                            </a>
                                            <a data-image="assets/images/products/product1-5.jpg" data-zoom-image="assets/images/products/product1-5.jpg" class="slick-slide slick-cloned">
                                                <img class="blur-up lazyload" data-src="assets/images/products/product1-5.jpg" src="assets/images/products/product1-5.jpg" alt="product" width="625" height="808" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Product Thumb -->

                                    <!-- Product Gallery -->
                                    <div class="lightboximages">
                                        <a href="<?php echo base_url('assets/images/upload/' . $product->image); ?>" data-size="1000x1280"></a>
                                        <a href="assets/images/products/product1-1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/products/product1-2.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/products/product1-3.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/products/product1-4.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/products/product1-5.jpg" data-size="1000x1280"></a>
                                    </div>
                                    <!-- End Product Gallery -->
                                </div>
                                <!-- End Product Horizontal -->
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                                <!-- Product Details -->
                                <div class="product-single-meta">
                                    <h2 class="product-main-title"><?php echo $product->nama; ?></h2>
                                    <!-- Product Reviews -->
                                    <div class="product-review d-flex-center mb-3">
                                        <div class="reviewStar d-flex-center"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">24 Reviews</span></div>
                                        <a class="reviewLink d-flex-center" href="#reviews">Write a Review</a>
                                    </div>
                                    <!-- End Product Reviews -->
                                    <!-- Product Info -->
                                    <div class="product-info">
                                        <p class="product-vendor">Vendor:<span class="text"><a href="#"><?php echo $product->vendor; ?></a></span></p>  
                                        <p class="product-type">Product Type:<span class="text">Shirts</span></p> 
                                        <p class="product-cat">Category: <span><a href="#">Fashion</a>, <a href="#">Tops</a>, <a href="#">Women</a>, <a href="#">New Arrivals</a></span></p>
                                    </div>
                                    <!-- End Product Info -->
                                    <!-- Product Price -->
                                    <div class="product-price d-flex-center my-3">
                                        <span class="price"> <?php echo number_format($product->harga, 0, ',', '.'); ?></span>
                                    </div>
                                    <!-- End Product Price -->
                                    <hr>
                                    <!-- Sort Description -->
                                    <div class="sort-description">
                                        <ul class="checkmark-info">
                                            <li>High quality fabric, very comfortable to touch and wear.</li>
                                            <li>It can tie in front-is forgiving to you belly or tie behind.</li>
                                            <li>Light weight and perfect for layering.</li>
                                        </ul>
                                    </div>
                                    <!-- End Sort Description -->
                                </div>
                                <!-- End Product Details -->

                                <!-- Product Form -->
                                <form method="post" action="#" class="product-form product-form-border hidedropdown">                                    
                                    <!-- Product Action -->
                                    <div class="product-action w-100 d-flex-wrap mb-3">
                                        <!-- Product Quantity -->
                                        <div class="product-form-quantity w-100 d-flex-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                <input type="text" name="quantity" value="1" class="product-form-input qty" />
                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                            </div>

                                            <div class="pro-stockLbl ms-3">
                                                <span class="d-flex-center stockLbl instock text-uppercase">In stock</span>
                                            </div>
                                        </div>
                                        <!-- End Product Quantity -->

                                        <!-- Product Add -->
                                        <div class="product-form-submit addcart fl-1 ms-0 mt-3">
                                            <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit"><a href="<?php echo base_url('cart/add/'. $product->id);?>"><span>Add to cart</span></button>
                                        </div>
                                        <!-- Product Add -->
                                        <!-- Product Buy -->
                                        <div class="product-form-submit buyit fl-1 ms-3 mt-3">
                                            <button type="submit" class="btn btn-primary proceed-to-checkout"><span>Buy it now</span></button>
                                        </div>
                                        <!-- End Product Buy -->
                                    </div>
                                    <!-- End Product Action -->

                                    <!-- Product Info link -->
                                    <p class="infolinks d-flex-center justify-content-between">
                                        <a class="text-link wishlist" href="wishlist-style1.html"><i class="icon anm anm-heart-l me-2"></i> <span>Add to Wishlist</span></a>
                                        <a class="text-link compare" href="compare-style1.html"><i class="icon anm anm-sync-ar me-2"></i> <span>Add to Compare</span></a>                                      
                                        <a href="#shippingInfo-modal" class="text-link shippingInfo" data-bs-toggle="modal" data-bs-target="#shippingInfo_modal"><i class="icon anm anm-paper-l-plane me-2"></i> <span>Delivery &amp; Returns</span></a>
                                        <a href="#productInquiry-modal" class="text-link emaillink me-0" data-bs-toggle="modal" data-bs-target="#productInquiry_modal"><i class="icon anm anm-question-cil me-2"></i> <span>Enquiry</span></a>
                                    </p>
                                    <!-- End Product Info link -->
                                </form>
                                <!-- End Product Form -->

                                <!-- Product Info -->
                                <div class="userViewMsg featureText" data-user="20" data-time="11000"><i class="icon anm anm-eye-r"></i><b class="uersView">21</b> People are Looking for this Product</div> 
                                <div class="shippingMsg featureText"><i class="icon anm anm-clock-r"></i>Estimated Delivery Between <b id="fromDate">Wed, May 1</b> and <b id="toDate">Tue, May 7</b>.</div>                             
                                <div class="freeShipMsg featureText" data-price="199"><i class="icon anm anm-truck-r"></i>Spent <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> More for Free shipping</div>                                
                                <!-- End Product Info -->

                                <!-- Social Sharing -->
                                <div class="social-sharing d-flex-center mt-2 lh-lg">
                                    <span class="sharing-lbl fw-600">Share :</span>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title">Facebook</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"><i class="icon anm anm-twitter"></i><span class="share-title">Tweet</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title">Pin it</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"><i class="icon anm anm-linkedin-in"></i><span class="share-title">Linkedin</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-email"><i class="icon anm anm-envelope-l"></i><span class="share-title">Email</span></a>
                                </div>
                                <!-- End Social Sharing -->
                                <div class="trustseal-img mt-3 mt-md-4"><img src="assets/images/icons/powerby-cards.jpg" alt="powerby cards" width="470" /></div>
                            </div>
                        </div>
                    </div>
                    <!--Product Content-->

                    <!--Product Tabs-->
                    <div class="tabs-listing section pb-0">
                        <ul class="product-tabs style3 border-bottom list-unstyled d-flex-wrap d-flex-justify-center d-none d-md-flex">
                            <li rel="description" class="active"><a class="tablink">Description</a></li>
                            <li rel="additionalInformation"><a class="tablink">Additional Information</a></li>
                            <li rel="size-chart"><a class="tablink">Size Chart</a></li>
                            <li rel="shipping-return"><a class="tablink">Shipping &amp; Return</a></li>
                            <li rel="reviews"><a class="tablink">Reviews</a></li>
                        </ul>

                        <div class="tab-container">
                            <!--Description-->
                            <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                            <div id="description" class="tab-content">
                                <div class="product-description">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-0 mb-md-0">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. the majority have suffered alteration in some form randomised words which don't look even slightly believable.</p>
                                            <h4 class="mb-3">Features</h4>
                                            <ul class="checkmark-info">
                                                <li>High quality fabric, very comfortable to touch and wear.</li>
                                                <li>This cardigan sweater is cute for no reason,perfect for travel and casual.</li>
                                                <li>It can tie in front-is forgiving to you belly or tie behind.</li>
                                                <li>Light weight and perfect for layering.</li>
                                            </ul>
                                            <h4 class="mb-3">Fabric</h4>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Description-->

                            <!--Additional Information-->
                            <h3 class="tabs-ac-style d-md-none" rel="additionalInformation">Additional Information</h3>
                            <div id="additionalInformation" class="tab-content">
                                <div class="product-description">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mb-md-0">
                                            <div class="table-responsive">
                                                <table class="table table-bordered align-middle table-part mb-0">
                                                    <tr>
                                                        <th>Color</th>
                                                        <td>Black, White, Blue, Red, Gray</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Product Dimensions</th>
                                                        <td>15 x 15 x 3 cm; 250 Grams</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date First Available</th>
                                                        <td>14 May 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Manufacturer</th>
                                                        <td>Fashion and Retail Limited</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Department</th>
                                                        <td>Men Shirt</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Additional Information-->

                            <!--Size Chart-->
                            <h3 class="tabs-ac-style d-md-none" rel="size-chart">Size Chart</h3>
                            <div id="size-chart" class="tab-content">
                                <h4 class="mb-2">Ready to Wear Clothing</h4>
                                <p class="mb-4">This is a standardised guide to give you an idea of what size you will need, however some brands may vary from these conversions.</p>
                                <div class="size-chart-tbl table-responsive px-1">
                                    <table class="table-bordered align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>XXS - XS</th>
                                                <th>XS - S</th>
                                                <th>S - M</th>
                                                <th>M - L</th>
                                                <th>L - XL</th>
                                                <th>XL - XXL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>UK</th>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>14</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <th>US</th>
                                                <td>2</td>
                                                <td>4</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <th>Italy (IT)</th>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                                <td>46</td>
                                                <td>48</td>
                                            </tr>
                                            <tr>
                                                <th>France (FR/EU)</th>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                            </tr>
                                            <tr>
                                                <th>Denmark</th>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <th>Russia</th>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                                <td>46</td>
                                                <td>48</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <th>Germany</th>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <th>Japan</th>
                                                <td>5</td>
                                                <td>7</td>
                                                <td>9</td>
                                                <td>11</td>
                                                <td>13</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <th>Australia</th>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>14</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <th>Korea</th>
                                                <td>33</td>
                                                <td>44</td>
                                                <td>55</td>
                                                <td>66</td>
                                                <td>77</td>
                                                <td>88</td>
                                            </tr>
                                            <tr>
                                                <th>China</th>
                                                <td>160/84</td>
                                                <td>165/86</td>
                                                <td>170/88</td>
                                                <td>175/90</td>
                                                <td>180/92</td>
                                                <td>185/94</td>
                                            </tr>
                                            <tr>
                                                <th>Jeans</th>
                                                <td>24-25</td>
                                                <td>26-27</td>
                                                <td>27-28</td>
                                                <td>29-30</td>
                                                <td>31-32</td>
                                                <td>32-33</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--End Size Chart-->

                            <!--Shipping &amp; Return-->
                            <h3 class="tabs-ac-style d-md-none" rel="shipping-return">Shipping &amp; Return</h3>
                            <div id="shipping-return" class="tab-content">
                                <h4 class="pb-1">Shipping &amp; Return</h4>
                                <ul class="checkmark-info">
                                    <li>Dispatch: Within 24 Hours</li>
                                    <li>1 Year Brand Warranty</li>
                                    <li>Free shipping across all products on a minimum purchase of $50.</li>
                                    <li>International delivery time - 7-10 business days</li>
                                    <li>Cash on delivery might be available</li>
                                    <li>Easy 30 days returns and exchanges</li>
                                </ul>
                                <h4 class="pt-1">Free and Easy Returns</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <h4 class="pt-1">Special Financing</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                            </div>
                            <!--End Shipping &amp; Return-->

                            <!--Review-->
                            <h3 class="tabs-ac-style d-md-none" rel="reviews">Review</h3>
                            <div id="reviews" class="tab-content">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                        <div class="ratings-main">
                                            <div class="avg-rating d-flex-center mb-3">
                                                <h4 class="avg-mark">5.0</h4>
                                                <div class="avg-content ms-3">
                                                    <p class="text-rating">Average Rating</p>
                                                    <div class="ratings-full product-review">
                                                        <a class="reviewLink d-flex-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><span class="caption ms-2">24 Ratings</span></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ratings-list">
                                                <div class="ratings-container d-flex align-items-center mt-1">
                                                    <div class="ratings-full product-review m-0">
                                                        <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width:99%;"></div></div>
                                                    <div class="progress-value">99%</div>
                                                </div>
                                                <div class="ratings-container d-flex align-items-center mt-1">
                                                    <div class="ratings-full product-review m-0">
                                                        <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;"></div></div>
                                                    <div class="progress-value">75%</div>
                                                </div>
                                                <div class="ratings-container d-flex align-items-center mt-1">
                                                    <div class="ratings-full product-review m-0">
                                                        <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"></div></div>
                                                    <div class="progress-value">50%</div>
                                                </div>
                                                <div class="ratings-container d-flex align-items-center mt-1">
                                                    <div class="ratings-full product-review m-0">
                                                        <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%;"></div></div>
                                                    <div class="progress-value">25%</div>
                                                </div>
                                                <div class="ratings-container d-flex align-items-center mt-1">
                                                    <div class="ratings-full product-review m-0">
                                                        <a class="reviewLink d-flex align-items-center" href="#reviews"><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></a>
                                                    </div>
                                                    <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width:5%;"></div></div>
                                                    <div class="progress-value">05%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="spr-reviews">
                                            <h3 class="spr-form-title">Customer Reviews</h3>
                                            <div class="review-inner">
                                                <div class="spr-review d-flex w-100">
                                                    <div class="spr-review-profile flex-shrink-0">
                                                        <img class="blur-up lazyload" data-src="assets/images/users/user-img1.jpg" src="assets/images/users/user-img1.jpg" alt="" width="200" height="200" />
                                                    </div>
                                                    <div class="spr-review-content flex-grow-1">
                                                        <div class="d-flex justify-content-between flex-column mb-2">
                                                            <div class="title-review d-flex align-items-center justify-content-between">
                                                                <h5 class="spr-review-header-title text-transform-none mb-0">Eleanor Pena</h5>
                                                                <span class="product-review spr-starratings m-0"><span class="reviewLink"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i></span></span>
                                                            </div>
                                                        </div>
                                                        <b class="head-font">Good and High quality</b>
                                                        <p class="spr-review-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                    </div>
                                                </div>
                                                <div class="spr-review d-flex w-100">
                                                    <div class="spr-review-profile flex-shrink-0">
                                                        <img class="blur-up lazyload" data-src="assets/images/users/testimonial1.jpg" src="assets/images/users/testimonial1.jpg" alt="" width="200" height="200" />
                                                    </div>
                                                    <div class="spr-review-content flex-grow-1">
                                                        <div class="d-flex justify-content-between flex-column mb-2">
                                                            <div class="title-review d-flex align-items-center justify-content-between">
                                                                <h5 class="spr-review-header-title text-transform-none mb-0">Courtney Henry</h5>
                                                                <span class="product-review spr-starratings m-0"><span class="reviewLink"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i></span></span>
                                                            </div>
                                                        </div>
                                                        <b class="head-font">Feature Availability</b>
                                                        <p class="spr-review-body">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                        <form method="post" action="#" class="product-review-form new-review-form">
                                            <h3 class="spr-form-title">Write a Review</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <fieldset class="row spr-form-contact">
                                                <div class="col-sm-6 spr-form-contact-name form-group">
                                                    <label class="spr-form-label" for="nickname">Name <span class="required">*</span></label>
                                                    <input class="spr-form-input spr-form-input-text" id="nickname" type="text" name="name" required />
                                                </div>
                                                <div class="col-sm-6 spr-form-contact-email form-group">
                                                    <label class="spr-form-label" for="email">Email <span class="required">*</span></label>
                                                    <input class="spr-form-input spr-form-input-email " id="email" type="email" name="email" required />
                                                </div>
                                                <div class="col-sm-6 spr-form-review-title form-group">
                                                    <label class="spr-form-label" for="review">Review Title </label>
                                                    <input class="spr-form-input spr-form-input-text " id="review" type="text" name="review" />
                                                </div>
                                                <div class="col-sm-6 spr-form-review-rating form-group">
                                                    <label class="spr-form-label">Rating</label>
                                                    <div class="product-review pt-1">
                                                        <div class="review-rating">
                                                            <a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a><a href="#;"><i class="icon anm anm-star-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 spr-form-review-body form-group">
                                                    <label class="spr-form-label" for="message">Body of Review <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span></label>
                                                    <div class="spr-form-input">
                                                        <textarea class="spr-form-input spr-form-input-textarea" id="message" name="message" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="spr-form-actions clearfix">
                                                <input type="submit" class="btn btn-primary spr-button spr-button-primary" value="Submit Review" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End Review-->
                        </div>
                    </div>
                    <!--End Product Tabs-->
</div>
<?php else :?> 
    <p> Produk tidak ada </p>
<?php endif;?>