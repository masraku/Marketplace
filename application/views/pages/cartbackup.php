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

                                    <span class="money total">Rp <?php echo number_format($item['harga'] * $item['quantity'], 0, ',', '.'); ?></span>
