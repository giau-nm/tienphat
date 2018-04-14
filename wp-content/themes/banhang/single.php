<?php get_header(); ?>
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
          <div class="row">
            <div class="blog-item listing-effect col-md-12 mb_50">
                <div class="details mtb_20">
                    <div class="date"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                </div>
                <article class="post-content"><?php the_content(); ?></article>
                <style>
                div#___plusone_0 {
                    position: relative;
                    top: 5px;
                }

                .xahoi {
                    margin-bottom: 10px;
                }
                </style>
                <div class="xahoi">
                    <div class="fb-send" data-href="<?php the_permalink();?>"></div>
                    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <script src="https://apis.google.com/js/platform.js" async defer></script>
                <g:plusone size="medium"></g:plusone>
                </div>
                <div class="cmt">
                    <div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
                </div>
                <div class="news-posts shadow rel">
                    <h3>Bài viết liên quan</h3>
                    <div class="content-rel">
                        <ul>
                            <?php 
                                foreach((get_the_category()) as $category) { $cat_id = $category->cat_ID; }
                                $args = array ('post_status' => 'publish','category__in' => $cat_id,'post__not_in' => array($post->ID),'showposts' => 10, );
                            ?>
                            <?php $related_post = new WP_query($args); ?>
                            <?php if ( $related_post->have_posts()) : ?><?php while ( $related_post->have_posts() ): ?>
                            <?php $related_post->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-thumbs-up"></i> <?php the_title(); ?> <span>(<?php echo get_the_date('d-m-Y'); ?>)</span></a></li>
                            <?php endwhile; else : ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>