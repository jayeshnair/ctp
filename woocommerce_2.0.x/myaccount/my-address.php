<?php
/**
 * My Addresses
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$customer_id = get_current_user_id();

if ( get_option('woocommerce_ship_to_billing_address_only') == 'no' ) {
    $page_title = apply_filters( 'woocommerce_my_account_my_address_title', __( 'My Addresses', 'yit' ) );
    $get_addresses    = array(
        'billing' => __( 'Billing Address', 'yit' ),
        'shipping' => __( 'Shipping Address', 'yit' )
    );
} else {
    $page_title = apply_filters( 'woocommerce_my_account_my_address_title', __( 'My Address', 'yit' ) );
    $get_addresses    = array(
        'billing' =>  __( 'Billing Address', 'yit' )
    );
}

$col = 1;
?>

    <h2><?php echo $page_title; ?></h2>

<?php if ( get_option('woocommerce_ship_to_billing_address_only') == 'no' ) echo '<div class="col2-set addresses">'; ?>

<?php $get_address_item = count($get_addresses); $i = 0; ?>

<?php foreach ( $get_addresses as $name => $title ) : ?>
    <?php $i++ ?>
    <div class="address <?php if( $i == $get_address_item ) { echo 'last'; }?>">
        <header class="title">
            <h3><?php echo $title; ?></h3>
        </header>
        <address>
            <?php
            $address = apply_filters( 'woocommerce_my_account_my_address_formatted_address', array(
                'first_name' 	=> get_user_meta( $customer_id, $name . '_first_name', true ),
                'last_name'		=> get_user_meta( $customer_id, $name . '_last_name', true ),
                'company'		=> get_user_meta( $customer_id, $name . '_company', true ),
                'address_1'		=> get_user_meta( $customer_id, $name . '_address_1', true ),
                'address_2'		=> get_user_meta( $customer_id, $name . '_address_2', true ),
                'city'			=> get_user_meta( $customer_id, $name . '_city', true ),
                'state'			=> get_user_meta( $customer_id, $name . '_state', true ),
                'postcode'		=> get_user_meta( $customer_id, $name . '_postcode', true ),
                'country'		=> get_user_meta( $customer_id, $name . '_country', true )
            ), $customer_id, $name );

            $formatted_address = $woocommerce->countries->get_formatted_address( $address );

            if ( ! $formatted_address )
                _e( 'You have not set up this type of address yet.', 'yit' );
            else
                echo $formatted_address;
            ?>
        </address>
        <a href="<?php echo esc_url( add_query_arg('address', $name, get_permalink(woocommerce_get_page_id( 'edit_address' ) ) ) ); ?>" class="edit"><?php _e( 'Edit', 'yit' ); ?></a>


    </div>

<?php endforeach; ?>

<?php if ( get_option('woocommerce_ship_to_billing_address_only') == 'no' ) echo '</div>'; ?>