<?php 
/**
 * Your Inspiration Themes
 * 
 * In this files there is a collection of a functions useful for the core
 * of the framework.   
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
?>                         
    
            <?php
            /**
             * @see yit_footer
             */
            //do_action( 'yit_footer') ?>
			<div id="footer">
			<div class="container">
			<div class="columnzero"> <img src="http://clicktoprint.in/wp-content/uploads/footer_logo.png" width="" height="" /> </div>
<div class="columnone">
<p> <a href="#"> ALL PRODUCTS </a> </p>
<li> <a href="#"> Calendars </a> </li>
<li> <a href="#">Certificates </a> </li>
<li> <a href="http://clicktoprint.in/greeting-cards/"> Greeting Cards </a> </li>
<li> <a href="http://clicktoprint.in/invitations/">Invitations </a> </li>
<li> <a href="http://clicktoprint.in/photo-album/"> Canvas Prints </a> </li>
<li> <a href="http://clicktoprint.in/flyers/"> Letterheads </a> </li>
<li> <a href="http://clicktoprint.in/mugs/"> Mugs </a> </li>
<li> <a href="http://clicktoprint.in/all-products/notepads/">Notepads/Notebooks </a> </li>
<li> <a href="http://clicktoprint.in/posters/"> Posters </a> </li>
<li> <a href="http://clicktoprint.in/visiting-cards/economy-visiting-cards/"> Visiting Cards </a> </li>
</div>
<div class="columntwo">
<p> <a href="http://clicktoprint.in/visiting-cards/economy-visiting-cards/"> VISITING CARDS </a> </p>
<li> <a href="http://clicktoprint.in/visiting-cards/economy-visiting-cards/">Economy Visiting Cards</a> </li>
<li> <a href="http://clicktoprint.in/visiting-cards/premium-visiting-cards/">Premium Visiting Cards</a> </li>
<li> <a href="http://clicktoprint.in/visiting-cards/rounded-corner-visiting-cards/">Rounded Corner Visiting Cards</a> </li>
</div>
<div class="columnthree">
<p> <a href="http://clicktoprint.in/corporate-stationary/">CORPORATE STATIONARY </a> </p>
<li> <a href="http://clicktoprint.in/flyers/">Letterheads </li>
<li> <a href="http://clicktoprint.in/all-products/notepads/">Notebooks </li>
<li> <a href="http://clicktoprint.in/mugs/">Mugs </li>
<li> <a href="http://clicktoprint.in/visiting-cards/">Visiting Cards </li>
</div>
<div class="columnfour">
<p> <a href="http://clicktoprint.in/marketing-material/">MARKETING MATERIAL </a> </p>
<li> <a href="http://clicktoprint.in/calendars/table-calendars/">Calendars </a> </li>
<li> <a href="http://clicktoprint.in/certificates/">Certificates </a> </li>
<li> <a href="http://clicktoprint.in/greeting-cards/">Greeting Cards </a> </li>
<li> <a href="http://clicktoprint.in/invitations/">Invitations </a> </li>
<li> <a href="http://clicktoprint.in/mugs/">Mugs </a> </li>
<li> <a href="http://clicktoprint.in/all-products/notepads/">Notebooks </a> </li>
<li> <a href="http://clicktoprint.in/posters/">Posters </a> </li>
</div>
<div class="columnfive">
<p> <a href="http://clicktoprint.in/personal-products/">PERSONAL PRODUCTS </a> </p>
<li> <a href="http://clicktoprint.in/calendars/">Calendars </a> </li>
<li> <a href="http://clicktoprint.in/greeting-cards/">Greeting Cards </a> </li>
<li> <a href="http://clicktoprint.in/invitations/">Invitations </a> </li>
<li> <a href="http://clicktoprint.in/mugs/">Mugs </a> </li>
<li> <a href="http://clicktoprint.in/all-products/notepads/">Notebooks </a> </li>
<li> <a href="http://clicktoprint.in/posters/">Posters </a> </li>
</div>
<div class="columnsix">
<p> <a href="http://clicktoprint.in/contact-us/">CONTACT US</a> </p>
<li> <a href="http://clicktoprint.in/faqs/">FAQ</a> </li>
<li> <a href="http://clicktoprint.in/privacy-policy/">Privacy Policy</a> </li>
<li> <a href="http://clicktoprint.in/terms-conditions/">Terms and conditions</a> </li>
</div>
<div class="clear"> &nbsp; &nbsp;</div>
<center><span style="color:#ffffff !important"> © COPYRIGHT 2015. <a href="http://clicktoprint.in/" style="color:#0088cf !important">CLICKTOPRINT.IN</a> </span></center> </div>
			</div>
			</div>
            
        </div>
        <!-- END WRAPPER -->
        <?php do_action( 'yit_after_wrapper' ) ?>        
        
    </div>
    <!-- END BG SHADOW -->
    
    <?php wp_footer() ?>
    <script type="text/javascript">
        jQuery( document ).ready(function() {
            //console.log( "ready!" );
            jQuery( "#content-page p.text-head.active" ).parent().addClass( "active-div" );
        });

        // Rotate
        jQuery.cards = jQuery('#wonderplugintabs-2 .wonderplugintabs-header-ul li.wonderplugintabs-header-li');

        var time = 8000;

        jQuery.cards.each(function() {
            setTimeout( function() { 
                jQuery(this).find('a').trigger( "click" ); 
                console.log('click');
            }, time)
            
        });

    </script>
</body>
<!-- END BODY -->
</html>