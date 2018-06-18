<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
<style>
.hotline:hover{background:#ff7300}
.hotline:hover .hotline-number{color:white}

.hotline {position: fixed;
    left: 10px;
    bottom: 10px;
    z-index: 9000;
    display: block;
    background: #824a1a;
    color: white;
    padding-top: 5px;padding-bottom:5px; padding-left:12px; padding-right: 12px;
    border-radius: 99px;}
.hotline .hotline-number{font-size:20px; color: #fec901; font-weight: bold}

@media  (max-width: 767px) {

    .hotline{

        display : none;

    }

}
</style>
<a href="tel:+0909009009"><div class="hotline">
<span class="before-hotline">Hotline:</span>
<span class="hotline-number">0909009009</span>
</div></a>
</html>
