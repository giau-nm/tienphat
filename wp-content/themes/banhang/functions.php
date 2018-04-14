<?php
require get_template_directory() . '/options.php';
require get_template_directory() . '/resize.php';
add_filter('show_admin_bar', '__return_false');
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
function custom_excerpt_length( $length ) {
	return 300;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_action( 'init', 'register_my_menus' );
function register_my_menus(){
	register_nav_menus(
	array(
		'main_nav' => 'Menu chính',
		'cat_nav' => 'Danh mục',
		)
	);
}
if (function_exists('register_sidebar')){
    register_sidebar(array(
       'name'=> 'Sidebar',
       'id' => 'sidebar',
    ));
}
function teaser($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'[...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'...';
}
function setpostview($postID){
    $count_key ='postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID){
    $count_key ='postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
function prefix_remove_default_images( $sizes ) {
 unset( $sizes['small']);
 unset( $sizes['medium']);
 unset( $sizes['large']);
 unset( $sizes['medium_large']);
 return $sizes;
}
function hk_get_thumb($id, $w, $h){
    if(get_post_thumbnail_id($id)){
        $url = wp_get_attachment_url( get_post_thumbnail_id($id));
    } else {
        $url = get_bloginfo('template_directory').'/images/no-thumb.jpg';
    }                                                        
    $image = huykira_image_resize($url, $w, $h, true, false);
    return $image['url'];   
}
function hk_get_image($url, $w, $h){                                                        
    $image = huykira_image_resize($url, $w, $h, true, false);
    return $image['url'];   
}

function hk_remove_ordering() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
}
add_action('init', 'hk_remove_ordering');
function woo_share_and_ontact_hk(){ ?>
    <div class="social-product">
        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
          <g:plusone size="medium"></g:plusone>
    </div>
<?php }
add_action('woocommerce_single_product_summary', 'woo_share_and_ontact_hk', 60);

function woo_star_hk(){ ?>
    <p class="ster">
        <span><i class="fa fa-star"></i></span>
        <span><i class="fa fa-star"></i></span>
        <span><i class="fa fa-star"></i></span>
        <span><i class="fa fa-star"></i></span>
        <span><i class="fa fa-star"></i></span>
    </p>
<?php }
add_action('woocommerce_single_product_summary', 'woo_star_hk', 7);
function wooninja_remove_items() {
    remove_submenu_page( 'woocommerce', 'wc-status');
    remove_submenu_page( 'woocommerce', 'wc-addons');
}
add_action( 'admin_menu', 'wooninja_remove_items', 99, 0 );