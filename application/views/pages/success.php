<div class="container">   
                   <!--Order success-->
                    <div class="success-text checkout-card text-center mb-4 mb-md-5">
                        <i class="icon anm anm-shield-check"></i>
                        <h2>Thank you for your order!</h2>
                        <p class="mb-1">Payment is successfully processed and your order is on the way</p>
                        <p class="mb-1">You will receive an order confirmation email with details of your order and a link to track its progress.</p>                                       
                        <p class="text-order badge bg-success mt-3">Transaction ID: <?php echo $transaction_id; ?></p>
                    </div>
                    <!--End Order success-->


                    <div class="row checkout-form">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">   
                            <!--Order Summary-->
                            <div class="block order-summary">
                                <div class="block-content">
                                    <h3 class="title mb-3">Order Summary</h3>
                                    <div class="table-responsive-sm table-bottom-brd order-table"> 
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr>
                                                <th class="action">&nbsp;</th>
                                                <th colspan="2" class="text-start">Product</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Total</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($cart as $item): ?>
                                            <tbody>
                                                <tr class="cart-row cart-flex position-relative">
                                                    <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                                    <td class="cart-image cart-flex-item">
                                                        <a href="<?php echo base_url('product')?>"><img class="cart-image rounded-0 blur-up lazyload" data-src="<?php echo base_url('./assets/images/upload/' . $item['image']); ?>" src="<?php echo base_url('./assets/images/upload/' . $item['image']); ?>"width="120" height="170" /></a>
                                                    </td>
                                                    <td class="cart-meta small-text-left cart-flex-item">
                                                        <div class="list-view-item-title">
                                                            <a href="<?php echo base_url('product')?>"><?php echo $item['nama']; ?></a>
                                                        </div>
                                                        <div class="cart-meta-text">
                                                            <br><?php echo $item['quantity']; ?>
                                                        </div>
                                                    </td>
                                                    <td class="cart-price cart-flex-item text-center small-hide">
                                                        <span class="money">Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></span>
                                                    </td>
                                                    <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                                        <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                                            <div class="qtyField">
                                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                                <input class="cart-qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                                            </div>
                                                        </div>
                                                        <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                                    </td>
                                                    <td class="cart-price cart-flex-item text-center small-hide">
                                                        <span class="money fw-500">$198.00</span>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url('cart/remove/' . $item['id']); ?>" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i>Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach;?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Order Summary-->

                            <!--Cart Summary-->
                            <div class="cart-info mt-4 mb-4 mb-lg-0">
                                <div class="cart-order-detail cart-col">
                                    <div class="row g-0 border-bottom pb-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$326.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">-$25.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$10.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                                    </div>
                                    <div class="row g-0 pt-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">$311.00</b></span>
                                    </div>
                                </div>                               
                            </div>
                            <!--Cart Summary-->                           
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <!--Order Address-->
                            <div class="block">
                                <div class="block-content">  
                                    <div class="row g-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="shipping-details mb-4 mb-sm-0">
                                                <h3 class="title mb-3">Shipping Address</h3>
                                                <p><?php echo $this->session->userdata('alamat'); ?>, <?php echo $this->session->userdata('kabupaten'); ?>,</p>
                                                <p><?php echo $this->session->userdata('provinsi'); ?>,</p>
                                                <p><?php echo $this->session->userdata('pos'); ?>,</p>
                                                <p><?php echo $this->session->userdata('telephone'); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="billing-details">
                                                <h3 class="title mb-3">Billing Address</h3>
                                                <p><?php echo $this->session->userdata('alamat'); ?>, <?php echo $this->session->userdata('kabupaten'); ?>,</p>
                                                <p><?php echo $this->session->userdata('provinsi'); ?>,</p>
                                                <p><?php echo $this->session->userdata('pos'); ?>,</p>
                                                <p><?php echo $this->session->userdata('telephone'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Order Address-->

                            <!--Order Method-->
                            <div class="block mt-4">
                                <div class="block-content">  
                                    <div class="row g-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="shipping-details mb-4 mb-sm-0">
                                                <h3 class="title mb-3">Shipping Method</h3>
                                                <p>Flat Rate - Fixeds</p>
                                                <p>Delivery Date: N/A</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="billing-details">
                                                <h3 class="title mb-3">Payment Method</h3>
                                                <p>Check / Money order</p>
                                                <p>Cash on delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Order Method-->

                            <!--Order Details-->
                            <div class="block mt-4">
                                <div class="block-content">  
                                    <div class="row g-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="shipping-details mb-4 mb-sm-0">
                                                <h3 class="title mb-3">Order details</h3>
                                                <p>Order ID: GHERT05764</p>
                                                <p>Order Date: October 14, 2023</p>
                                                <p>Order Total: $311.00</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="billing-details">
                                                <h3 class="title mb-3">Expected date of delivery</h3>
                                                <p>Your order is on the way</p>
                                                <p class="h5 my-2">October 18, 2023</p>
                                                <p><a href="#" class="btn-link">Track order</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Order Details-->

                            <!--Order Delivery-->
                            <div class="d-flex-wrap w-100 mt-4 text-center">
                                <a href="index.html" class="d-inline-flex align-items-center btn btn-outline-primary me-2 mb-2 me-sm-3"><i class="me-2 icon an an-angle-left-r"></i>Continue Shopping</a>
                                <button type="button" class="d-inline-flex align-items-center btn me-2 mb-2 me-sm-3"><i class="me-2 icon an an-print"></i>Print Order</button>
                                <button type="button" class="d-inline-flex align-items-center btn me-2 mb-2 me-sm-3"><i class="me-2 icon an an-sync-ar"></i>Re-Order</button>
                            </div>
                            <!--Order delivery-->
                        </div>
                    </div>
                </div>