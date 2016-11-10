<?php

add_image_size( 'ticker-sized', 1080, 9999 );

add_filter('jpeg_quality', function($arg) { return 80; });


