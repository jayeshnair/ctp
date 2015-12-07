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

//let's start the game!
require_once('core/load.php');

//---------------------------------------------
// Everybody changes above will lose his hands
//---------------------------------------------

add_filter( 'wpd-templates-per-page', 'change_wpd_templates_per_page');
    function change_wpd_templates_per_page( $nb_per_page ) {
    $nb_per_page = 15;
    return $nb_per_page;
}


if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
		'name'=> 'Top Banner',
		'id' => 'top-banner',
	));
}


add_filter( 'woocommerce_shipping_fields' , 'my_additional_shipping_fields' );
function my_additional_shipping_fields( $fields ) {
    $fields['shipping_email'] = array(
        'label'         => __( 'Ship Email', 'woocommerce' ),
        'required'      => false,
        'class'         => array( 'form-row-first' ),
        'validate'      => array( 'email' ),
    );
    $fields['shipping_phone'] = array(
        'label'         => __( 'Ship Phone', 'woocommerce' ),
        'required'      => true,
        'class'         => array( 'form-row-last' ),
        'clear'         => true,
        'validate'      => array( 'phone' ),
    );
    return $fields;
}

add_filter( 'woocommerce_admin_shipping_fields' , 'my_additional_admin_shipping_fields' );
function my_additional_admin_shipping_fields( $fields ) {
        $fields['email'] = array(
            'label' => __( 'Order Ship Email', 'woocommerce' ),
        );
        $fields['phone'] = array(
            'label' => __( 'Order Ship Phone', 'woocommerce' ),
        );
        return $fields;
}
/* Display additional shipping fields (email, phone) in USER area (i.e. Admin User/Customer display ) */
/* Note:  $fields keys (i.e. field names) must be in format: shipping_ */
add_filter( 'woocommerce_customer_meta_fields' , 'my_additional_customer_meta_fields' );
function my_additional_customer_meta_fields( $fields ) {
        $fields['shipping']['fields']['shipping_phone'] = array(
            'label' => __( 'Telephone', 'woocommerce' ),
            'description' => '',
        );
        $fields['shipping']['fields']['shipping_email'] = array(
            'label' => __( 'Email', 'woocommerce' ),
            'description' => '',
        );
        return $fields;
}