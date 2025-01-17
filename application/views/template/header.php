<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/index7-organic-food.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2024 03:37:25 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>MasRakuuu</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/images/wota.png');?>" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/css/plugins.css');?>">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/css/style-min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css');?>">
        <link base href="<?=base_url();?>">
       
    </head>

    <body class="template-index index-demo7">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!--Top Header-->
            <div class="top-header bg-white text-uppercase">
                <div class="container container-1330">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-6 col-md-4 col-lg-4 text-left">
                            <div class="select-wrap language-picker float-start">
                                <ul class="default-option">
                                    <li><div class="option english"><div class="icon"><img src="assets/images/flag/english.png" alt="english" width="24" height="24" /></div><span>English</span></div></li>
                                </ul>
                                <ul class="select-ul">
                                    <li><div class="option english"><div class="icon"><img src="assets/images/flag/english.png" alt="english" width="24" height="24" /></div><span>English</span></div></li>
                                    <li><div class="option arabic"><div class="icon"><img src="assets/images/flag/arabic.png" alt="arabic" width="24" height="24" /></div><span>Arabic</span></div></li>
                                    <li><div class="option english"><div class="icon"><img src="assets/images/flag/french.png" alt="french" width="24" height="24" /></div><span>French</span></div></li>
                                </ul>
                            </div>
                            <div class="select-wrap currency-picker float-start">
                                <ul class="default-option">
                                    <li><div class="option IDR"><div class="icon"><img src="assets/images/flag/idr.png" alt="idr" width="24" height="24" /></div><span>IDR</span></div></li>
                                </ul>
                                <ul class="select-ul">
                                    <li><div class="option IDR"><div class="icon"><img src="assets/images/flag/idr.png" alt="idr" width="24" height="24" /></div><span>IDR</span></div></li>
                                    <li><div class="option USD"><div class="icon"><img src="assets/images/flag/usd.png" alt="usd" width="24" height="24" /></div><span>USD</span></div></li>
                                    <li><div class="option JPY"><div class="icon"><img src="assets/images/flag/jpy.png" alt="jpy" width="24" height="24" /></div><span>JPY</span></div></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center d-none d-md-block">
                            <div class="promo-items promo-slider-1items">
                                <div class="item">Welcome to MasRakuuu Shop</div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-6 col-md-4 col-lg-4 text-right d-flex align-items-center justify-content-end">
                        <?php if($this->session->userdata('logged_in')): ?>
                            <span class="phone-txt me-2 d-none d-sm-inline">
                            <a href="<?php echo base_url('mypage');?>">
                                Hallo, <?php echo $this->session->userdata('username'); ?></span>
                        <?php else: ?>
                             <span class="phone-txt me-2 d-none d-sm-inline">Need help? Call Us:</span>
                            <a href="tel:6282146150660" class="phone d-flex-center float-start text-nowrap">
                            <i class="icon anm anm-phone-l d-none d-sm-none"></i>
                            <span class="phone-no d-inline d-sm-inline">(+62) 821 4615 0660</span>
                            </a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Top Header-->

            <!--Header-->
            <header class="header header-7"> 
                <!--Header inner-->
                <div class="header-main d-flex align-items-center">
                    <div class="container container-1330">        
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xl-6 align-self-center icons-col text-left d-xl-none">
                                <!--Mobile Toggle-->
                                <button type="button" class="iconset icon-link ps-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-inline-flex flex-column d-lg-none">
                                    <span class="iconCot"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></span>
                                    <span class="text d-none">Menu</span>
                                </button>
                                <!--End Mobile Toggle-->
                                <!--Search Mobile-->
                                <div class="search-parent iconset d-xl-none">
                                    <div class="site-search">
                                        <a href="#;" class="search-icon icon-link clr-none d-flex" data-bs-toggle="offcanvas" data-bs-target="#search-drawer">
                                            <span class="iconCot"><i class="hdr-icon icon anm anm-search-l"></i></span>
                                            <span class="text d-none d-xl-flex flex-column text-left">Search</span>
                                        </a>
                                    </div>
                                    <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                                        <div class="container">
                                            <div class="search-header d-flex-center justify-content-between mb-3">
                                                <h3 class="title m-0">What are you looking for?</h3>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="search-body">
                                                <form class="form minisearch" id="header-search" action="#" method="get">
                                                    <!--Search Field-->
                                                    <div class="d-flex searchField">
                                                        <div class="input-box d-flex fl-1">
                                                            <form action="<?php echo base_url("search");?>" method="get" role="search">
                                                            <input type="search" name="query" class="input-text rounded-0 border-start-0 border-end-0" placeholder="Search for products..." value="" />
                                                            <button type="submit" class="action search d-flex-justify-center btn btn-primary rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!--End Search Field-->
                                            
                                                    <!--Search products-->
                                                 
                                                    <!--End Search products-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Search Mobile--> 
                                <!--Account Mobile-->
                                <div class="account-parent iconset d-inline-block d-xl-none">
                                    <div class="account-link"><span class="iconCot"><i class="hdr-icon icon anm anm-user-al"></i></span></div>
                                    <div id="accountBox">
                                        <div class="customer-links">
                                            <ul class="m-0">
                                                <li><a href="login.html"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                                <li><a href="register.html"><i class="icon anm anm-user-al"></i>Register</a></li>
                                                <li><a href="my-account.html"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                                <li><a href="wishlist-style1.html"><i class="icon anm anm-heart-l"></i>Wishlist</a></li>
                                                <li><a href="compare-style1.html"><i class="icon anm anm-random-r"></i>Compare</a></li>
                                                <li><a href="login.html"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--End Account Mobile-->
                            </div>

                            <!--Logo-->
                            <div class="logo col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 align-self-center">
                                <a class="logoImg" href="<?php echo base_url('home');?>"><img class="mx-auto mx-xl-0" src="assets/images/wota-banner.png" alt="Wota Shop" title="Wota Shop" width="149" height="39" /></a>
                            </div>
                            <!--End Logo-->
                            <!--Search Inline-->
                            <div class="col-1 col-sm-1 col-md-1 col-lg-4 col-xl-4 align-self-center d-none d-xl-block">
                                <div class="minisearch-inline">
                                    <form class="form minisearch" id="header-search0" action="<?php echo base_url('search');?>" method="get" role="search">
                                        <label class="label d-none"><span>Search</span></label>
                                        <!--Search Field-->
                                        <div class="d-flex searchField">
                                            <div class="input-box d-flex fl-1 position-relative">
                                                <input type="search" name="query" class="input-group-field input-text rounded-pill rounded-start-0 border-start-0" placeholder="Search for products, brands..." value="" />
                                                <button type="submit" class="input-group-btn action search d-flex-justify-center text-link"><i class="hdr-icon icon anm anm-search-l me-2"></i></button>
                                            </div>
                                        </div>
                                        <!--End Search Field-->
                                    </form>
                                </div>
                            </div>
                            <!--End Search Inline-->
                            <!--Right Icon-->
                            <div class="col-4 col-sm-4 col-md-5 col-lg-5 col-xl-6 align-self-center icons-col text-right">
                                <!--Compare-->
                                <div class="compare-link iconset d-none d-sm-inline-block">
                                    <a href="compare-style1.html" class="icon-link clr-none d-flex">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm-random-r"></i><span class="wishlist-count d-xl-none">3</span></span>
                                        <span class="text d-none d-xl-flex flex-column text-left">Compare <small>0 Item</small></span>
                                    </a>
                                </div>
                                <!--End Compare-->
                                <!--Wishlist-->
                                <?php if($this->session->userdata('role') === 'user'):?>
                                <div class="wishlist-link iconset">
                                    <a href="wishlist-style1.html" class="icon-link clr-none d-flex">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count d-xl-none">5</span></span>
                                        <span class="text d-none d-xl-flex flex-column text-left">Wishlist <small>3 Item</small></span>
                                    </a>
                                </div>
                                <?php elseif($this->session->userdata('role') === 'admin'):?>
                                <div class="wishlist-link iconset">
                                    <a href="<?php echo base_url('addproduct');?>" class="icon-link clr-none d-flex">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count d-xl-none">5</span></span>
                                        <span class="text d-none d-xl-flex flex-column text-left">Add Product <small>(+)</small></span>
                                    </a>
                                </div>
                                <?endif;?>
                                <!--End Wishlist-->
                                <!--Account desktop-->
                                <?php if($this->session->userdata('logged_in')): ?>
                                <div class="account-link iconset d-none d-xl-inline-block">
                                    <div class="icon-link clr-none d-flex">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm anm-user-al"></i></span>
                                        <span class="text d-none d-xl-flex flex-column text-left">My Account <small><a href="<?php echo base_url('login/keluar'); ?>" >Logout</a>/<a href="<?php echo base_url('mypage'); ?>" >My Page</a></small></span>
                                    </div>
                                </div>
                                <?php else :?>
                                    <div class="account-link iconset d-none d-xl-inline-block">
                                    <div class="icon-link clr-none d-flex">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm anm-user-al"></i></span>
                                        <span class="text d-none d-xl-flex flex-column text-left">My Account <small><a href="<?php echo base_url('login'); ?>" >Login</a> / <a href="<?php echo base_url('signup'); ?>">Register</a></small></span>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!--End Account desktop-->
                                <!--Minicart-->
                                <div class="header-cart iconset pe-0">
                                    <a href="<?php echo base_url('cart');?>" class="header-cart btn-minicart icon-link clr-none d-flex">
                                        <span class="iconCot"><i class="hdr-icon icon anm anm-basket-l"></i><span class="cart-count">2</span></span>
                                        <span class="text d-none d-md-flex flex-column text-left">Basket</span>
                                    </a>
                                </div>
                                <!--End Minicart-->
                            </div>
                            <!--End Right Icon-->
                        </div>                                                
                    </div>
                </div>
                <!--End Header inner-->
                <!--Navigation Desktop-->
                <div class="main-menu-outer d-none d-lg-block header-fixed">
                    <div class="container container-1330">
                        <div class="menu-outer rounded-4">
                            <div class="row g-0">  
                                <div class="col-1 col-sm-1 col-md-1 col-lg-3 align-self-center">                                   
                                </div>
                                <nav class="navigation" id="AccessibleNav">
                                <ul id="siteNav" class="site-nav medium center">
                                            <li class=""><a href="<?php echo base_url('home');?>">Home <i class=""></i></a>
                                            </li>
                                            <li class="lvl1 parent megamenu"><a href="<?php echo base_url('categories');?>">Categories <i class=""></i></a>
                                            </li>
                                            <li class=""><a href="<?php echo base_url('news');?>">News <i class=""></i></a>
                                            </li>
                                            <li class="lvl1 parent dropdown"><a href="#">Pages<i class="icon anm anm-angle-down-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="<?php echo base_url('contactus');?>" class="site-nav">Contact Us <i class="site-nav"></i></a>
                                                    </li>
                                                    <li><a href="contact-style1.html" class="site-nav">About Us <i class="site-nav"></i></a>
                                                    </li>
                                                    <li><a href="contact-style1.html" class="site-nav">FAQ <i class="site-nav"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Navigation Desktop-->
            </header>
            <!--End Header-->

