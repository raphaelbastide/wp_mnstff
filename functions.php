<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'before_title' => '<h2 class="open">',
        'after_title' => '</h2><ul class="inside">',
        'after_widget' => '</ul>',
    ));
?>
