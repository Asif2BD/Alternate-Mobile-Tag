<?php
/*
Plugin Name: Alternate Mobile Tag For AMP
Description: Add mobile site url in HEAD sectiomn as Link tag with rel=alternate for AMP mobile version with ?amp.
Plugin URI: http://wpdeveloper.net
Author: WPDeveloper.net
Author URI: http://wpdeveloper.net
Version: 1.0
License: GPL2+
Text Domain: alternate-mobile-tag-for-amp
Min WP Version: 2.5.0
Max WP Version: 4.6
*/

add_action( 'wp_head', 'alternate_amp_mobile_tag' );
function alternate_amp_mobile_tag() {

	$aamt_url = trailingslashit( get_permalink() ); ?>
	<?php // TO DO: Add support for archives, and other parts and stuff..
    	if(is_home() || (is_single()&& !is_attachment()) || is_page() || is_tag() || is_category()){ ?>
    		<link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $aamt_url; ?>?amp" /> 
    		<link rel="alternate" media="handheld" href="<?php echo $aamt_url; ?>?amp" />
    		<?php
    	}
}

