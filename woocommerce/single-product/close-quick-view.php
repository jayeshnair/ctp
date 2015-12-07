<?php
/**
 * Close quick view
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $product;

if( !yit_get_option('shop-use-quick-view') && !is_single() ) return;

$terms = get_the_terms( $product->id, 'product_cat' );
if ( empty( $terms ) ) return;

$terms = array_values( $terms );
$term = array_shift( $terms );
?>

<?php if ( ! apply_filters( 'yit_remove_quick_view_og_close_nav', false ) ) : ?>
<div class="og-close group">
    <?php  _e('&lt; Go to')  ?>  <a href="<?php echo get_term_link( $term, 'product_cat' ); ?>"><?php echo $term->name ?></a>
    <?php yit_woocommerce_prev_next_nav() ?>
</div>
<?php endif; ?>