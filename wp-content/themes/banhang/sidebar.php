<div class="left_banner left-sidebar-widget mt_30 mb_50"> 
    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> 
</div>
<div class="left-cms left-sidebar-widget mb_50">
    <ul>
        <li>
          <div class="feature-i-left ptb_40">
            <div class="icon-right Shipping"></div>
            <h6>Free Shipping</h6>
            <p>Miễn phí vận chuyển trong nội thành</p>
          </div>
        </li>
        <li>
          <div class="feature-i-left ptb_40">
            <div class="icon-right Order"></div>
            <h6>Đặt hàng Online</h6>
            <p>Thời gian : 8am - 11pm</p>
          </div>
        </li>
        <li>
          <div class="feature-i-left ptb_40">
            <div class="icon-right Save"></div>
            <h6>Tiết kiệm</h6>
            <p>Tiết kiệm chi phí</p>
          </div>
        </li>
        <li>
          <div class="feature-i-left ptb_40">
            <div class="icon-right Safe"></div>
            <h6>Bảo mật</h6>
            <p>Thông tin khách hàng luôn được bảo mật</p>
          </div>
        </li>
    </ul>
</div>
<div class="left-special left-sidebar-widget mb_50">
    <div class="heading-part mb_20 ">
        <h2 class="main_title">Sản phẩm giảm giá</h2>
    </div>
    <div id="left-special" class="owl-carousel">
        <ul class="row">
            <?php $args = array( 
                'post_type' => 'product',
                'posts_per_page' => 6, 
                'meta_query'     => array(
                    'relation' => 'OR',
                    array(
                        'key'           => '_sale_price',
                        'value'         => 0,
                        'compare'       => '>',
                        'type'          => 'numeric'
                    )
                )
            ); ?>
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
            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </div>
</div>
<div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/left2.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
<div class="Testimonial left-sidebar-widget mb_50">
  <div class="heading-part mb_20 ">
    <h2 class="main_title">Dánh giá khách hàng</h2>
  </div>
  <div class="client owl-carousel text-center pt_10">
    <div class="item client-detail">
      <div class="client-avatar"> <img style="width: 150px!important;" alt="" src="<?php bloginfo('template_directory'); ?>/images/user1.jpg"> </div>
      <div class="client-title  mt_30"><strong>Võ Quang Huy</strong></div>
      <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
    </div>
    <div class="item client-detail">
      <div class="client-avatar"> <img style="width: 150px!important;" alt="" src="<?php bloginfo('template_directory'); ?>/images/user2.jpg"> </div>
      <div class="client-title  mt_30"><strong>Huy Kira</strong></div>
      <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
    </div>
    <div class="item client-detail">
      <div class="client-avatar"> <img style="width: 150px!important;" alt="" src="<?php bloginfo('template_directory'); ?>/images/user3.jpg"> </div>
      <div class="client-title  mt_30"><strong>Mai Nhi</strong></div>
      <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio ..</p>
    </div>
  </div>
</div>
<div class="Tags left-sidebar-widget mb_50">
  <div class="heading-part mb_20 ">
    <h2 class="main_title">Facebook</h2>
  </div>
  <div class="fb-page" data-href="https://facebook.com/huykiradotnet" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
</div>