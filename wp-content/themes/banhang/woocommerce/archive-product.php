<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header( 'shop' ); ?>
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

    <header class="woocommerce-products-header">
		<?php
			do_action( 'woocommerce_archive_description' );
		?>
    </header>
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
	        <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	          <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
	          <div class="breadcrumb ptb_20">
	            <h1><?php woocommerce_page_title(); ?></h1>
	          </div>
	          <!-- =====  BREADCRUMB END===== -->
	          <div class="category-page-wrapper mb_30">
	            <div class="col-xs-8 sort-wrapper">
	                <?php do_action( 'woocommerce_before_shop_loop' ); ?>
	                <div class="clear"></div>
	          	</div>
	            <div class="col-xs-4 text-right list-grid-wrapper">
	              <div class="btn-group btn-list-grid">
	                <button type="button" id="list-view" class="btn btn-default list-view"></button>
	                <button type="button" id="grid-view" class="btn btn-default grid-view active"></button>
	              </div>
	            </div>
	          </div>
	          <div class="row">
	          	<?php if ( have_posts() ) : ?>
				<?php woocommerce_product_loop_start(); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php global $product; ?>
						<div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
			              <div class="item">
			                <div class="product-thumb clearfix mb_30">
			                  <div class="image product-imageblock"> 
			                  	<a href="<?php the_permalink(); ?>"> 
			                  		<img data-name="product_image" src="<?php echo hk_get_thumb(get_the_id(), 300, 400); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive" /> 
			                  		<img src="<?php echo hk_get_thumb(get_the_id(), 300, 400); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive" /> </a> 
			                  	</div>
			                  <div class="caption product-detail text-left">
			                    <h6 data-name="product_name" class="product-name mt_20">
			                    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			                    </h6>
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
			                    <div class="product-desc mt_20 mb_60"><?php echo teaser(30); ?></div>
			                    <div class="button-group text-center">
			                      	<div class="quickview"><a href="<?php the_permalink(); ?>"><span>Xem ngay</span></a></div>
                                    <div class="add-to-cart"><a href="#"><span>Thêm vào giỏ</span></a></div>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>
					<?php endwhile; ?>
				<?php woocommerce_product_loop_end(); ?>
				<?php endif; ?>
	          </div>
	          <div class="pagination-nav text-center mt_50">
	            
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
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	<?php get_footer( 'shop' ); ?>