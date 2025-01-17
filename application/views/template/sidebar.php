<div id="sidenav" class="sidenav">
    <a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
    <a href="<?php echo base_url('products'); ?>">Products</a>
    <a href="<?php echo base_url('orders'); ?>">Orders</a>
    <a href="<?php echo base_url('users'); ?>">Users</a>
    <a href="<?php echo base_url('settings'); ?>">Settings</a>
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
