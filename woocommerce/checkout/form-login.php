<?php
/**
 * Login form
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */

if ( ! yit_get_option( 'shop-checkout-multistep' ) ) {

    if ( ! is_user_logged_in() ) : ?>
        <div class="checkout-wrapper">
        <?php
        // Not Logged in
        yit_woocommerce_loginfobox();
    endif;
}
?>

<?php if ( ! is_user_logged_in() ) : ?>

    <form method="post" class=" login" style="box-sizing: border-box;">

        <?php do_action( 'woocommerce_login_form_start' ); ?>

        <h3><?php _e( 'I already have an account here', 'yit' ) ?></h3>

        <p class="form-row form-wide">
            <label for="username"><?php _e( 'Username or email', 'yit' ); ?> <span class="required">*</span></label>
            <input type="text" class="input-text" name="username" id="username" value="<?php if (isset($_POST['username'])) echo esc_attr($_POST['username']); ?>"/>
        </p>

        <p class="form-row form-wide">
            <label for="password"><?php _e( 'Password', 'yit' ); ?> <span class="required">*</span></label>
            <input class="input-text" type="password" name="password" id="password" />
        </p>

        <div class="clear"></div>

        <?php do_action( 'woocommerce_login_form' ); ?>

        <p class="form-row">
            <a class="lost_password" href="<?php echo esc_url( wp_lostpassword_url( home_url() ) ); ?>"><?php _e( 'Lost Password?', 'yit' ); ?></a>
            <?php wp_nonce_field( 'woocommerce-login' ) ?>
            <input type="submit" class="red-button" name="login" value="<?php _e( 'Login', 'yit' ); ?>" />
            <input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />
        </p>

        <div class="clear"></div>

        <?php do_action( 'woocommerce_login_form_end' ); ?>
    </form>

<?php endif; ?>