<?php

add_image_size( 'ticker-sized', 1080, 9999 );

add_filter('jpeg_quality', function($arg) { return 80; });

add_action('admin_head', function() {
	        remove_action( 'media_buttons', 'media_buttons' );
});

