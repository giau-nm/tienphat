<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div id="column-left" class="col-sm-4 col-md-4 col-lg-3">
                <div id="category-menu" class="navbar collapse mb_40 hidden-sm-down in" aria-expanded="true" style="" role="button">
                    <div class="nav-responsive">
                        <ul class="nav  main-navigation collapse in ">
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
            <div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mt_30">
                <div class="banner">
                    <div class="main-banner owl-carousel">
                        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=-1&post_type=slider'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <div class="item"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'img-responsive') ); ?></div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="cms_banner mt_10">
                        <div class="col-xs-6 col-sm-12 col-md-4 mt_20">
                            <div id="subbanner1" class="sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub1.jpg" alt="Sub Banner1" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12 col-md-4 mt_20">
                            <div id="subbanner2" class="sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub2.jpg" alt="Sub Banner2" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12 col-md-4 mt_20">
                            <div id="subbanner2" class="sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub3.jpg" alt="Sub Banner2" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thuong-hieu owl-carousel">
            <div class="item"><a href="#"><img src="https://www.vettimes.co.uk/app/uploads/2017/05/Nexgard-Spectra-Logo.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://gosu.com.vn/wp-content/uploads/2014/12/Rongbay-com.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://www.amerimation.net/vol3/wp-content/uploads/2013/12/KACON_LOGO.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://hiokivietnam.com/wp-content/uploads/2016/02/Hioki_Corporation.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="https://www.liaison.com/wp-content/uploads/2017/03/logo-Gartner.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="https://advizex.com/wp-content/uploads/2016/05/trend-micro-logo-200x100.png" alt="Main Banner" class="img-responsive" /></a></div>
            <div class="item"><a href="#"><img src="http://inoffsetnhatrang.com/wp-content/uploads/2016/11/logo-asia.jpg" alt="Main Banner" class="img-responsive" /></a></div>
        </div>
        <div class="cat-gory">
            <?php $args = array( 
                'hide_empty' => 0,
                'taxonomy' => 'product_cat',
                'number' => 5,
                ); 
                $cates = get_categories( $args ); 
                foreach ( $cates as $cate ) {  
                    $thumbnail_id = get_woocommerce_term_meta( $cate->term_id, 'thumbnail_id', true ); 
                    $image = wp_get_attachment_url( $thumbnail_id );
                ?>
                    <div class="list-cat">
                        <a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><img style="border: 1px solid #ffd4e3;" src="<?php echo $image; ?>" alt="<?php echo $cate->name ?>"></a>
                        <h4><a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name ?></a></h4>
                    </div>
            <?php } ?>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div id="column-left" class="col-sm-4 col-md-4 col-lg-3">
                <?php get_sidebar(); ?>
            </div>
            <div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <div class="khuyen-mai">
                    <div class="heading-part">
                        <h2 class="main_title">Quà tặng cho bạn</h2>
                        <div class="clear"></div>
                    </div>
                    <div class="item product-layout product-list">
                        <?php $args = array( 'post_type' => 'product','posts_per_page' =>1,); ?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php global $product; ?>
                        <div class="product-thumb">
                            <div class="image product-imageblock"> 
                                <a href="<?php the_permalink(); ?>"> 
                                    <img data-name="product_image" src="<?php echo hk_get_thumb(get_the_id(), 305, 391); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"> 
                                    <img src="<?php echo hk_get_thumb(get_the_id(), 305, 391); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive">  
                                </a> 
                            </div>
                            <div class="caption product-detail text-left">
                                <h6 data-name="product_name" class="product-name">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h6>
                                <span class="price">
                                    <span class="amount">
                                        <?php echo $product->get_price_html(); ?>
                                    </span>
                                </span>
                                <div class="product-desc mt_20"><?php echo teaser(30); ?></div>
                                <div class="timer mt_80">
                                    <div class="days"></div>
                                    <div class="hours"></div>
                                    <div class="minutes"></div>
                                    <div class="seconds"></div>
                                </div>
                                <div class="button-group text-center">
                                    <div class="quickview"><a href="<?php the_permalink(); ?>"><span>Xem ngay</span></a></div>
                                    <div class="add-to-cart"><a href="#"><span>Thêm vào giỏ</span></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="cmt">
                            <div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
                        </div>
                        <?php endwhile;  wp_reset_postdata(); ?>
                    </div>
                </div>
                <div id="product-tab">
                    <div class="heading-part">
                        <h2 class="main_title">Sản phẩm mới nhất</h2>
                        <div class="clear"></div>
                    </div>
                    <div class="content-product mtb_20">
                        <div class="row">
                            <?php $args = array( 'post_type' => 'product','posts_per_page' =>8,); ?>
                            <?php $getposts = new WP_query( $args);?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php global $product; ?>
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> 
                                            <a href="<?php the_permalink(); ?>"> 
                                                <img data-name="product_image" src="<?php echo hk_get_thumb(get_the_id(), 223, 286); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"> 
                                                <img src="<?php echo hk_get_thumb(get_the_id(), 223, 286); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"> 
                                            </a> 
                                        </div>
                                        <div class="caption product-detail text-left">
                                            <h6 data-name="product_name" class="product-name mt_20"><a href="<?php the_permalink(); ?>" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
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
                <div class="row">
                    <div class="cms_banner mt_40 mb_50">
                      <div class="col-xs-12">
                        <div id="subbanner3" class="banner sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub4.jpg" alt="Sub Banner3" class="img-responsive"></a> </div>
                      </div>
                    </div>
                </div>
                <div id="sale-product">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Sản phẩn nổi bật</h2>
                    </div>
                    <div class="Specials owl-carousel">
                        <?php $args = array( 'post_type' => 'product','posts_per_page' =>8,); ?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php global $product; ?>
                        <div class="product-layout product-list">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> 
                                    <a href="<?php the_permalink(); ?>"> 
                                        <img data-name="product_image" src="<?php echo hk_get_thumb(get_the_id(), 305, 391); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive"> 
                                        <img src="<?php echo hk_get_thumb(get_the_id(), 305, 391); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive">  
                                    </a> 
                                </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h6>
                                    <span class="price">
                                        <span class="amount">
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                    </span>
                                    <div class="product-desc mt_20"><?php echo teaser(30); ?></div>
                                    <div class="timer mt_80">
                                        <div class="days"></div>
                                        <div class="hours"></div>
                                        <div class="minutes"></div>
                                        <div class="seconds"></div>
                                    </div>
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
                <div class="row">
                    <div class="cms_banner mt_60 mb_50">
                        <div class="col-xs-12">
                            <div id="subbanner4" class="banner sub-hover"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sub5.jpg" alt="Sub Banner4" class="img-responsive"></a>
                                <div class="bannertext"> </div>
                            </div>
                        </div>
                    </div>
                </div>
          <!-- =====  SUB BANNER END  ===== -->
          <!-- =====  product ===== -->
            <div class="row">
                <div class="col-md-4">
              <div class="heading-part mb_20 ">
                <h2 class="main_title">Chăm sóc body</h2>
              </div>
              <div id="featu-pro" class="owl-carousel">
                <ul class="row ">
                    <?php $args = array( 'post_type' => 'product','posts_per_page' =>3, 'product_cat' =>'cham-soc-body'); ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
                    <li class="item product-layout-left mb_20">
                        <div class="product-list col-xs-4">
                          <div class="product-thumb">
                            <div class="image product-imageblock"> 
                                <a href="<?php the_permalink(); ?>"> 
                                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                </a> 
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-8">
                          <div class="caption product-detail">
                            <h6 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <span class="price">
                                <span class="amount">
                                    <?php echo $product->get_price_html(); ?>
                                </span>
                            </span>
                          </div>
                        </div>
                    </li>
                    <?php endwhile;  wp_reset_postdata(); ?>
                </ul>
                <ul class="row ">
                    <?php $args = array( 'post_type' => 'product','posts_per_page' =>3, 'product_cat' =>'cham-soc-body', 'offset'=>3); ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
                    <li class="item product-layout-left mb_20">
                        <div class="product-list col-xs-4">
                          <div class="product-thumb">
                            <div class="image product-imageblock"> 
                                <a href="<?php the_permalink(); ?>"> 
                                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                </a> 
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-8">
                          <div class="caption product-detail">
                            <h6 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                            <span class="price">
                                <span class="amount">
                                    <?php echo $product->get_price_html(); ?>
                                </span>
                            </span>
                          </div>
                        </div>
                    </li>
                    <?php endwhile;  wp_reset_postdata(); ?>
                </ul>
              </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Chăm sóc tóc</h2>
                    </div>
                    <div id="featu-pro" class="owl-carousel">
                        <ul class="row ">
                            <?php $args = array( 'post_type' => 'product','posts_per_page' =>3, 'product_cat' =>'cham-soc-toc'); ?>
                            <?php $getposts = new WP_query( $args);?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php global $product; ?>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                  <div class="product-thumb">
                                    <div class="image product-imageblock"> 
                                        <a href="<?php the_permalink(); ?>"> 
                                            <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                            <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                        </a> 
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-8">
                                  <div class="caption product-detail">
                                    <h6 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                    <span class="price">
                                        <span class="amount">
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                    </span>
                                  </div>
                                </div>
                            </li>
                            <?php endwhile;  wp_reset_postdata(); ?>
                        </ul>
                        <ul class="row ">
                            <?php $args = array( 'post_type' => 'product','posts_per_page' =>3, 'product_cat' =>'cham-soc-toc', 'offset'=>3); ?>
                            <?php $getposts = new WP_query( $args);?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php global $product; ?>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                  <div class="product-thumb">
                                    <div class="image product-imageblock"> 
                                        <a href="<?php the_permalink(); ?>"> 
                                            <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                            <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                        </a> 
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-8">
                                  <div class="caption product-detail">
                                    <h6 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                    <span class="price">
                                        <span class="amount">
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                    </span>
                                  </div>
                                </div>
                            </li>
                            <?php endwhile;  wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Chăm sóc da</h2>
                    </div>
                    <div id="featu-pro" class="owl-carousel">
                        <ul class="row ">
                        <?php $args = array( 'post_type' => 'product','posts_per_page' =>3, 'product_cat' =>'cham-soc-da'); ?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php global $product; ?>
                        <li class="item product-layout-left mb_20">
                            <div class="product-list col-xs-4">
                              <div class="product-thumb">
                                <div class="image product-imageblock"> 
                                    <a href="<?php the_permalink(); ?>"> 
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                    </a> 
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-8">
                              <div class="caption product-detail">
                                <h6 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                <span class="price">
                                    <span class="amount">
                                        <?php echo $product->get_price_html(); ?>
                                    </span>
                                </span>
                              </div>
                            </div>
                        </li>
                        <?php endwhile;  wp_reset_postdata(); ?>
                        </ul>
                        <ul class="row ">
                        <?php $args = array( 'post_type' => 'product','posts_per_page' =>3, 'product_cat' =>'cham-soc-da', 'offset'=>3); ?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php global $product; ?>
                        <li class="item product-layout-left mb_20">
                            <div class="product-list col-xs-4">
                              <div class="product-thumb">
                                <div class="image product-imageblock"> 
                                    <a href="<?php the_permalink(); ?>"> 
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="<?php echo hk_get_thumb(get_the_id(), 78, 100); ?>"> 
                                    </a> 
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-8">
                              <div class="caption product-detail">
                                <h6 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                <span class="price">
                                    <span class="amount">
                                        <?php echo $product->get_price_html(); ?>
                                    </span>
                                </span>
                              </div>
                            </div>
                        </li>
                        <?php endwhile;  wp_reset_postdata(); ?>
                        </ul>
                  </div>
                </div>
            </div>
          <!-- =====  product end  ===== -->
          <!-- =====  Blog ===== -->
          <div id="Blog" class="mt_40">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Bài viết blog</h2>
            </div>
            <div class="blog-contain box">
              <div class="blog owl-carousel">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&cat=1'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="item">
                        <div class="box-holder">
                            <div class="thumb post-img">
                                <a href="<?php the_permalink(); ?>"> 
                                    <img src="<?php echo hk_get_thumb(get_the_id(), 470, 250); ?>" alt="<?php the_title(); ?>"> 
                                </a> 
                            </div>
                            <div class="post-info mtb_20 ">
                              <h6 class="mb_10 text-uppercase"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h6>
                              <p><?php echo teaser(30); ?></p>
                              <div class="date-time">
                                <div class="day"> <?php echo get_the_date('d') ?></div>
                                <div class="month"><?php echo get_the_date('M') ?></div>
                              </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
              </div>
            </div>
            <!-- =====  Blog end ===== -->
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>