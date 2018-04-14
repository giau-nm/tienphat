<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory'); ?>/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory'); ?>/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory'); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory'); ?>/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory'); ?>/css/owl.carousel.css">
  <?php wp_head(); ?>
</head>
<body class="shop-detail">
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
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row ">
		<div id="column-left" class="col-sm-4 col-md-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in  mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <ul class="nav  main-navigation collapse in">
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
          <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
          <div class="blog-category left-sidebar-widget mb_50">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Chuyên mục</h2>
            </div>
            <ul>
              <?php $args = array( 
                    'hide_empty' => 0,
                    'taxonomy' => 'category',
                    ); 
                    $cates = get_categories( $args ); 
                    foreach ( $cates as $cate ) {  ?>
                        <li>
                            <a href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name ?></a>
                        </li>
                <?php } ?>
            </ul>
          </div>
          <div class="left-blog left-sidebar-widget mb_50">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Bài viết mới</h2>
            </div>
            <div id="left-blog">
              <div class="row ">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&cat=1'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="blog-item mb_20">
                      <div class="post-format col-xs-4">
                        <div class="thumb post-img">
                            <a href="<?php the_permalink(); ?>"> 
                                <img src="<?php echo hk_get_thumb(get_the_id(), 80, 60); ?>"  alt="<?php the_title(); ?>">
                            </a>
                        </div>
                      </div>
                      <div class="post-info col-xs-8 ">
                        <h5> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h5>
                        <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d - m - Y'); ?> </div>
                      </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-9 mb_30">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
            <div class="breadcrumb ptb_20">
                <h1><?php the_title(); ?></h1>
            </div>
          <div class="row mt_10 ">
            <div class="col-md-6">
              <div><a class="thumbnails"> <img data-name="product_image" src="<?php echo hk_get_thumb(get_the_id(), 600, 800); ?>" alt="<?php the_title(); ?>" /></a></div>
              <div id="product-thumbnail" class="owl-carousel">
              	<?php
				 	global $product;
				 	$attachment_ids = $product->get_gallery_attachment_ids();
				 	if(count($attachment_ids) > 0) {
					foreach( $attachment_ids as $attachment_id ) { 
				  		$image_link = wp_get_attachment_url( $attachment_id ); ?>
				  		<div class="item">
		                  <div class="image-additional"><a class="thumbnail" href="<?php echo $image_link; ?>" data-fancybox="group1"> <img src="<?php echo hk_get_image($image_link, 100, 100); ?>" alt="<?php the_title(); ?>" /></a></div>
		                </div>
				<?php	}}
				?>
                
              </div>
            </div>
            <div class="col-md-6 prodetail caption product-thumb">
              <h4 data-name="product_name" class="product-name"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
              <div class="rating">
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
              </div>
            <span class="price">
                <span class="amount">
                    <?php echo $product->get_price_html(); ?>
                </span>
            </span>
              <hr>
              <div class="product-desc mtb_30">
              	<?php echo teaser(50); ?>
              </div>
              <div id="product">
                <div class="qty mt_30 form-group2">
                  <label>Số lượng: </label>
                  <input name="product_quantity" min="1" value="1" type="number">
                </div>
                <div class="button-group mt_30">
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="exTab5" class="mtb_30">
                <ul class="nav nav-tabs">
                  <li class="active"> <a href="#1c" data-toggle="tab">Chiết tiết sản phẩm</a> </li>
                  <li><a href="#2c" data-toggle="tab">Đánh giá</a> </li>
                </ul>
                <div class="tab-content mt_20">
                  <div class="tab-pane active" id="1c">
                   	<article class="post-content"><?php the_content(); ?></article>
                  </div>
                  <div class="tab-pane" id="2c">
                    <div class="cmt">
                    	<div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="heading-part text-center">
                <h2 class="main_title mt_50">Sản phẩm liên quan</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="product-layout  product-grid related-pro  owl-carousel mb_50">
            <?php $args = array( 'post_type' => 'product','posts_per_page' =>8,); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
                <div class="item">
                    <div class="product-thumb">
                        <div class="image product-imageblock"> 
                            <a href="<?php the_permalink(); ?>"> 
                                <img data-name="product_image" src="<?php echo hk_get_thumb(get_the_id(), 223, 286); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"> 
                                <img src="<?php echo hk_get_thumb(get_the_id(), 223, 286); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"> 
                            </a> 
                        </div>
                        <div class="caption product-detail text-left">
                            <h6 data-name="product_name" class="product-name mt_20"><a href="<?php the_permalink(); ?>" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                            <div class="rating">
		                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
		                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
		                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
		                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
		                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
		                    </div>
                            <span class="price">
                                <span class="amount">
                                    <?php echo $product->get_price_html(); ?>
                                </span>
                            </span>
                            <div class="button-group text-center">
                                <div class="quickview"><a href="<?php the_permalink(); ?>"><span>Xem ngay</span></a></div>
                                <div class="add-to-cart"><a href="#"><span>Thêm vào giỏ</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;  wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile;?>
    <?php endif; ?>
    <div class="footer pt_60">
          <div class="container">
            <div class="row">
              <div class="col-md-3 footer-block">
                <div class="content_footercms_right">
                  <div class="footer-contact">
                    <div class="footer-logo mb_40"> <a href="index-2.html"> <img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" alt="HealthCare"> </a> </div>
                    <ul>
                      <li>K457/44 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng</li>
                      <li>01658949680 - 01658494681</li>
                      <li>admin@shopmypham.com</li>
                    </ul>
                    <div class="social_icon">
                      <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 footer-block">
                <h6 class="footer-title ptb_20">Chuyên mục</h6>
                <ul>
                  <?php $args = array( 
                      'hide_empty' => 0,
                      'taxonomy' => 'product_cat',
                      'number' => 6,
                      ); 
                      $cates = get_categories( $args ); 
                      foreach ( $cates as $cate ) {  ?>
                          <li>
                              <a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name ?></a>
                          </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-2 footer-block">
                <h6 class="footer-title ptb_20">Sản phẩm</h6>
                <ul>
                  <?php $args = array( 
                      'hide_empty' => 0,
                      'taxonomy' => 'product_cat',
                      'number' => 6,
                      'offset' => 6
                      ); 
                      $cates = get_categories( $args ); 
                      foreach ( $cates as $cate ) {  ?>
                          <li>
                              <a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name ?></a>
                          </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-2 footer-block">
                <h6 class="footer-title ptb_20">Tài Khoản</h6>
                <ul>
                  
                  <!-- Get post News Query -->
                  <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=-1&post_type=page'); ?>
                  <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                  <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                  <?php endwhile; wp_reset_postdata(); ?>
                  <!-- Get post News Query -->
                </ul>
              </div>
              <div class="col-md-3">
                <h6 class="ptb_20">Đăng ký nhận khuyến mãi</h6>
                <p class="mt_10 mb_20">Chúng tôi sẽ gởi mail khi có khuyến mãi</p>
                <div class="form-group">
                  <input class="mb_20" type="text" placeholder="Nhập mail của bạn...">
                  <button class="btn">Đăng ký ngay</button>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom mt_60 ptb_10">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="copyright-part">@ 2017 All Rights Reserved SHOPMYPHAM</div>
                </div>
                <div class="col-sm-6">
                  <div class="payment-icon text-right">
                    <ul>
                      <li><i class="fa fa-cc-paypal "></i></li>
                      <li><i class="fa fa-cc-stripe"></i></li>
                      <li><i class="fa fa-cc-visa"></i></li>
                      <li><i class="fa fa-cc-discover"></i></li>
                      <li><i class="fa fa-cc-mastercard"></i></li>
                      <li><i class="fa fa-cc-amex"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
  <a id="scrollup">Scroll</a>
  <script src="<?php bloginfo('template_directory'); ?>/js/jQuery_v3.1.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
  <script>
  	function m_popup_select () {
	    $('#product-thumbnail').magnificPopup({
	    delegate: 'a',
	    type: 'image',
	    closeOnContentClick: false,
	    closeBtnInside: false,
	    mainClass: 'mfp-with-zoom mfp-img-mobile',
	    image: {
	      verticalFit: true,
	    },
	    gallery: {
	      enabled: true
	    },
	    zoom: {
	      enabled: true,
	      duration: 300, // don't foget to change the duration also in CSS
	      opener: function(element) {
	        return element.find('img');
	      }
	    }

	  })
	}
	m_popup_select ();
  </script>
  <?php wp_footer(); ?>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
</body>
</html>