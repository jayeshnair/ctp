<?php
/**
 * Your Inspiration Themes
 * 
 * @package WordPress
 * @subpackage Your Inspiration Themes
 * @author Your Inspiration Themes Team <info@yithemes.com>
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

/*
Template Name: Customize Canvas
*/
 
get_header();
do_action( 'yit_before_primary' ) ?>


<!-- Sub Categories -->
<?php
	foreach(get_categories('parent=0&orderby=id') as $cat) {
	   //echo $cat->term_id.' '.$cat->name.'<br/>';
	}
?>
<!-- START PRIMARY -->
<div id="primary" class="<?php yit_sidebar_layout() ?>">
    <div class="container group">
	    <div class="row">
	    <a href="javascript:history.back()" class="button back-button" > ← Back to Product Gallery</a>
	        <?php do_action( 'yit_before_content' ) ?>
	        <!-- START CONTENT -->
	        <div id="content-page" class="span<?php echo yit_get_sidebar_layout() == 'sidebar-no' ? 12 : 9 ?> content group">
	        <?php
	        do_action( 'yit_loop_page' );

	        comments_template();
	        ?>
	        </div>
	        <!-- END CONTENT -->
	        <?php do_action( 'yit_after_content' ) ?>

	        <?php get_sidebar() ?>

	        <?php do_action( 'yit_after_sidebar' ) ?>

	        <!-- START EXTRA CONTENT -->
	        <?php do_action( 'yit_extra_content' ) ?>
	        <!-- END EXTRA CONTENT -->
	        <br /><br />
	        <div class="product-detail-bot">
	        <!-- Product Description -->
	        	<?php 
	        		//echo"<pre>";
	        		//echo var_dump($_SERVER);
	        		$temp = $_SERVER['REQUEST_URI']; 
	        		$temp = explode('/', $temp);
	        		$productID = $temp[3];
	        		$product_object = get_post($productID);
					echo $product_object->post_content;
        		?>
	        <!-- -->
	        </div>
		</div>
    </div>
</div>
<!-- END PRIMARY -->
<?php
do_action( 'yit_after_primary' );
get_footer() ?>