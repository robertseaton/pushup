<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
/**
 * This function outputs a 404 "Not Found" error message
 *
 * @since 1.6
 */
function genesis_404() {

	echo genesis_html5() ? '<article class="entry">' : '<div class="post hentry">';

		printf( '<h1 class="entry-title">%s</h1>', __( 'Your page couldn\'t be found!', 'genesis' ) );
		echo '<div class="entry-content">';

				echo '<p> Don\'t worry. I\'ve launched a full investigation. At least one engineer will pay dearly for this. </p> <p> But don\'t leave empty handed. Snag this free giveaway... </p> <h2 id="topline">Free Report Reveals:</h2> <center><p id="report_desc">The 5 Tools I Use To Maximize My Productivity </p><p id="product_tease">(99.9% of Visitors Haven\'t Heard of #5)</p></center><section id="enews-ext-3" class="widget enews-widget">
<div class="widget-wrap">
<div class="enews"><form id="subscribe" action="http://rs.us8.list-manage.com/subscribe/post?u=e5616317a284d75431640f30c&amp;id=b2b92d2757" method="post" name="" target="_blank"><label class="screenread" for="subbox">E-Mail Address</label><input id="subbox" name="EMAIL" required="required" type="email" value="E-Mail Address" onClick="ga(\'send\', \'event\', \'Button\', \'OptIn\', \'404\');" />
<input id="subbutton" type="submit" value="Free Instant Access" /></form></div>
</div>';

			echo '</div>';

		echo genesis_html5() ? '</article>' : '</div>';

}

genesis();
