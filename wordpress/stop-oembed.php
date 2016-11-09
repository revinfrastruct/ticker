<?php

add_action('init', function() {

		add_filter( 'oembed_dataparse', function($array) { return array(); }, 11, 3 );
		remove_filter('the_content', array($GLOBALS['wp_embed'], 'autoembed'), 8);

}, 99999);

