<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Dashboard'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div id="sidenav" class="sidenav">
    <a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
    <a href="<?php echo base_url('product'); ?>">Products</a>
    <a href="<?php echo base_url('checkout/orders'); ?>">Orders</a>
    <a href="<?php echo base_url('users'); ?>">Users</a>
    <a href="<?php echo base_url('settings'); ?>">Settings</a>
    <a href="<?php echo base_url('settings/logout'); ?>">Log Out</a>

</div>

<style>
    .sidenav {
        height: 100%; /* Full-height */
        width: 250px; /* Width of the sidebar */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0;
        left: 0;
        background-color: #ff0000; 
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
    }

    .sidenav a {
        padding: 8px 16px;
        text-decoration: none;
        font-size: 18px;
        color:rgb(255, 238, 238);
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }
</style>


    <!-- Konten -->
    <div class="content p-4">
        <?php $this->load->view($content); ?> <!-- Load konten dinamis -->
    </div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
