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


add_filter( 'yit_tabs-title_std', create_function('',"return array(
            'size'   => 14,
            'unit'   => 'px',
            'family' => 'Lato',
            'style'  => 'bold',
            'color'  => '#858282'
			);")
);

add_filter( 'yit_tabs-title-hover_std', create_function('','return "#0a0a0a";'));
add_filter( 'yit_tabs-title-current_std', create_function('','return "#0a0a0a";'));

add_filter( 'yit_prices-table-special-title_std', create_function('',"return array(
            'size'   => 16,
            'unit'   => 'px',
            'family' => 'Lato',
            'style'  => 'bold',
            'color'  => '#0a0a0a'
			);")
);

add_filter( 'yit_prices-table-normal-title_std', create_function('',"return array(
            'size'   => 15,
            'unit'   => 'px',
            'family' => 'Lato',
            'style'  => 'light',
            'color'  => '#0a0a0a'
			);")
);

add_filter( 'yit_prices-table-price_std', create_function('',"return array(
            'size'   => 17,
            'unit'   => 'px',
            'family' => 'Lato',
            'style'  => 'bold',
            'color'  => '#585555'
			);")
);

add_filter( 'yit_prices-table-button_std', create_function('',"return array(
            'size'   => 11,
            'unit'   => 'px',
            'family' => 'Lato',
            'style'  => 'Extra-bold',
            'color'  => '#ffffff'
			);")
);

add_filter( 'yit_prices-table-text_std', create_function('',"return array(
            'size'   => 13,
            'unit'   => 'px',
            'family' => 'Lato',
            'style'  => 'regular',
            'color'  => '#585656'
			);")
);


function yit_tabs_title_style( $array ) {
    $array['selectors'] .= ',.single-product.woocommerce #primary div.product .woocommerce-tabs ul.tabs li a';
    $array['std']['color'] = '#8c8b8b';
    $array['std']['size'] = 13;
    return $array;
}
add_filter( 'yit_tabs-title_style', 'yit_tabs_title_style' );

function yit_tabs_title_hover_style( $array ) {
    $array['selectors'] .= ',.single-product.woocommerce #primary div.product .woocommerce-tabs ul.tabs li a:hover';
    $array['std'] = '#000';
    return $array;
}
add_filter( 'yit_tabs-title-hover_style', 'yit_tabs_title_hover_style' );

function yit_tabs_title_current_style( $array ) {
    $array['selectors'] .= ',.single-product.woocommerce #primary div.product .woocommerce-tabs ul.tabs li.active a';
    $array['std'] = '#3c3c3c';
    return $array;
}
add_filter( 'yit_tabs-title-current_style', 'yit_tabs_title_current_style' );