<?php
/**
 * Lost password form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $post;

?>

<?php $woocommerce->show_messages(); ?>

    <form action="<?php echo esc_url( get_permalink($post->ID) ); ?>" method="post" class="lost_reset_password">

        <div class="woocommerce_lost_password_title">
            <h2><?php _e( 'Lost Password', 'yit' ) ?></h2>
        </div>

        <?php	if( 'lost_password' == $args['form'] ) : ?>

        <p><?php echo apply_filters( 'woocommerce_lost_password_message', __( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'yit' ) ); ?></p>

        <p class="form-row form-row-first"><label for="user_login"><?php _e( 'Username or email', 'yit' ); ?></label> <input class="input-text" type="text" name="user_login" id="user_login" /></p>

        <p class="form-row"><input type="submit" class="reset-button button" name="reset" value="<?php echo 'lost_password' == $args['form'] ? __( 'Reset Password', 'yit' ) : __( 'Save', 'yit' ); ?>" /></p>

        <?php else : ?>

        <p><?php echo apply_filters( 'woocommerce_reset_password_message', __( 'Enter a new password below.', 'yit') ); ?></p>

        <p class="form-row form-row-first">
            <label for="password_1"><?php _e( 'New password', 'yit' ); ?> <span class="required">*</span></label>
            <input type="password" class="input-text" name="password_1" id="password_1" />
        </p>
        <p class="form-row form-row-last">
            <label for="password_2"><?php _e( 'Re-enter new password', 'yit' ); ?> <span class="required">*</span></label>
            <input type="password" class="input-text" name="password_2" id="password_2" />
        </p>

        <input type="hidden" name="reset_key" value="<?php echo isset( $args['key'] ) ? $args['key'] : ''; ?>" />
        <input type="hidden" name="reset_login" value="<?php echo isset( $args['login'] ) ? $args['login'] : ''; ?>" />
        <input type="submit" class="button lostpw" name="lost_password" value="Save">
        <?php endif; ?>

        <div class="clear"></div>

        <?php $woocommerce->nonce_field( $args['form'] ); ?>

    </form>
