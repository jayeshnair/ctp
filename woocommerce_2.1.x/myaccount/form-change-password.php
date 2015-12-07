<?php
/**
 * Change password form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;
?>

<?php wc_print_notices(); ?>

<form action="<?php echo wc_customer_edit_account_url(); ?>" method="post" class="change_reset_password">

    <div class="woocommerce_change_password_title">
        <h2><?php _e( 'Change Password', 'yit' ) ?></h2>
    </div>

    <p class="form-row form-row-first">
        <label for="password_1"><?php _e( 'New password', 'yit' ); ?> <span class="required">*</span></label>
        <input type="password" class="input-text" name="password_1" id="password_1" />
    </p>
    <p class="form-row form-row-last">
        <label for="password_2"><?php _e( 'Re-enter new password', 'yit' ); ?> <span class="required">*</span></label>
        <input type="password" class="input-text" name="password_2" id="password_2" />
    </p>
    <div class="clear"></div>

    <p><input type="submit" class="button" name="change_password" value="<?php _e( 'Save', 'yit' ); ?>" /></p>

    <?php wp_nonce_field('change_password')?>
    <input type="hidden" name="action" value="change_password" />

</form>