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
    <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
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