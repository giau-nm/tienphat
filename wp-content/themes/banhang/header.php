<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
  <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header id="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="header-top-left">
                                <li>Gọi đặt hàng ngay: 01658949680</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="header-top-right text-right">
                                <li class="account"><a href="<?php bloginfo('url'); ?>/tai-khoan">Tài khoản</a></li>
                                <li class="sitemap"><a href="<?php bloginfo('url'); ?>/lien-he">Liên hệ</a></li>
                                <li class="cart"><a href="<?php bloginfo('url'); ?>/gio-hang">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <nav class="navbar">
                        <div class="navbar-header mtb_20"> 
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> 
                                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" style="width: 190px;"> 
                            </a>
                        </div>
                        <div class="header-right pull-right mtb_50">
                            <button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> 
                                <span class="i-bar"><i class="fa fa-bars"></i></span>
                            </button>
                            <div class="shopping-icon">
                                <div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">
                                    Item's : 
                                    <span class="cart-qty">02</span>
                                </div>
                                <div id="cart-dropdown" class="cart-menu collapse"></div>
                            </div>
                            <div class="main-search pull-right">
                                <div class="search-overlay">
                                    <a href="javascript:void(0)" class="search-overlay-close"></a>
                                    <div class="container">
                                        <form role="search" id="searchform" action="http://html.lionode.com/search" method="get">
                                            <label class="h5 normal search-input-label">Enter keywords To Search Entire Store</label>
                                            <input value="" name="q" placeholder="Search here..." type="search">
                                            <button type="submit"></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-search"> <a id="search-overlay-btn"></a> </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse js-navbar-collapse pull-right">
                          <ul id="menu" class="nav navbar-nav">
                            <li> <a href="index-2.html">Home</a></li>
                            <li> <a href="category_page.html">Shop</a></li>
                            <li> <a href="blog_page.html">Blog</a></li>
                            <li><a href="about.html">About us</a></li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="category">
                                <div class="menu-bar" data-target="#category-menu,#category-menu-responsive" data-toggle="collapse" aria-expanded="true" role="button">
                                    <h4 class="category_text">Chuyên mục</h4>
                                    <span class="i-bar"><i class="fa fa-bars"></i></span>
                                </div>
                            </div>
                            <div id="category-menu-responsive" class="navbar collapse " aria-expanded="true" style="" role="button">
                                <div class="nav-responsive">
                                    <ul class="nav main-navigation collapse in">
                                        <?php $args = array( 
                                            'hide_empty' => 0,
                                            'taxonomy' => 'product_cat',
                                            ); 
                                            $cates = get_categories( $args ); 
                                            foreach ( $cates as $cate ) {  ?>
                                                <li>
                                                    <a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name ?></a>
                                                </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-9">
                            <div class="header-bottom-right offers">
                          	    <form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                            <select name="product_cat" id="input" class="form-control" required="required">
                                                <option value="">Chọn chuyên mục</option>
                                                <?php $args = array( 
                                                    'hide_empty' => 0,
                                                    'taxonomy' => 'product_cat',
                                                    ); 
                                                    $cates = get_categories( $args ); 
                                                    foreach ( $cates as $cate ) {  ?>
                                                        <option value="<?php echo $cate->slug; ?>"><?php echo $cate->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7">
                                            <input type="text" name="s" class="form-control" placeholder="Tên sản phẩm..." >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2">
                                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>