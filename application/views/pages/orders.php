<!-- Sidebar Orders -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/orders.css'); ?>">

<div class="sidebar-orders">
    <h4 class="sidebar-title">Recent Orders</h4>
    <ul class="order-list">
        <?php foreach ($orders as $order): ?>
            <li class="order-item">
                <div class="order-info">
                    <p><strong>Transaction ID:</strong> <?php echo $order['transaction_id']; ?></p>
                    <p><strong>Username:</strong> <?php echo $order['username']; ?></p>
                    <p><strong>Total Amount:</strong> Rp<?php echo number_format($order['total_amount'], 2); ?></p>
                    <p><strong>Status:</strong> <?php echo ucfirst($order['status']); ?></p>
                    <p><small><strong>Date:</strong> <?php echo date('Y-m-d H:i:s', strtotime($order['created_at'])); ?></small></p>
                </div>
                <a href="<?php echo base_url('checkout/view_order/'.$order['id']); ?>" class="btn btn-primary btn-sm">View Order</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<!-- End Sidebar Orders -->
