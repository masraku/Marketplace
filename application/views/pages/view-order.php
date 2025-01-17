<!-- View Order Page -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/view-order.css'); ?>">
<div class="container mt-5">
    <div class="order-detail-card">
        <h2 class="order-title">Order Details</h2>
        <div class="order-summary">
            <p><strong>Transaction ID:</strong> <?php echo $order['transaction_id']; ?></p>
            <p><strong>Username:</strong> <?php echo $order['username']; ?></p>
            <p><strong>Total Amount:</strong> Rp <?php echo number_format($order['total_amount'], 2); ?></p>
            <p><strong>Status:</strong> <?php echo ucfirst($order['status']); ?></p>
            <p><strong>Order Date:</strong> <?php echo date('Y-m-d H:i:s', strtotime($order['created_at'])); ?></p>
        </div>
        
        <h4 class="order-items-title">Ordered Items:</h4>
        <table class="order-items-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_items as $item): ?>
                    <tr>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>Rp <?php echo number_format($item['price'], 2); ?></td>
                        <td>Rp <?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?php echo base_url('product'); ?>" class="btn btn-primary">Back to Checkout</a>
    </div>
</div>
<!-- End View Order Page -->
