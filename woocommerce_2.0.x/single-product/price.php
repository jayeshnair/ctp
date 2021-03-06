<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;

$html = $product->get_price_html();

if(strpos($html, '<ins><span class="amount">')) {
    $html = str_replace('<ins><span class="amount">','<ins><span class="amount" itemprop="price">', $html);
}else {
    $html = str_replace('<span class="amount">','<span class="amount" itemprop="price">', $html);
}
?>
<div id="offers" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<p class="price">
        <?php echo $html ?>
    </p>

	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>