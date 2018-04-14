<?php get_header(); ?>
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
                <h1><?php single_cat_title();?></h1>
            </div>
            <div class="row">
                <div class="three-col-blog text-left">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="blog-item col-md-6 mb_30">
                            <div class="post-format">
                                <div class="thumb post-img"><a href="<?php the_permalink(); ?>"> 
                                    <img src="<?php echo hk_get_thumb(get_the_id(), 470, 250); ?>" alt="<?php the_title(); ?>"> 
                                </div>
                            </div>
                            <div class="post-info mtb_20 ">
                              <h3 class="mb_10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                              <p><?php echo teaser(20); ?></p>
                              <div class="details mtb_20">
                                <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d - M - Y'); ?> </div>
                                <div class="more pull-right"> <a href="<?php the_permalink(); ?>">Xem thêm <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                              </div>
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                        <div class="blog-item col-md-6 mb_30">
                            <p>Không có bài viết trong chuyên mục</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="pagination-nav text-center mtb_20">
                <?php if(paginate_links()!='') {?>
                <div class="quatrang">
                    <?php
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text'    => __('«'),
                        'next_text'    => __('»'),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                        ) );
                    ?>
                </div>
                <?php } ?>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>