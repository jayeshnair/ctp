<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce; ?>

<?php $woocommerce->show_messages(); ?>

<?php do_action('woocommerce_before_customer_login_form'); ?>

<?php if (get_option('woocommerce_enable_myaccount_registration')=='yes') : ?>

<div class="col2-set" id="customer_login">

	<div class="col-1">

<?php endif; ?>

		
		<form method="post" class="login">
			<h3><?php _e( 'I already have an account here', 'yit' ); ?></h3>

            <?php do_action('yit_before_the_login_form')  ?>

			<p class="form-row form-wide">
				<label for="username"><?php _e( 'Username or email', 'yit' ); ?> <span class="required">*</span></label>
				<input type="text" class="input-text" name="username" id="username" />
			</p>
			<p class="form-row form-wide">
				<label for="password"><?php _e( 'Password', 'yit' ); ?> <span class="required">*</span></label>
				<input class="input-text" type="password" name="password" id="password" />
			</p>
			<div class="clear"></div>

			<p class="form-row">
				<?php $woocommerce->nonce_field('login', 'login') ?>
				<input type="submit" class="button" name="login" value="<?php _e( 'Login', 'yit' ); ?>" />
				<a class="lost_password" href="<?php

				$lost_password_page_id = woocommerce_get_page_id( 'lost_password' );

				if ( $lost_password_page_id )
					echo esc_url( get_permalink( $lost_password_page_id ) );
				else
					echo esc_url( wp_lostpassword_url( home_url() ) );

				?>"><?php _e( 'Lost Password?', 'yit' ); ?></a>

				
			</p>
			<div class="clear"></div>
		</form>



<?php if (get_option('woocommerce_enable_myaccount_registration')=='yes') : ?>

	</div>

	<div class="col-2">

		
		<form method="post" class="register">

			<h3><?php _e( 'I\'m new here', 'yit' ); ?></h3>

			<?php if ( get_option( 'woocommerce_registration_email_for_username' ) == 'no' ) : ?>

				<p class="form-row form-row-first">
					<label for="reg_username"><?php _e( 'Username', 'yit' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="reg_username" value="<?php if (isset($_POST['username'])) echo esc_attr($_POST['username']); ?>" />
				</p>

				<p class="form-row form-row-last">

			<?php else : ?>

				<p class="form-row form-row-wide">

			<?php endif; ?>

				<label for="reg_email"><?php _e( 'Email', 'yit' ); ?> <span class="required">*</span></label>
				<input type="email" class="input-text" name="email" id="reg_email" value="<?php if (isset($_POST['email'])) echo esc_attr($_POST['email']); ?>" />
			</p>

			<div class="clear"></div>

			<p class="form-row form-row-first">
				<label for="reg_password"><?php _e( 'Password', 'yit' ); ?> <span class="required">*</span></label>
				<input type="password" class="input-text" name="password" id="reg_password" value="<?php if (isset($_POST['password'])) echo esc_attr($_POST['password']); ?>" />
			</p>
			<p class="form-row form-row-last">
				<label for="reg_password2"><?php _e( 'Re-enter password', 'yit' ); ?> <span class="required">*</span></label>
				<input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if (isset($_POST['password2'])) echo esc_attr($_POST['password2']); ?>" />
			</p>
			<div class="clear"></div>

			<!-- Spam Trap -->
			<div style="left:-999em; position:absolute;"><label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

			<?php do_action( 'register_form' ); ?>

			<p class="form-row">
				<?php $woocommerce->nonce_field('register', 'register') ?>
				<input type="submit" class="button" name="register" value="<?php _e( 'Register', 'yit' ); ?>" />
			</p>

		</form>

	</div>

</div>

    <?php if( defined('NEW_FB_LOGIN') && NEW_FB_LOGIN == 1 && function_exists('new_fb_sign_button') ): ?>
        <div class="fb-connect">
            <h3> <?php _e('or login with facebook', 'yit') ?></h3>
            <div class="btn-fb-login">
                <a href="<?php echo new_fb_login_url() ?>&redirect=<?php echo site_url() ?>/" onclick="window.location = '<?php bloginfo('url') ?>/wp-login.php?loginFacebook=1&redirect=<?php echo site_url() ?>/'; return false;">Connect  with  Facebook</a>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>


<?php do_action('woocommerce_after_customer_login_form'); ?>