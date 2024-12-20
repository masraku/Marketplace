
            <div class="container"> 
                  <?php if (!empty($cart)): ?>    
                    <div class="row">
                        <!--Cart Content-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                            <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                                <i class="align-middle icon anm anm-truck icon-large me-2"></i><strong class="text-uppercase">Congratulations!</strong> You've got free shipping!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <!--End Alert msg-->

                            <!--Cart Form-->
                            <form action="#" method="post" class="cart-table table-bottom-brd">
                                <table class="table align-middle">
                                    <thead class="cart-row cart-header small-hide position-relative">
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
                                            <td class="cart-delete text-center small-hide">
                                                <a href="<?php echo base_url('cart/remove/' . $item['id']); ?>" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from Cart">
                                                    <i class="icon anm anm-times-r"></i>
                                                </a>
                                            </td>

                                            <td class="cart-image cart-flex-item">
                                                <a href="<?php echo base_url('product'); ?>">
                                                    <img class="cart-image rounded-0 blur-up lazyload" data-src="<?php echo base_url('./assets/images/upload/' . $item['image']); ?>" 
                                                        src="<?php echo base_url('./assets/images/upload/' . $item['image']); ?>" width="120" height="170" />
                                                </a>
                                            </td>

                                            <td class="cart-meta small-text-left cart-flex-item">
                                                <div class="list-view-item-title">
                                                    <a href="<?php echo base_url('product'); ?>">
                                                        <?php echo $item['nama']; ?>
                                                    </a>
                                                </div>
                                            </td>

                                            <td class="cart-price cart-flex-item text-center small-hide">
                                                <span class="money">Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></span>
                                            </td>

                                            <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                    <input class="cart-qty-input qty" type="number" name="quantity[]" value="<?php echo $item['quantity']; ?>" min="1" data-price="<?php echo $item['harga']; ?>" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small-hide">
                                            <span class="money total">Rp <?php echo number_format($item['harga'] * $item['quantity'], 0, ',', '.'); ?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>

                                    <!-- JavaScript untuk Update Total Harga -->
                                    <script>
                                        var total;
                                        document.querySelectorAll('.cart-qty-input').forEach(input => {
                                            input.addEventListener('input', function () {
                                                const price = parseFloat(this.getAttribute('data-price')) || 0;
                                                const quantity = parseInt(this.value) || 0;
                                                const totalElement = this.closest('tr').querySelector('.total');
                                                
                                                // Hitung Total Harga untuk Item Ini
                                                total = price * quantity;
                                                totalElement.textContent = `Rp${new Intl.NumberFormat('id-ID').format(total)}`;
                                                // Update Total Keseluruhan (Jika Ada)
                                                updateGrandTotal();
                                            });
                                        });

                                        function updateGrandTotal() {
                                            let grandTotal = 0;
                                            document.querySelectorAll('.cart-qty-input').forEach(input => {
                                                const price = parseFloat(input.getAttribute('data-price')) || 0;
                                                const quantity = parseInt(input.value) || 0;
                                                grandTotal += total;
                                            });

                                            // Tampilkan Grand Total (pastikan ada elemen dengan id 'grand-total')
                                            document.getElementById('grand-total').textContent = `Rp${new Intl.NumberFormat('id-ID').format(grandTotal)}`;
                                        }
                                    </script>

                                    <!-- Tambahkan Total Keseluruhan di Akhir Halaman Cart -->

                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-start"><a href="<?php echo base_url('home');?>" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i> Continue shopping</a></td>
                                        </tr>
                                    </tfoot>
                                    
                                </table>
                                
                            </form>    
                            <a href="<?php echo base_url('cart/clear'); ?>" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i>Clear Basket</a>

                            <!--End Cart Form-->

                            <!--Note with Shipping estimates-->
                            <div class="row my-4 pt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                                    <div class="cart-note mb-4">
                                        <h5>Add a note to your order</h5>
                                        <label for="cart-note">Notes about your order, e.g. special notes for delivery.</label>
                                        <textarea name="note" id="cart-note" class="form-control cart-note-input" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-12 cart-col">
                                    <div class="cart-discount">
                                        <h5>Discount Codes</h5>
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <label for="address_zip">Enter your coupon code if you have one.</label>
                                                <div class="input-group0">
                                                    <input class="form-control" type="text" name="coupon" required />
                                                    <input type="submit" class="btn text-nowrap mt-3" value="Apply Coupon" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End Note with Shipping estimates-->
                        </div>
                        <!--End Cart Content-->

                        <!--Cart Sidebar-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                            <div class="cart-info sidebar-sticky">
                                <div class="cart-order-detail cart-col">
                                    <div class="row g-0 border-bottom pb-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$226.00</span></span>
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
                                        <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary cart-grand-total"><b class="money"><span id="grand-total">Rp 0</span></b></span>
                                    </div>

                                    <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                                    <p class="cart-shipping fst-normal freeShipclaim"><i class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                                    <div class="customCheckbox cart-tearm">
                                        <input type="checkbox" value="allen-vela" id="cart-tearm">
                                        <label for="cart-tearm">I agree with the terms and conditions</label>
                                    </div>
                                    <a href="<?php echo base_url('checkout');?>" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">Proceed To Checkout</a>
                                    <div class="paymnet-img text-center"><img src="assets/images/icons/safepayment.png" alt="Payment" width="299" height="28" /></div>
                                </div>                               
                            </div>
                        </div>
                        <!--End Cart Sidebar-->
                                <?php else: ?>
                                    <p> You don't have any things</p>
                                <?php endif; ?>
                    </div>
                </div>
        
</div>